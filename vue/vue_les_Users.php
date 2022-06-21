<br/>
<h3 style="color: green">liste des Users</h3>
<table border= "1">
	<tr>
		<td style="color: green;">id</td><td style="color: green;">Pseudo de l'utilisteur</td>
		<td style="color: green;">Email du l'utilisateur</td><td style="color: green;">Adresse de l'utilisateur</td>
		<td style="color: green;">Telephone de l'utilisateur</td><td style="color: green;">type de l'utilisateur</td>
		<td style="color: green;">Password de l'utilisateur</td>
		<td style="color: green;">Opération</td>
	</tr>
	<?php 
	foreach($lesUsers as $unUsers) {
		echo"<tr> <td>".$unUsers['id']."</td>
				  <td>".$unUsers['username']."</td>
				  <td>".$unUsers['email']."</td>
				  <td>".$unUsers['adresse']."</td>
				  <td>".$unUsers['tel']."</td>
				  <td>".$unUsers['type']."</td>
				 <td>".$unUsers['password']."</td>
				  <td>
				  <a href ='Admin.php?page=5&action=sup&id=".$unUsers['id']."'>
				  <img src='images/sup.png' height='10' widht='10'>
				  </a>

				  <a href ='Admin.php?page=5&action=edit&id=".$unUsers['id']."'>
				  <img src='images/edit.png' height='20' widht='20'>
				  </a>

				  </td>
				</tr>";
	}
	?>
	</table>