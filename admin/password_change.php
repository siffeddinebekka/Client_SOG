<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Réinistialiser le Mot de Passe</title>
</head>
<body>
	<div class="container">
		<div class="col-11">
			<div class="card text-center m-4 shadow p-3 mb-5 bg-white rounded">
				<div class="card-body">
					<h4 class="card-title p-3"> J'ai oublié mon Mot de Passe</h4>
					<div class="form-group">
						<form action="password_change_post.php" method="post">
							<input type="hidden" name="tokken" value="
							<?php
							 echo base64_decode(htmlspecialchars($_GET['u'])); 
							?>" 
							/>
							<input type="password" name="password" class="form-control" placeholder="Mot de Passe" required />
							<br/>
							<input type="password" name="password" class="form-control" placeholder="Re-tapez le mot de passe" required />
							<button type="submit" class="btn btn-primary btn-lg m-3">Modifier</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>