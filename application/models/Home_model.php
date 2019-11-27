<?php
class Home_model extends CI_model{
    public function getAllHome(){
        return $this->db->get('simple_lapor')->result_array();
    }
    public function tambahLaporan()
    {
        
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$img = $_FILES['myFile']['name'];
			$x = explode('.', $img);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['myFile']['size'];
            $file_tmp = $_FILES['myFile']['tmp_name'];
            
            move_uploaded_file($file_tmp, 'foto/'.$img);

        date_default_timezone_set("Asia/Jakarta");
        // $tgl = date("Y/m/d H:i:s");
        $now = date("Y-m-d H:i:s");
        
        $data = [ 
            "laporan" => $this->input->post('laporan',true),
            "lampiran" => $img,
            "waktu" => $now,
            "aspek" => $this->input->post('aspek',true)
        ];
   

        $this->db->insert('simple_lapor', $data);


      
    }
}

?>