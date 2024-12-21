<?php
class Client extends CI_Model{
	function save($id, $nom, $prenom, $age, $profession,$sexe){
		$query="insert into users values('', '$id','$nom','$prenom','$age','$profession','$sexe')";
		$this->db->query($query);
	}
	function displayrecords(){
		$query=$this->db->query("select * from users");
		return $query->result();
	}
}
?>