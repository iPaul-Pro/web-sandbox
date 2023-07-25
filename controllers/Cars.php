<?php
	require '../models/Car.php';						// need to important Car class to create Car objects

	class Cars {
		
		public $car;
		public $car_make;
		public $car_model;
		public $car_colour;
		
		function __construct() {
    		$car = new Car();							// create a car object
			$car->set_make('MERCEDES-BENZ');			// set car make
			$car->set_model('EQA');						// set car model
			$car->set_colour('MOUNTAIN GREY');			// set car colour
			
			$car_make = $car1->get_make();				// set variable car_make to make of car
			$car_model = $car1->get_model();			// set variable car_model to model of car
			$car_colour = $car1->get_colour();			// set variable car_colour to colour of car
  		}

		// Methods
		function get_car() {
			return $this->car;							// returns car object
		}
		/*
		function get_car_make() {
			return $car_make;						// returns variable car_make
		}

		function get_car_model() {
			return $car_model;						// returns variable car_model
		}

		function get_car_colour() {
			return $car_colour;						// returns variable car_colour
		}
		*/
	}

?>