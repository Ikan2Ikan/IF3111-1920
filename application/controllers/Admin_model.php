<?php

class Admin_model extends CI_Model {

  public function __construct()
  {
			$this->load->database();
	}

  function get_all_admin()
  {
        $hsl=$this->db->query("SELECT * FROM admin");
        return $hsl;
  }



}
