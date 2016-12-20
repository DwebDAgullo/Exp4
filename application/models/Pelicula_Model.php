<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Pelicula_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function get_peliculas() {
    	$this->db->select('*');
    	$this->db->from('peliculas');
    	$this->db->order_by('id ASC');
    	$query = $this->db->get();

    	    if($query->num_rows() > 0) {
      			return $query;
    		} else {
      			return false;
  			}
    }
}