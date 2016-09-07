<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Model_admin extends CI_Model
{
 public function get_jenjang($nama=''){
   if($nama==''){
   	$query=$this->db->query("select * from jenjang");
   }else{
   	$query=$this->db->query("select * from jenjang where jenjang like '".$nama."%'");
   }
   $query=$query->result_array();
   return $query;
  }

  public function get_siswa($idskolah='',$nama=''){
   if($nama==''){
   	$query=$this->db->query("select * from siswa where id_sekolah=".$idskolah."");
   }else{
   	$query=$this->db->query("select * from siswa where id_sekolah=".$idskolah." and nama like '".$nama."%'");
   }
   $query=$query->result_array();
   return $query;
  }

  public function get_kategori($idjenjang=''){
    $query=$this->db->query("SELECT a.`id` AS id_tema,a.`tema`,b.`id` AS id_subtema,b.`subtema`,c.`id` AS id_hal_subtema,c.`nama`,c.`kbm`,c.`kompetensi` FROM tema a LEFT JOIN subtema b 
      ON (a.`id`=b.`id_tema` AND a.`id_jenjang`=b.`id_jenjang`) 
             LEFT JOIN hal_subtema c 
            ON (b.`id`=c.`id_subtema` AND a.`id`=c.`id_tema` AND a.`id_jenjang`=c.`id_jenjang`)
    WHERE a.`id_jenjang`=".$idjenjang."");
  
   $query=$query->result_array();
   return $query;
  }

  public function get_tema($idjenjang=''){
    $query=$this->db->query("select * from tema where id_jenjang=".$idjenjang."");
    $query=$query->result_array();
    return $query;  
  }
  public function get_buku(){
    $query=$this->db->query("select * from ebuku order by kategori asc");
    $query=$query->result_array();
    return $query;  
  }
  public function get_subtema($idjenjang='',$idtema=''){
    $query=$this->db->query("select * from subtema where id_jenjang=".$idjenjang." and id_tema=".$idtema."");
    $query=$query->result_array();
    return $query;  
  }
  public function get_hal_subtema($idjenjang='',$idtema='',$idsubtema=''){
    $query=$this->db->query("select * from hal_subtema where id_jenjang=".$idjenjang." and id_tema=".$idtema." and id_subtema=".$idsubtema."");
    $query=$query->result_array();
    return $query;  
  }
  
}