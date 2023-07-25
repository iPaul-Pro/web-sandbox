<?php
	require '../models/Car.php';								// need to important Car class to create Car objects

	class Cars {
		
		public $car;
		public $car_make;
		public $car_model;
		public $car_colour;
		
		function __construct() {
    		$this->car = new Car();								// create a car object
			$this->car->set_make('MERCEDES-BENZ');				// set car make
			$this->car->set_model('EQA');						// set car model
			$this->car->set_colour('MOUNTAIN GREY');			// set car colour
  		}

		// Methods
		function get_car() {
			return $this->car;									// returns car object
		}
		
	}

?>