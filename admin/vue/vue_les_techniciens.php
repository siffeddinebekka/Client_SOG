<br/>
<h3 style="color: green">Liste des Technicien</h3>

<table border="1">
	<tr>
		<td style="color: green;">codet</td><td style="color: green;">nomt</td>
		<td style="color: green;">prenomt</td><td style="color: green;">dateemb</td>
		<td style="color: green;">mail</td><td style="color: green;">tel</td>
		<td style="color: green;">Opération</td>
	</tr>
	<?php 
	foreach($lesTechniciens as $unTechnicien)
	{
		echo"<tr> <td>".$unTechnicien['codet']."</td>
		          <td>".$unTechnicien['nomt']."</td>
		          <td>".$unTechnicien['prenomt']."</td>
		          <td>".$unTechnicien['dateemb']."</td>
		          <td>".$unTechnicien['mailt']."</td>
		          <td>".$unTechnicien['telt']."</td>
		          <td>
		           <a href ='Admin.php?page=4&action=sup&codet=".$unTechnicien['codet']."'>
				  <img src='images/sup.png' height='10' widht='10'>
				  </a>

				   <a href ='Admin.php?page=4&action=edit&codet=".$unTechnicien['codet']."'>
				  <img src='images/edit.png' height='10' widht='10'>
				  </a>
				  </a>

				  </td>
				</tr>";
	}
?>
</table>