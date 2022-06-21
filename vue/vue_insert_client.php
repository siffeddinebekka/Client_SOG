<br/>
<h1 style="color: green;">
<h3 style="color: green">Insertion d'un Client</h3>
<body bgcolor="#c8ad7f ">

<form method="post" action="" id="client">
	<table>
		<tr>
			<td style="color: green;">Nom du client :</td>
			<td><input type="text" name="nomc"></td>
		</tr>
		<tr>
			<td style="color: green;">Prenom du Client :</td>
			<td><input type="text" name="prenomc"></td>
		</tr>
		<tr>
			<td style="color: green;">Adresse du client :</td>
			<td><input type="text" name="adressec"></td>
		</tr>
		<tr>
			<td style="color: green;">Code postal :</td>
			<td><input type="number" name="cpc"></td>
		</tr>
		<tr>
			<td style="color: green;">Mail du Client :</td>
			<td><input type="email" name="mailc"></td>
		</tr>
		<tr>
			<td style="color: green;">Telephone du Client :</td>
			<td><input type="tel" name="telc" pattern="(0|\+33)[1-9]( *[0-9]{2}){4}" required /></td>
		</tr>
		<center><tr>
			<td style="color: green;"><button type="Annuler" value="Annuler" >Annuler</button></td>
			<td style="color: green;"><input type="submit" name="Valider" value="Valider"></td>
		</tr></center>
		<span id="error"></span>
	</table>
	</h1>
</form>
