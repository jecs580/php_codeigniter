<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno_datos extends CI_Model {
	public function __construct(){
		parent:: __construct(); // Lkamamos al constructor de la clase padre 
		$this->load->database();
	}
	public function get_alumno()
	{
		
	}
}
