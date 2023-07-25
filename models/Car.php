<?php
class Car {
  	// Properties
  	public $make;
  	public $model;
	public $colour;
	
	function __construct($make, $model, $colour) {			// creates a car with a make, model, and colour
		$this->make = $make;
		$this->model = $model;
		$this->colour = $colour;
	}

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
	function set_make($make) {								// funtion to change the modmake of a car
		$this->make = $make;
	}
	
	function set_model($model) {							// funtion to change the model of a car
		$this->model = $model;
	}
		
	function set_colour($colour) {							// funtion to change the make of a car
		$this->colour = $colour;
	}
	
}
?>