<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IT=edge,chrome=IE8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="pt_BR" />
	<meta name="theme-color" content="#000" />
	<meta name="msapplication-navbutton-color" content="#000" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#000" />
	<title>
		<?php if (is_front_page()) {
			echo bloginfo('name');
		} else {
			echo the_title();
			echo ' - ';
			echo bloginfo('name');
		} ?>
	</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- CSS only -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/css/app.css">
	<?php wp_head(); ?>
</head>


<body class="body">
	<header class="header">
		<div class="grid">
			<div class="menu">
				<div class="logo">
					<img src="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/logo.png" alt="Logo">
				</div>
				<div class="conteudo-menu">
					<div class="links">
						<a href="">Home</a>
						<i class="fa-solid fa-star" style="color: #000000;"></i>
						<a href="">Projetos</a>
						<i class="fa-solid fa-star" style="color: #000000;"></i>
						<a href="">Sobre</a>
						<i class="fa-solid fa-star" style="color: #000000;"></i>
						<a href="">Contato</a>
					</div>
					<div class="redes">
						<div class="rede">
							<a href=""><i class="fa-brands fa-linkedin"></i></a>
						</div>
						<div class="rede">
							<a href=""><i class="fa-brands fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="grid">
			<div class="banner">
				<h1>CRIAÇÃO DE CONTEÚDO ESCRITO</h1>
				<h2>Navegue pelo meu portfólio criativo</h2>
			</div>
		</div>
	</header>