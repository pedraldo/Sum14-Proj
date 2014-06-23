<?php
		require "header.php";
		require "footer.php"
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link type="text/css" rel="stylesheet" href="../stylesheets/stylesheet.css"/>
	<link type="text/css" rel="stylesheet" href="../stylesheets/signup.css"/>
	<link type="text/css" rel="stylesheet" href="../stylesheets/lib/bootstrap.min.css"/>
	<title>Bienvenue sur Linker</title>
</head>

<body>

	<div id="form_in">
	    <form class="form-horizontal">
		    <div class="control-group">
		    	<label class="control-label" for="inputEmail" style="color: white;">Email</label>
		    	<div class="controls">
		    		<input type="text" id="inputEmail" placeholder="Email" type="email">
		    	</div>
		    </div>
		    <div class="control-group">
		    	<label class="control-label" for="inputPassword" style="color: white;"	>Mot de passe</label>
		    	<div class="controls">
		    		<input type="password" id="inputPassword" placeholder="Password">
		    	</div>
		    </div>
		    <div class="control-group">
		    	<div class="controls">
		    		<button type="submit" id="signin_button">Connexion</button>
		    	</div>
		    </div>
		</form>
	</div>

	<div class="separateur" id="separ_signin"></div>

	<div id="spans">
		<span id="span1">Pas encore inscris ?</span>
		<span id="span2">C'est par là !</span>
	</div>

	<div id="form_up">
		<table>
			<tr>
				<td><input type="text" style="height:30px;font-size:13pt;" class="small_input" placeholder="Prénom" required></td>
				<td><input type="text" style="height:30px;font-size:13pt;" class="small_input" placeholder="Nom de Famille" required></td>
			</tr>

			<tr>
				<td colspan="2"><input type="text" style="height:30px;font-size:13pt;" class="big_input" placeholder="Votre adresse mail" required></td>
			</tr>

			<tr>
				<td colspan="2"><input type="text" style="height:30px;font-size:13pt;" class="big_input" placeholder="Confirmez votre adresse mail" required></td>
			</tr>

			<tr>
				<td colspan="2"><input type="password" style="height:30px;font-size:13pt;" class="big_input" placeholder="Nouveau mot de passe" required></td>
			</tr>

			<tr>
				<td colspan="2"><input type="password" style="height:30px;font-size:13pt;" class="big_input" placeholder="Confirmez votre nouveau mot de passe" required></td>
			</tr>

			<tr>
				<td id="td_birth">
					<label id="birth_label">Date de naissance</label>
				</td>
				<td>
					<input type="text" class="birth_input" placeholder="jj">
					<input type="text" class="birth_input" placeholder="mm">
					<input type="text" class="birth_input_year" placeholder="aaaa">
				</td>
			</tr>

			<tr>
				<td>
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="H">
						<span class="sexe">Homme</span>
					</label>
				</td>

				<td>
					<label class="sexe">
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="F">
						<span class="sexe">Femme</span>
					</label>
				</td>
			</tr>
		</table>

		<button type="submit" id="signup_button">Inscription</button>
	</div>

</body>
</html>
