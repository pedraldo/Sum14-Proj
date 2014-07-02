<?php
		require "header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link type="text/css" rel="stylesheet" href="stylesheets/stylesheet.css"/>
	<link type="text/css" rel="stylesheet" href="stylesheets/signup.css"/>
	<link type="text/css" rel="stylesheet" href="stylesheets/lib/bootstrap.min.css"/>
	<title>Inscription</title>
</head>

<body>
	<div id="page_title">Inscription</div>

	<div id="form">
		<span class="big_spans">Pour compléter vos informations, ajouter une photo de vous !</span>
		<form method="post" action="" runat="server">
			<div id="head_form">		
				<input type="file" id="img_download" placeholder="">
				<img id="img_preview" src="#" alt="Cliquez sur parcourir, choisissez votre photo et prévisualisez la !"/>
			</div>
			<span class="big_spans">Dites-en plus sur vous, pour qu'on puisse mieux vous connaître ! <br>Enfin ... si vous le souhaitez !</span>
			<div class="div_question">
				<span class="small_spans">Que faites vous actuellement ?</span>
				<span class="grey_spans">études / profession / formation ...</span>
				<input type="text" class="input_act" style="height:30px" placeholder="surfer sur le web ?">
			</div>

			<div class="div_question">
				<span class="small_spans">Des projets sur le feu ?</span>
				<span class="grey_spans">voyages / carrière / hobbies ...</span>
				<input type="text" class="input_acts" style="height:30px" placeholder="devenir membre de Linker ?">
				<input type="text" class="input_acts" style="height:30px" placeholder="week-end entre amis ?">
				<input type="text" class="input_acts" style="height:30px" placeholder="trouver l'âme soeur ?">
			</div>

			<div class="div_question">
				<span class="small_spans">Pour quel type d'activités peut-on compter sur vous ?</span>
				<span class="grey_spans">sorties / sports / jeux ...</span>
				<input type="text" class="input_acts" style="height:30px" placeholder="boire un(des) verre(s) ?">
				<input type="text" class="input_acts" style="height:30px" placeholder="un p'tit foot ?">
				<input type="text" class="input_acts" style="height:30px" placeholder="un ciné ?">
			</div>
			<button type="submit" id="signup_button">Finaliser l'inscription</button>
		</form>
	</div>


	<?php
		require "footer.php";
	?>

</body>

<script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
<script type="text/javascript" src="javascripts/lib/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="javascripts/lib/handlebars.runtime.js"></script>
<script type="text/javascript" src="javascripts/lib/bootstrap.min.js"></script>
<script type="text/javascript" src="javascripts/signup.js"></script>

</html>