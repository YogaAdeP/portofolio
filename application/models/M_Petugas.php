<?php
class M_Petugas extends CI_Model{
	function data_petugas(){
		$query = $this->db->query("select * from petugas");
		return $query;
	}
}
