<?php 
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($id = FALSE){
			if ($id == FALSE) {
				$query = $this->db->get('simple_lapor');
				return $query->result_array();
			}
			$query = $this->db->get_where('simple_lapor', array('id' => $id));
			return $query->row_array();
		}
	}
 ?>