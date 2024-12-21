$nomC,$prenomC,$ageC,$professionC,$sexeC
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

	<!DOCTYPE html>
<html lang="fr">
<head>
	<title>client_modif</title>
</head>
<body>
<table width="600" border="1" cellpadding="3" cellspacing="3" >
	<?php var_dump($data)?>
	<tr>
	<form name="client_modif" method="POST" action="<?php echo base_url();?>index.php/client_modif/updatedata">

		<td width="100">idC<input type="number" value="<?php echo $data->idC; ?>" name="idC"></td>
		<td width="100">nomC<input type="text" name="nomC" value="<?php echo $data->nomC; ?>"></td>
		<td width="100">prenomC<input type="text" name="prenomC" value="<?php echo $data->prenomC; ?>"></td>
		<td width="100">ageC<input type="number" name="ageC" value="<?php echo $data->ageC; ?>"></td>
		<td width="100">professionC<input type="text" name="professionC" value="<?php echo $data->professionC; ?>"></td>
		<td width="100"><select name="sexeC" value="<?php echo $data->sexeC; ?>">
			<option value="féminin">féminin</option>
			<option value="masculin">masculin</option>
		</select></td>
		<td colspan="2" align="center"><input type="button" name="edit" value="edit"></td>
		<td colspan="2" align="center"><input type="button" name="save" value="Save"></td>
		<td colspan="2" align="center"><input type="button" name="cancel" value="Cancel"></td>

	</form>
</tr>
</table>
</body>
</html>

<table width="600" border="1" cellspacing="3" cellpadding="3">



	 h1{
    text-align: center;
    color: purple;
    font-size: 4em;
    text-shadow: 3px 3px black;
}




<table>
	<?php
	//var_dump($data);
	 foreach($data as $row){
	 	echo"<tr>";
		echo "<td>".$row->idC."</td>";
		echo "<td>".$row->nomC."</td>";
		echo "<td>".$row->prenomC."</td>";
		echo "<td>".$row->ageC."</td>";
		echo "<td>".$row->professionC."</td>";
		echo "<td>".$row->sexeC."</td>";
		echo "<td> </td>";
		echo '<td><a href="'.base_url().'index.php/Client/deletedata/'.$row->idC.'">delete</a></td>';
		echo '<td><a href="'.base_url().'index.php/Client/updatedata/'.$row->idC.'">edit</a></td>';
		echo "</tr>";
	}
	?>
</table>




<table>
	<?php
	//var_dump($data);
	 foreach($data as $row){
	 	echo"<tr>";
		echo "<td>".$row->idC."</td>";
		echo "<td>".$row->nomC."</td>";
		echo "<td>".$row->prenomC."</td>";
		echo "<td>".$row->ageC."</td>";
		echo "<td>".$row->professionC."</td>";
		echo "<td>".$row->sexeC."</td>";
		echo "<td> </td>";
		echo '<td><a href="'.base_url().'index.php/Client/deletedata/'.$row->idC.'">delete</a></td>';
		echo '<td><a href="'.base_url().'index.php/Client/updatedata/'.$row->idC.'">edit</a></td>';
		echo "</tr>";
	}
	?>
</table>
</body>
</html>