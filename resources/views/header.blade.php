

<header class="en-tete">
    <div class="conteneur">
        <nav>
            <!-- Logo -->
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('upload/logo.png') }}" alt="Logo">
                </a>
            </div>

            <!-- Navigation Desktop -->
            <div class="navigation-principale">
                <ul>
                    <li><a href="{{ route('acceuil') }}">Accueil</a></li>
                    
                    <li class="dropdown">
                        <a href="{{ route('groupe-mots-ceo') }}" class="dropdown-toggle">Le groupe</a>
                        <ul class="sous-menu hidden">
                            <li><a href="{{ route('groupe-mots-ceo') }}">Mot du CEO</a></li>
                            <li><a href="{{ route('a-propos') }}">À propos</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="{{ route('services') }}">Nos services</a></li>
                    
                    <li class="dropdown">
                        <a href="{{ route('diba-iardt') }}" class="dropdown-toggle">Solutions</a>
                        <ul class="sous-menu hidden">
                            <li><a href="{{ route('diba-iardt') }}">DIBA IARDT</a></li>
                            <li><a href="{{ route('diba-health') }}">DIBA HEALTH</a></li>
                            <li><a href="{{ route('diba-digit') }}">DIBA DIGIT</a></li>
                            <li><a href="{{ route('diba-sms') }}">DIBA SMS</a></li>
                            <li><a href="{{ route('diba-myreport') }}">DIBA MyREPORT</a></li>
                            <li><a href="{{ route('diba-couture') }}">DIBA COUTURE</a></li>
                            <li><a href="{{ route('diba-money') }}">DIBA MONEY +</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="#">Contactez-nous</a></li>
                </ul>
            </div>   
        </nav>
    </div>
</header>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		const dropdowns = document.querySelectorAll('.dropdown');

		dropdowns.forEach(dropdown => {
			const toggle = dropdown.querySelector('.dropdown-toggle');
			const sousMenu = dropdown.querySelector('.sous-menu');

			// Ouvre/ferme le sous-menu au clic
			toggle.addEventListener('click', function (e) {
				e.preventDefault();

				// Basculer l'affichage du sous-menu
				sousMenu.classList.toggle('hidden');

				// Fermer les autres sous-menus
				document.querySelectorAll('.sous-menu').forEach(menu => {
					if (menu !== sousMenu) {
						menu.classList.add('hidden');
					}
				});
			});

			// Fermer le sous-menu lorsqu'on quitte la zone du dropdown
			dropdown.addEventListener('mouseleave', function () {
				sousMenu.classList.add('hidden');
			});
		});

		// Fermer tous les sous-menus si clic en dehors
		document.addEventListener('click', function (e) {
			if (!e.target.closest('.dropdown')) {
				document.querySelectorAll('.sous-menu').forEach(menu => {
					menu.classList.add('hidden');
				});
			}
		});
	});
</script>

<style>

	.en-tete {
		background-color: var(--couleur-fond);
		box-shadow: 0 2px 4px rgba(0,0,0,0.1);
		position: sticky;
		top: 0;
		z-index: 100;
	}

	.conteneur {
		max-width: 1200px;
		margin: 0 auto;
		padding: 0 15px;
	}
	.hidden {
    display: none !important;
	}

	.en-tete nav {
		display: flex;
		justify-content: space-between;
		align-items: center;
		height: 80px;
	}

	.logo img {
		max-height: 60px;
		width: auto;
	}

	.navigation-principale ul {
		display: flex;
		list-style: none;
		margin: 0;
		padding: 0;
	}

	.navigation-principale > ul > li {
		margin: 0 15px;
		position: relative;
	}

	.navigation-principale a {
		text-decoration: none;
		color: #333;
		font-weight: 500;
		transition: color 0.3s ease;
	}

	.navigation-principale a:hover {
		background-color: rgb(134, 203, 245);
	}

	.dropdown {
		position: relative;
	}

	.sous-menu.hidden {
    display: none; /* La classe `hidden` masque activement les sous-menus */
	}

	.sous-menu {
		display: none;
		position: absolute;
		top: 100%;
		left: 0;
		background-color: white;
		min-width: 200px;
		box-shadow: 0 2px 5px rgba(0,0,0,0.1);
		border-radius: 4px;
		padding: 10px 0;
		z-index: 1000;
	}

	.dropdown:hover .sous-menu {
		display: block;
	}

	.sous-menu li {
		padding: 10px 15px;
	}

	.sous-menu li:hover {
		background-color: rgb(134, 203, 245);
	}

</style>