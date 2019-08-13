<?php 

// Receives a tempalte and database row selection. If the template contains markers for the column names it can be output automatically.

class TemplateEngine {

	private $pointer = 0;
	private $template;
	private $generator;
	private $total_rows;

	function get_rows()
	{
		while ($row = $this->result->fetch_assoc()){
			$this->pointer++;
			yield $row;
		}
	}

	function num_rows()
	{
		return $this->result->num_rows;
	}
	
	function __construct($template, $selection)
	{
		$this->result = $selection;
		$this->total_rows = $this->num_rows();
		
		$m = new Mustache_Engine(array('loader' => new Mustache_Loader_FilesystemLoader('assets/templates')));
		
		$this->template = $m->loadTemplate($template);
		
		$this->generator = $this->get_rows();
	}

	function show_row()
	{
		$row = $this->generator->current();
		echo $this->template->render($row);
		$this->generator->next();
	}

	function show_next($num)
	{
		// Templates must use the database column names so that fetched rows can be outputted directly to them.
		$num = min($num, $this->total_rows);

		if ($num + $this->pointer > $this->total_rows) {
			$num = $this->total_rows - $this->pointer;
		}
		if ($this->total_rows > 0) {
			// show $num recents
			for ($i=0; $i < $num; $i++) { 
				$this->show_row();
			}
		}
	}

	function show_all()
	{
		$this->show_next($this->total_rows);
	}

}