<div class="bloc_menu">
	<ul id="menu_jouer">
		<li><a href="#">Menu</a>
			<ul id="menu">
				<li><?php include(ACCEUIL) ?></li>
				<li><a href="index.php?controller=carte&action=afficherCollectionCarte">Les cartes</a></li>
				<li><a href="index.php?controller=home&action=affichagePageRegles">Règles du jeu</a></li>
				<li><a href="#">Forum</a></li>
				<?php
				if(isset($_SESSION['neozorus'])){			
					echo '<li><a href="#">Paramètres</a></li>';
					echo '<li><a href="index.php?controller=home&action=deconnexion">Se déconnecter</a></li>';
				}
				?>
			</ul>
		</li>
	</ul>
</div>