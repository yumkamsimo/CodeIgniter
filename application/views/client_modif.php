<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Mise à jour</title>
</head>
<body>
<table width="600" border="1" cellpadding="3" cellspacing="3" >
	<form name="client_modif" method="POST" action="<?php echo base_url();?>index.php/Client/setdata">
		
	<tr>
			<td width="100">idC<input type="number" value="<?php echo $data->idC; ?>" name="idC"></td>
			<td width="100">nomC<input type="text" name="nomC" value="<?php echo $data->nomC; ?>"></td>
			<td width="100">prenomC<input type="text" name="prenomC" value="<?php echo $data->prenomC; ?>"></td>
			<td width="100">ageC<input type="number" name="ageC" value="<?php echo $data->ageC; ?>"></td>
			<td width="100">professionC<input type="text" name="professionC" value="<?php echo $data->professionC; ?>"></td>
			<td width="100">
				<select name="sexeC" value="<?php echo $data->sexeC; ?>">
					<option value="féminin">féminin</option>
					<option value="masculin">masculin</option>
				</select>
			</td>
			<td colspan="2" align="center"><input type="submit" name="edit" value="edit"></td>
			<td colspan="2" align="center"><input type="submit" name="save" value="save"></td>
			<td colspan="2" align="center"><input type="reset" name="cancel" value="cancel"></td>
		</tr>
	</form>
</table>
</body>
</html>

