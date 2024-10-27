<?php

class Template {
	// Path to templte
	protected $template;
	// Vars passed in
	protected $vars = array();

	// constrcutor
	public function __construct( $template ) {
		$this->template = $template;
	}

	public function __get( $keys ) {
		return $this->vars[$keys];
	}

	public function __set( $key, $value ) {
		$this->vars[ $key ] = $value;
	}

	public function __toString() {
		extract( $this->vars );
		chdir( dirname( $this->template ) );
		ob_start();

		include basename( $this->template );
		return ob_get_clean();
	}

}