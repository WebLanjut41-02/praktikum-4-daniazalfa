<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod extends CI_Model {

	public function GetTable($tabel)
	{
		$data=$this->db->get($tabel);
		return $data->result_array();
    }
    public function InsertData($tabel, $data) {
        $res = $this->db->insert($tabel, $data);
        return $res;
    }
    public  function getByID($tabel,$pk,$nik){
        $this->db->where($pk,$nik);
        return $this->db->get($tabel);
    }
    public function UpdateData($tabel, $data, $pk, $nik) {
        $this->db->where($pk,$nik);
        $res = $this->db->update($tabel,$data);
        return $res;
    }
    public function DeleteData($tabel, $pk, $nik) {
        $this->db->where($pk,$nik);
        $res = $this->db->delete($tabel);
        return $res;
    }


    public function cariDatauser($keyword)
 {
  $this->db->like('nik', $keyword);
  $query = $this->db->get('datauser');
  return $query->result();
 }


 public function getAlldata()
 {
  return $this->db->get('datauser')->result_array();
 }





}
