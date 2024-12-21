<?php
class Client_model extends CI_Model{
	private $_table='client';
	function __construct ()
	{
		parent::__construct();
	}
	public function listeClient()
	{
		return $this->db->select('*')
		   ->from($this->_table)
		   ->order_by('idC','DESC')
		   ->get()
		   ->result();
		   
	}
	public function getById($idClient)
	{
		return $this->db->select('*')
		   ->from($this->_table)
		   ->where('idC',$idClient)
		   ->get()
		   ->result();
		   
	}
	public function savedata($idC,$nomC,$prenomC,$ageC,$professionC,$sexeC)
	{
		 
		$data=array(
			'idC'=>$idC,
			'nomC'=>$nomC,
			'prenomC'=>$prenomC,
			'ageC'=>$ageC,
			'professionC'=>$professionC,
			'sexeC'=>$sexeC);
		$this->db->insert($this->_table, $data);

	}
	
	
	public function updatedata($idClient,$nomC,$prenomC,$ageC,$professionC,$sexeC)
	{   
		$data=array(

		      'nomC'=>$nomC,
		      'prenomC'=>$prenomC,
		      'ageC'=>$ageC,
		      'professionC'=>$professionC,
		      'sexeC'=>$sexeC);

		$this->db->where('idC',$idClient);
		$this->db->update('client',$data);
	}
	public function deletedata($idClient){

		$this->db->where('idC',$idClient);
		$result=$this->db->delete("client");
		return $result;
	}
}
?>