<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_handler extends CI_Controller {
	public function index()
	{
    $outfit = $this->createOutfit();
		$this->load->view('home',$outfit);
	}

	public function createOutfit()
	{
		$name = $this->input->post('name');
    var_dump($name);
    exit;
		$location = $this->input->post('location');
		$locationArray = explode(", ", $location);
		$city = trim(strtr($locationArray[0], " ", "_"));
		$state = trim($locationArray[1]);
		$gender = strtolower(trim($this->input->post('gender')));
		$mathTest = (int) $this->input->post('mathTest');   

		$outfit = array(
			"hat" => "",
			"shirt" => "",
			"pants" => "");

		$json_string = file_get_contents("http://api.wunderground.com/api/660819cf2ae43c6e/geolookup/conditions/q/{$state}/{$city}.json");
    $weather = json_decode($json_string);
    $temp = $weather->{'estimated'}->{'temp_f'};
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

   if($temp < 40) {
     $cold = true;
   } else if($temp >= 40 && $temp <= 60){
     $middle = true;
   } else if($temp > 60) {
     $hot = true;
   }

   if($rain || $snow) {
    $outfit['hat'] = 'sombrero';
  } else if($sunny && $gender == 'male') {
    $outfit['hat'] = 'cap';
  } else{
    $outfit['hat'] = 'noHat';
  }

  if($gender != 'female' && !$rain){
    if($hot){
      $outfit['shirt'] = 'tanktop';
    }
    else if($middle){
      $outfit['shirt'] = 'tshirt';
    }
  }

  if($gender == 'female' && !$rain){
    if($hot){
      $outfit['shirt'] = 'blouse';
    }
    else if($middle){
      $outfit['shirt'] = 'longSleeve';
    }
  }

  if($rain){
    $outfit['shirt'] = 'umbrella';
  } else if($cold){
    $outfit['shirt'] = 'wintery';
  }

  if(mathTest < 90)
  {
    $outfit['pants'] = 'noPants';
  } 
  else if($hot) 
  {
    $outfit['pants'] = 'shorts';
  }
  else {
    $outfit['pants'] = 'longPants';
  }

  return $outfit;
  }
}