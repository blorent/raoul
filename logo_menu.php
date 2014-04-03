			<div id="logo">
				<img src="images/logo3.png"  alt="Logo Toitures Defechereux"/>
			</div>
			<div id="menu">
				<ul>
					<li class="accueil"><a href="index.php" class="accueil <?php if(preg_replace('/\.php$/', '', basename($_SERVER['PHP_SELF'])) == "index") echo active; ?>">ACCUEIL</a></li>
					<li class="services"><a href="services.php" class="services <?php if(preg_replace('/\.php$/', '', basename($_SERVER['PHP_SELF'])) == "services") echo active; ?>">SERVICES</a></li>
					<li class="realisations"><a href="realisations.php" class="realisations <?php if(preg_replace('/\.php$/', '', basename($_SERVER['PHP_SELF'])) == "realisations") echo active; ?>">PHOTOS</a></li>
					<li class="contact"><a href="contact.php" class="contact <?php if(preg_replace('/\.php$/', '', basename($_SERVER['PHP_SELF'])) == "contact") echo active; ?>">CONTACT</a></li>
				</ul>
			</div>