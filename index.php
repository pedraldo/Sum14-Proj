<?php
		require "header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link type="text/css" rel="stylesheet" href="stylesheets/stylesheet.css"/>
	<link type="text/css" rel="stylesheet" href="stylesheets/index.css"/>
	<link type="text/css" rel="stylesheet" href="stylesheets/lib/bootstrap.min.css"/>
	<title>Bienvenue sur Linker</title>
</head>

<body>

	<div id="about"><a href="about.php" style="color: deepskyblue;" id="about_link">C'est quoi Linker ?</a></div>
	<div id="form_in2">	
		<form class="form-inline">
	    	<input type="text" id="inputEmail" placeholder="Email" style="height:30px;" type="email" required>
	    	<input type="password" id="inputPassword" style="height:30px;" placeholder="Mot de passe" required>
	    	<button type="submit" id="signin_button">Connexion</button>
	    </form>
	</div>

	<div id="spans">
		<span id="span1">Pas encore inscris ?</span>
		<span id="span2">C'est par là !</span>
	</div>

	<div id="form_up">
		<form method="post" action="signup.php">
			<table>
				<tr>
					<td><input type="text" style="height:40px;font-size:13pt;" class="small_input" placeholder="Prénom" required></td>
					<td><input type="text" style="height:40px;font-size:13pt;width:264px;" class="small_input" placeholder="Nom de Famille" required></td>
				</tr>

				<tr>
					<td colspan="2"><input type="text" style="height:40px;font-size:13pt;" class="big_input" placeholder="Votre adresse mail" required></td>
				</tr>

				<tr>
					<td colspan="2"><input type="text" style="height:40px;font-size:13pt;" class="big_input" placeholder="Confirmez votre adresse mail" required></td>
				</tr>

				<tr>
					<td colspan="2"><input type="password" style="height:40px;font-size:13pt;" class="big_input" placeholder="Nouveau mot de passe" required></td>
				</tr>

				<tr>
					<td colspan="2"><input type="password" style="height:40px;font-size:13pt;" class="big_input" placeholder="Confirmez votre nouveau mot de passe" required></td>
				</tr>

				<tr>
					<td id="td_birth">
						<label id="birth_label">Date de naissance</label>
					</td>
					<td>
						<input type="text" class="birth_input" style="height:30px;" placeholder="jj">
						<input type="text" class="birth_input" style="height:30px;" placeholder="mm">
						<input type="text" class="birth_input_year" style="height:30px;" placeholder="aaaa">
					</td>
				</tr>
			</table>

			<button type="submit" id="signup_button">Inscription</button>
		</form>
	</div>

	<?php
		require "footer.php";
	?>

</body>
</html>
