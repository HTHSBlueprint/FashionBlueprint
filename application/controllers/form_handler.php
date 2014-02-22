<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_handler extends CI_Controller {
	public function doWork()
	{
		$APIkey = '660819cf2ae43c6e';
		$name = $this->input->post('name');
		$location = $this->input->post('location');
		$gender = $this->input->post('gender');
		$mathTest = (float) $this->input->post('mathTest');

		$outfit = array[
			"hat" => "",
			"shirt" => "",
			"pants" => ""];

		

	}