<?php
	require '../models/Car.php';				// important Car class to create Car objects
	$car = new Car();							// create a car object
	$car->set_make('MERCEDES-BENZ');			// set car make
	$car->set_model('EQA');						// set car model
	$car->set_colour('MOUNTAIN GREY');			// set car colour

	echo "Make: " . $car->get_make() . "<br>";
	echo "Model: " . $car->get_model()."<br>";
	echo "Colour: " . $car->get_colour()."<br><br>";

	$car_make = $car->get_make();				// set variable car_make to make of car
	$car_model = $car->get_model();				// set variable car_model to model of car
	$car_colour = $car->get_colour();			// set variable car_colour to colour of car
	
	echo "Make: " . $car_make . "<br>";
	echo "Model: " . $car_model ."<br>";
	echo "Colour: " . $car_colour ."<br>";

	// Methods
	function get_car() {
		return $car;							// returns car object
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
?>