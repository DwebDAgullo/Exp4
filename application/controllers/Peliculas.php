<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peliculas extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Pelicula');
	}

	public function json() {
    	$this->output
      		->set_content_type('application/json')
      		->set_output(json_encode(array('data' => ($this->Asignaturas_model->get_asignaturas() != false > 0 ? $this->Asignaturas_model->get_asignaturas()->result() : ''))));
	}

}