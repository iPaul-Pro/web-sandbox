<?php
	require '../models/Car.php';				// important Car class to create Car objects

	$car1 = new Car();							// create a car object
	$car1->set_make('MERCEDES-BENZ');			// set car make
	$car1->set_model('EQA');						// set car model
	$car1->set_colour('MOUNTAIN GREY');			// set car colour

//	echo "Make: " . $car1->get_make() . "<br>";
//	echo "Model: " . $car1->get_model()."<br>";
//	echo "Colour: " . $car1->get_colour()."<br><br>";

	$car_make = $car1->get_make();				// set variable car_make to make of car
	$car_model = $car1->get_model();				// set variable car_model to model of car
	$car_colour = $car1->get_colour();			// set variable car_colour to colour of car
	
//	echo "Make: " . $car_make . "<br>";
//	echo "Model: " . $car_model ."<br>";
//	echo "Colour: " . $car_colour ."<br>";

	// Methods
	function get_car_make() {
		return $car_make;						// returns variable car_make
	}

	function get_car_model() {
		return $car_model;						// returns variable car_model
	}

	function get_car_colour() {
		return $car_colour;						// returns variable car_colour
	}

?>