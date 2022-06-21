<br/>
<h3 style="color: green">liste des Intervention</h3>
<table border= "1">
	<tr>
		<td style="color: green;">codei</td><td style="color: green;">Adresse de l'intervention</td>
		<td style="color: green;">Date de l'intervention</td><td style="color: green;">Objet de l'intervention</td>
		<td style="color: green;">Code du Client</td><td style="color: green;">Nom du Client</td>
		<td style="color: green;">Code du Technicien</td><td style="color: green;">Nom du Technicien</td>
		<td style="color: green;">Opération</td>
	</tr>
	<?php 
	foreach($lesInterventions as $uneIntervention){
		echo "<tr> <td>".$uneIntervention['codei']."</td>
				   <td>".$uneIntervention['adressei']."</td>
				   <td>".$uneIntervention['datetimei']."</td>
				   <td>".$uneIntervention['objet']."</td>
				   <td>".$uneIntervention['codec']."</td>
				   <td>".$uneIntervention['nomc']."</td>
				   <td>".$uneIntervention['codet']."</td>
				   <td>".$uneIntervention['nomt']."</td>
				   <td>
				   <a href ='Admin.php?page=3&action=sup&codei=".$uneIntervention['codei']."'>
				  <img src='images/sup.png' height='10' widht='10'>
				  </a>

				      <a href ='Admin.php?page=3&action=edit&codei=".$uneIntervention['codei']."'>
				  <img src='images/edit.png' height='10' widht='10'>
				  </a>


				   </td>
				   </tr>";
	}
	?>
	</table>