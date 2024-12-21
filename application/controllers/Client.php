<?php
class Client extends CI_Controller{
 	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->model('Client_model');
		$listeClient=$this->Client_model->listeClient();
		$dataView=array('data'=>$listeClient);
		$this->load->view('Client',$dataView);
	}
	public function savedata()
	{
	     //check submit button
		var_dump($this->input->post());
		if($this->input->post('save'))
		{
			//get form's data and store in local varable
			$idC=$this->input->post('idC');
			$nomC=$this->input->post('nomC');
			$prenomC=$this->input->post('prenomC');
			$ageC=$this->input->post('ageC');
			$professionC=$this->input->post('professionC');
			$sexeC=$this->input->post('sexeC');
			
			//call saverecords method of Model and pass variables as parameter
			$this->Client_model->savedata($idC,$nomC,$prenomC,$ageC,$professionC,$sexeC);
		 	echo "data saved successfully";
		    
		}

	}
	public function updatedata($idClient)
	{

		if($this->input->post('nomC'))
		{   
			$nomC=$this->input->post('nomC');
			$prenomC=$this->input->post('prenomC');
			$ageC=$this->input->post('ageC');
			$professionC=$this->post('professionC');
			$sexeC=$this->post('sexeC');
			echo $nomC."".$prenomC."".$ageC."".$professionC."".$ageC."";
			die(); 

			$this->Client_model->updatedata($idClient,$nomC,$prenomC,$ageC,$professionC,$sexeC);
			echo "data updated successfully";
		}
		$data = $this->Client_model->getById($idClient);
		if(count($data) == 0) {
			echo "Impossible de trouver le client";
			die();
		}
		$result['data'] = $data[0];
		$this->load->view('client_modif', $result);
	}
	public function setdata()
	{
		// var_dump($this->input->post());

		    $idClient=$this->input->post('idC');
			$nomC=$this->input->post('nomC');
			$prenomC=$this->input->post('prenomC');
			$ageC=$this->input->post('ageC');
			$professionC=$this->input->post('professionC');
			$sexeC=$this->input->post('sexeC');
			echo $nomC."".$prenomC."".$ageC."".$professionC."".$ageC."";

			$this->Client_model->updatedata($idClient,$nomC,$prenomC,$ageC,$professionC,$sexeC);
			echo "data updated successfully";
	}
	public function deletedata($idClient)
	{   
		$result=$this->Client_model->deletedata($idClient);
		var_dump($result);
		if($result==true)
		{
			echo "data deleted successfully";
		}
		else {echo "error";}
	}
}
?>