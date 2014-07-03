<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<!-- <link type="text/css" rel="stylesheet" href="stylesheets/stylesheet.css"/> -->
	<link type="text/css" rel="stylesheet" href="stylesheets/profil.css"/>
	<link type="text/css" rel="stylesheet" href="stylesheets/profil_news.css"/>
	<link type="text/css" rel="stylesheet" href="stylesheets/lib/bootstrap.min.css"/>
	<title>Profil</title>
</head>

<body>

	<div id="header_profil">

		<a id="logo">L</a>

		<div id="portrait_picture"></div>

		<span id="name">Morgane Le Marquer</span>

		<a href="" id="logout">Déconnexion</a>

	</div>

	<div id="nav_items">
		<a href="" class="n_item" id="n_item_page">News</a>
		<a href="" class="n_item">Amis</a>
		<a href="" class="n_item">Groupes</a>
		<a href="" class="n_item">Évènements</a>
		<a href="" class="n_item">Messages</a>
		<a href="" class="n_item">Mes infos</a>
	</div>


	<div id="container">

		<div class="new">
			<div class="header_new">
				<div class="date_new">
					<span class="date_new_day">3</span>
					<span class="date_new_month">Juillet</span>
					<span class="date_new_time">10:46</span>
				</div>
				<img class="mini_portrait_picture_new"/>
				<div class="title_new">

				</div>
			</div>
			<div class="container_new">
				<span class="text_new"></span>
			</div>
			<div class="footer_new">
				<span class="reactions_new"></span>
			</div>
		</div>

	</div>




	<?php
		require "footer.php";
	?>

</body>
</html>