<?php
<<<<<<< HEAD
=======

>>>>>>> master
class M_detail extends CI_Model {
	function __construct()
	{
		
	}
	
	/* Menampilkan posting */
	function list_posting()
	{
		$query = $this->db->query('select * from posting order by ID desc limit 20');
		//lihat apakah ada data dalam tabel
		$num = $query->num_rows();
		if($num>0){
			//Mengirimkan data array hasil query
			return $query->result();
			//Function result() hampir sama dengan function mysql_fetch_array()
		}
		else{
			return 0;
			//Kirimkan 0 jika tidak ada datanya
		}
	}
<<<<<<< HEAD
	
	function hapus_data($id,$posting){
	$this->db->where($id);
	$this->db->delete($posting);
	}
=======
>>>>>>> master
}