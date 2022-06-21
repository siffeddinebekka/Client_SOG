<?php 
require_once("modele/modele.sog.php");
require_once("controleur/controleur.sog.php");
 

?>

<br/>
<h3 style="color: green">liste des rendez-vous</h3>
<table border= "1">
	<tr>
		<td style="color: green;">idRdv</td><td style="color: green;"> Nom du CLient</td>
		<td style="color: green;">Prenom du Client</td><td style="color: green;">email du client </td>
		<td style="color: green;">Adresse du client</td><td style="color: green;">Telephone du client </td>
		<td style="color: green;">Motif du Rendez_vous </td><td style="color: green;">Date du Rendez-vous </td>
		<td style="color: green;">Opération</td>
	</tr>
	<?php 
	foreach($lesRendezvous as $unRendezvou){
		echo "<tr> <td>".$unRendezvou['idRdv']."</td>
				   <td>".$unRendezvou['Nom']."</td>
				   <td>".$unRendezvou['Prenom']."</td>
				   <td>".$unRendezvou['email']."</td>
				   <td>".$unRendezvou['adresse']."</td>
				   <td>".$unRendezvou['tel']."</td>
				   <td>".$unRendezvou['motif']."</td>
				   <td>".$unRendezvou['dateRdv']."</td>
				   <td>
				   <a href ='Admin.php?page=7&action=sup&codei=".$unRendezvou['idRdv']."'>
				  <img src='images/sup.png' height='10' widht='10'>
				  </a>

				      <a href ='Admin.php?page=7&action=edit&codei=".$unRendezvou['idRdv']."'>
				  <img src='images/edit.png' height='10' widht='10'>
				  </a>


				   </td>
				   </tr>";
	}
	?>
	</table>