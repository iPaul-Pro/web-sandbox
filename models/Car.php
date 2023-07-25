<?php
class Car {
  	// Properties
  	public $make;
  	public $model;
	public $colour;

  	// Methods - Getters
	function get_make() {
    	return $this->make;
  	}
	
	function get_model() {
		return $this->model;
	}
	
	function get_colour() {
		return $this->colour;
	}
	
	// Methods - Setters
  	function set_make($make) {
    	$this->make = $make;
  	}
  		
	function set_model($model) {
		$this->model = $model;
	}
		
	function set_colour($colour) {
		$this->colour = $colour;
	}
	
}
?>