<?php

class Field {

	public $name;
	public $label;
	public $type;
	public $value;
	public $class;
	public $required;
	public $error;
	public $size;
	public $maxlength;
	public $multi_values;
	public $disabled;

	public function __construct($_name=null, $_label=null, $_type='text', $_value=null, $_required=false, $_class='', $_error = false, $_size=null, $_maxlength=null, $_multi_values=array(), $_disabled = false) {
		$this->name 		= $_name;
		$this->label 		= $_label;
		$this->type 		= $_type;
		$this->value 		= $_value;
		$this->class 		= $_class;
		$this->required 	= $_required;
		$this->error 		= $_error;
		$this->size 		= $_size;
		$this->maxlength 	= $_maxlength;
		$this->multi_values = $_multi_values;
		$this->disabled     = $_disabled;
	}

}