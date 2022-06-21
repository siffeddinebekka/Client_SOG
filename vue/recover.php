<br/>
<h3 style="color: green">liste des Stastitiques</h3>
<table border= "1">
	<tr>
		<td style="color: green;">codeIntervention</td>
		<td style="color: green;">Objet</td><td style="color: green;">CodeClient</td>
		<td style="color: green;">nomClient</td>
		<td style="color: green;">Nomtechnicien</td><td style="color: green;">CodeTechnicien</td>
		<td style="color: green;">Opération</td>
	</tr>
	<?php 
	
  foreach($lesNbInterventions as $unNbIntervention){
      echo"<tr> 
      		<td>".$unNbIntervention['codeIntervention']."</td>
				  <td>".$unNbIntervention['Objet']."</td>
				  <td>".$unNbIntervention['CodeClient']."</td>
				  <td>".$unNbIntervention['nomClient']."</td>
				  <td>".$unNbIntervention['Nomtechnicien']."</td>
				  <td>".$unNbIntervention['CodeTechnicien']."</td>
				  <td>
				  <a href ='Admin.php?page=6&action=sup&id=".$unNbIntervention['codeIntervention']."'>
				  <img src='images/sup.png' height='10' widht='10'>
				  </a>

				  <a href ='Admin.php?page=6&action=edit&id=".$unNbIntervention['codeIntervention']."'>
				  <img src='images/edit.png' height='20' widht='20'>
				  </a>

				  </td>
				</tr>";
  }


	?>
	</table>


	<br/>
<h3 style="color: green">Statitique du panier </h3>
<table border= "1">
	<tr>
		<td style="color: green;">produit</td>
		<td style="color: green;">prix</td><td style="color: green;">adresse</td>
		<td style="color: green;">Nom Client</td>
		<td style="color: green;">Opération</td>
	</tr>
	<?php 
	
  foreach($lesPaniers as $unPanier){
      echo"
      <tr> 
      		<td>".$unPanier['produit']."</td>
				  <td>".$unPanier['prix']."</td>
				  <td>".$unPanier['adresse']."</td>
				  <td>".$unPanier['nomClient']."</td>
				  <td>
				  <a href ='Admin.php?page=6&action=sup&id=".$unPanier['codeIntervention']."'>
				  <img src='images/sup.png' height='10' widht='10'>
				  </a>

				  <a href ='Admin.php?page=6&action=edit&id=".$unPanier['codeIntervention']."'>
				  <img src='images/edit.png' height='20' widht='20'>
				  </a>

				  </td>
				</tr>";
  }


	?>
	</table>


		<br/>
<h3 style="color: green">Statitique  </h3>
<table border= "1">
	<tr>
		<td style="color: green;">codec</td>
		<td style="color: green;">nom</td><td style="color: green;">prenom</td>
		<td style="color: green;">Objet</td>
		<td style="color: green;">Opération</td>
	</tr>
	<?php 
	
  foreach($lesStats as $uneStat){
      echo"
      <tr> 
      		<td>".$uneStat['code']."</td>
				  <td>".$uneStat['nom']."</td>
				  <td>".$uneStat['prenom']."</td>
				  <td>".$uneStat['objet']."</td>
				  <td>
				  <a href ='Admin.php?page=6&action=sup&id=".$uneStat['code']."'>
				  <img src='images/sup.png' height='10' widht='10'>
				  </a>

				  <a href ='Admin.php?page=6&action=edit&id=".$uneStat['code']."'>
				  <img src='images/edit.png' height='20' widht='20'>
				  </a>

				  </td>
				</tr>";
  }


	?>
	</table>

