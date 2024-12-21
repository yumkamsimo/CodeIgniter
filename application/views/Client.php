<!DOCTYPE html>
<html>
<head>
<title>client</title>
</head>
<body>
	<table border="1" cellpadding="2" cellspacing="2">
				<tr>
		<form name="client" method="POST" action="<?php echo base_url();?>index.php/Client/savedata">
			
		 <td width="100">idC<input type="number" name="idC"></td>
		 <td width="100">nomC<input type="text" name="nomC"></td>
		 <td width="100">prenomC<input type="text" name="prenomC"></td>
		 <td width="100">ageC<input type="number" name="ageC"></td>
		 <td width="100">professionC<input type="text" name="professionC"></td>                   
		 <td width="100"><select name="sexeC">
		 	<option value="Feminin">Feminin</option>
		 	<option value="Masculin">Masculin</option>
		 </select> </td>
		 <td width="100"></td>
		 <td colspan="2" align="center"><input type="submit" name="save" value="Save"></td>
		 <td colspan="2" align="center"><input type="reset" name="cancel" value="Cancel"></td>
		        </tr>
	
		</form>
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
