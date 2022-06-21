<br/>
<h3 style="color: green">Liste des Client</h3>
<table border= "1">
	<tr>
		<td style="color: green;">codec</td><td style="color: green;">Nom du Client</td>
		<td style="color: green;">Prenom du Client</td><td style="color: green;">Adresse du Client</td>
		<td style="color: green;">Code Postal</td><td style="color: green;">Mail du Client</td>
		<td style="color: green;">Telephone du Client</td>
		<td style="color: green;">Opération</td>
	</tr>
	<?php 

	foreach ($lesClients as $unClient)  {

	
		echo" 		
		<tr> 
				  <td>".$unClient['codec']."</td>
				  <td>".$unClient['nomc']."</td>
				  <td>".$unClient['prenomc']."</td>
				  <td>".$unClient['adressec']."</td>
				  <td>".$unClient['cpc']."</td>
				  <td>".$unClient['mailc']."</td>
				  <td>".$unClient['telc']."</td>
				  <td>
				  <a href ='Admin.php?page=2&action=sup&codec=".$unClient['codec']."'>
				  <img src='images/sup.png' height='10' widht='10'>
				  </a>

				  <a href ='Admin.php?page=2&action=edit&codec=".$unClient['codec']."'>
				  <img src='images/edit.png' height='20' widht='20'>
				  </a>

				  </td>
				</tr>
				</b>	";

	}
?>
</table>
