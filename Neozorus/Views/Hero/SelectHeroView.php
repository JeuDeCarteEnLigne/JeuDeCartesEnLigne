<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Neozorus</title>
	<link rel="stylesheet" type="text/css" href="assets/css/SelectPersonnage.css">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<div>
		<div id="haut" class="haut_bas">
			<img src="assets/img/background_jungle.jpg" id="imageHaut">
		</div>
		<div id="bas" class="haut_bas">
			<img src="assets/img/background_matrix.jpg" id="imageBas">
		</div>

		<nav id="logo">
			<div id="btnDinos" class="btn">
				<img class="avatar" src=<?='"'.$heros[0] -> getH_gabarit().'"'?>>
				<span class='PV'><?=$heros[0]->getH_PvMax() ?></span>
			</div>
			<div id='choisirHero'>Choisis ton Héros!</div>
			<a href="index.php?controller=home&action=affichagePageAccueil">Acceuil</a>
			<div id="btnMatrix" class="btn">
				<img class="avatar" src=<?='"'.$heros[1] -> getH_gabarit().'"'?>>
				<span class='PV'><?=$heros[1]->getH_PvMax() ?></span>
			</div>
		</nav> 
		<script src='js/Select_Hero_Common.js'></script>
		<script src='js/Select_Hero_Neutre.js'></script>
	</div>
</body>
</html>