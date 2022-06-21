<br/>
<h3 style="color: green">Insertion des Intervention</h3>
<form method="POST" action="">
	<table border="0">
		<tr>
			<td style="color: green;">Adresse du client ; </td>
			<td style="color: green;"><input type="text" name="adressei"></td>
		</tr>
		<tr>
			<td style="color: green;">Date de L'intervention : </td>
			<td style="color: green;"><input type="datetime-local" name="datetimei"></td>
		</tr>
		<tr>
			<td style="color: green;">objet de l'intervntion : </td>
			<td style="color: green;"><input type="text" name="objet"></td>
		</tr>
	</select>
		<td style="color: green;">Code du client :</td>
		<td style="color: green;">
			<select name="codec">
				<?php 
				$lesClients = $unControleur->selectAllClients();
				foreach($lesClients as $unClient){
					echo '<option value="'.$unClient['codec'].'">'.$unClient['codec'].'</option>';
				}
				?>
			</select>
		</td>
	</tr>
			<td style="color: green;">Nom du CLient : </td>
			<td style="color: green;">
				<select name="nomc">
					<?php 
					$lesClients = $unControleur->selectAllClients();
					foreach($lesClients as $unClient){
						echo'<option value="'.$unClient['codec'].'">'.$unClient['nomc'].'</option>';
					}
					?>
				
	</tr>
		<td style="color: green;">Code du Techncien :</td>
		<td style="color: green;">
			<select name="codet">
				<?php 
				$lesTechniciens = $unControleur->selectAllTechniciens();
				foreach($lesTechniciens as $unTechnicien){
					echo '<option value="'.$unTechnicien['codet'].'">'.$unTechnicien['codet'].'</option>';
				}
				?>
			</select>
		</td>
		</td>
		</tr>
				<td style="color: green;">Nom du Technicien : </td>
			<td style="color: beige;">
				<select name="nomt">
					<?php 
					$lesTechniciens = $unControleur->selectAllTechniciens();
					foreach($lesTechniciens as $unTechnicien){
						echo'<option value="'.$unTechnicien['nomt'].'">'.$unTechnicien['nomt'].'</option>';
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"></td>
			<td><input type="submit" name="Valider" value="valider"></td>
		</tr>
	</table>
</form>