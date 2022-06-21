<br/>
<h3 style="color: green">Insertion d'un Technicien</h3>

<form method="post" action="">
	<table border="0">
		<tr>
			<td style="color: green;">Nom du Technicien : </td>
			<td style="color: green;"><input type="text" name="nomt" pattern="^[A-Z][A-Za-z\é\è\ê\-]+$"  required /></td>
		</tr>
		<tr>
			<td style="color: green;">Prenom du Technicien : </td>
			<td style="color: green;"><input type="text" name="prenomt" pattern="^[A-Z][A-Za-z\é\è\ê\-]+$" required /></td>
		</tr>
		<tr>
			<td style="color: green;">Date D'embauche :</td>
			<td style="color: green;"><input type="datetime-local" name="dateemb"></td>
		</tr>
		<tr>
			<td style="color: green;">Mail du Technicien :</td>
			<td style="color: green;"><input type="text" name="mailt" required /></td>
		</tr>
		<tr>
			<td style="color: green;">Telephone du Technicien :</td>
			<td style="color: green;"><input type="tel" name="telt" pattern="(0|\+33)[1-9]( *[0-9]{2}){4}" required /></td>
		</tr>
		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"></td>
			<td><input type="submit" name="Valider" value="valider"></td>
		</tr>
	</table>
</form>