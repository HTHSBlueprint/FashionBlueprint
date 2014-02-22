<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_handler extends CI_Controller {
	public function index()
	{
		$this->load->view('home');
	}

	public function doWork()
	{
		$APIkey = "660819cf2ae43c6e";
		$name = $this->input->post('name');
		$location = $this->input->post('location');
		$locationArray = explode(", ", $location);
		$city = strtr($locationArray[0], " ", "_");
		$state = $locationArray[1];
		$gender = $this->input->post('gender');
		$mathTest = (int) $this->input->post('mathTest');

		$outfit = array(
			"hat" => "",
			"shirt" => "",
			"pants" => "");

		$json_string = file_get_contents("http://api.wunderground.com/api/660819cf2ae43c6e/geolookup/conditions/q/{$state}/{$city}.json");
  		$weather = json_decode($json_string);
  		$temp_f = $weather->{'estimated'}->{'temp_f'};
  		$conditions = $weather->{'estimated'}->{'weather'};

  		if(stripos($conditions, "rain") != false) {
  			$rain = true;
  		} else if(stripos($conditions, "clear") != false) {
  			$sunny = true;
  		} else if(stripos($conditions, "cloud") != false) {
  			$cloudy = true;
  		} else if(stripos($conditions, "snow") != false) {
  			$snow = true;
  		}

  		if($temp_f < 30) {
  			$cold = true;
  		} 
  		else if($temp_f >= 30 && $temp_f <= 60){
  			$middle = true;
  		} 
  		else if($temp_f > 60) {
  			$hot = true;
  		}
	}
}