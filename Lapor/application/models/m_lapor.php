<?php
class m_lapor extends CI_Model{

    function list_lapor(){
        $hasil=$this->db->query("select * from lapor");
        $array = array();
        while ($row = mysqli_fetch_array($hasil)) {
            array_push($array,array(
              "id" => $row['id'],
              "laporan" => $row['laporan'],
              "aspek" => $row['aspek'],
              "waktu" => $row['waktu'],
              "lampiran" => $row['lampiran']
            ));
          }
          return $array;
    }

    function simpan_lapor($id,$laporan,$aspek,$waktu,$lampiran){
        $hasil=$this->db->query("INSERT INTO lapor (id,laporan,aspek,waktu,lampiran) VALUES ('$id','$laporan','$aspek','$waktu','$lampiran') ");
        return $hasil;
    }

    function hapus_lapor($id){
        $hasil=$this->db->query("DELETE FROM lapor where id = '$id'");
        return $hasil;
    }

    function update_lapor ($id){
      $hasil=$this->db->query("UPDATE lapor set laporan = '$laporan', aspek='$aspek', waktu = '$waktu', lampiran = '$lampiran' where id = '$id'");
      return $hasil;
    }
}
?>