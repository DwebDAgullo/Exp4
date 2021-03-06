<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peliculas extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Pelicula_Model');
	}

	public function json() {
    	$this->output
      		->set_content_type('application/json')
      		->set_output(json_encode(array('data' => ($this->Pelicula_Model->get_peliculas()
      		 != false > 0 ? $this->Pelicula_Model->get_peliculas()->result() : ''))));
	}

	public function index() {
		$this->load->helper('url');
		$this->load->view('catalogo_peliculas');
	}

}