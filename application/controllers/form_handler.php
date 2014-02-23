<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_handler extends CI_Controller {
	public function index()
	{
    $outfit = $this->createOutfit();
		$this->load->view('result',$outfit);
	}

	public function createOutfit()
	{
		$name = $this->input->post('name');
		$location = $this->input->post('location');
		$locationArray = explode(", ", $location);
		$city = trim(strtr($locationArray[0], " ", "_"));
		$state = trim($locationArray[1]);
		$gender = strtolower(trim($this->input->post('gender')));
		$mathTest = (int) $this->input->post('mathTest');
    $rain = false;
    $sunny = false;
    $cloudy = false;
    $snow = false;
    $cold = false;
    $middle = false;
    $hot = false;

		$outfit = array(
      "gender" => "",
			"hat" => "",
			"shirt" => "",
			"pants" => "");

    if($gender == 'male'){
      array['gender'] = 'base_male_character.png';
    } else if($gender == 'female'){
      array['gender'] = 'base_female_character.png';
    } else if($gender == 'unisex'){
      array['gender'] = 'base_neutral_character.png';
    }

		$json_string = file_get_contents("http://api.wunderground.com/api/660819cf2ae43c6e/geolookup/conditions/q/{$state}/{$city}.json");
    $weather = json_decode($json_string);
    $temp = $weather->{'current_observation'}->{'temp_f'};
    $conditions = $weather->{'current_observation'}->{'weather'};
    

    if(is_int(stripos($conditions, "rain"))) {
     $rain = true;        
   } else if(is_int(stripos($conditions, "clear"))) {
     $sunny = true;
   } else if(is_int(stripos($conditions, "cloud"))) {
     $cloudy = true;
   } else if(is_int(stripos($conditions, "snow"))) {
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
    $outfit['hat'] = 'sombrero.png';
  } else if($sunny && $gender == 'male') {
    $outfit['hat'] = 'cap';
  } else{
    $outfit['hat'] = 'no_hat_no_pants.png';
  }

  if($gender != 'female' && !$rain){
    if($hot){
      $outfit['shirt'] = 'tank_top.png';
    }
    else if($middle){
      $outfit['shirt'] = 'blue_t_shirt.png';
    }
  }

  if($gender == 'female' && !$rain){
    if($hot){
      $outfit['shirt'] = 'female_tank_top.png';
    }
    else if($middle){
      $outfit['shirt'] = 'pink_t_shirt.png';
    }
  }

  if($rain){
    $outfit['shirt'] = 'umbrella_shirt.png';
  } else if($cold){
    $outfit['shirt'] = 'winter_shirt.png';
  }

  if($mathTest < 90)
  {
    $outfit['pants'] = 'no_hat_no_pants.png';
  } 
  else if($hot) 
  {
    $outfit['pants'] = 'shorts.png';
  }
  else {
    $outfit['pants'] = 'pants.png';
  }

  return $outfit;
  }
}