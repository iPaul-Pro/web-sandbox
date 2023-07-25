<?php
	require '../models/Car.php';								// need to important Car class to create Car objects

	class Cars {
		
		public $car;
		public $car_make;
		public $car_model;
		public $car_colour;
		
		function __construct() {
			$this->car = new Car("MERCEDES-BENZ", "EQA", "MAGNO MOUNTAIN GREY");
  		}

		// Methods
		function get_car() {
			return $this->car;									// returns car object
		}
		
	}

?>