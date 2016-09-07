<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Model_home extends CI_Model
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
  public function get_buku($kategori){
   $query=$this->db->query("select * from ebuku where kategori = '".$kategori."'"); 
   $query=$query->result_array();
   return $query;
  }
  public function get_kategori(){
    $query=$this->db->query("SELECT a.id_jenjang,a.`id` AS id_tema,a.`tema`,b.`id` AS id_subtema,b.`subtema`,c.`id` AS id_hal_subtema,c.`nama`,c.`kbm`,c.`kompetensi` FROM tema a LEFT JOIN subtema b 
      ON (a.`id`=b.`id_tema` AND a.`id_jenjang`=b.`id_jenjang`) 
             LEFT JOIN hal_subtema c 
            ON (b.`id`=c.`id_subtema` AND a.`id`=c.`id_tema` AND a.`id_jenjang`=c.`id_jenjang`)
    ORDER BY a.`id_jenjang` DESC;
");
   $query=$query->result_array();
   return $query;
  }
  
}