<!DOCTYPE html>
<html lang="pt-br">


<?php 
get_template_part('components/head'); ?>

<body class="body">
	<header class="header" style="background-image:url('<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/fundo.png');background-repeat:no-repeat; background-size:cover;background-position:center;">
		<div class="grid">
			<div class="menu">
				<div class="logo">
					<img src="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/logo.png" alt="Logo">
				</div>
				<div class="conteudo-menu">
					<div class="menu-responsivo">
						<div class="hamburguer" onclick="toggleMenu()">
							<div class="barra"></div>
							<div class="barra"></div>
							<div class="barra"></div>
						</div>
						<div class="itens-menu">
							<a href="<?php echo home_url(); ?>/">HOME</a>
							<a href="<?php echo home_url(); ?>/projetos">PROJETOS</a>
							<a href="<?php echo home_url(); ?>/sobre">SOBRE</a>
							<a href="<?php echo home_url(); ?>/contato">CONTATO</a>
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
	
	<script>
		function toggleMenu() {
    var menu = document.querySelector('.itens-menu');
    menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
		}
	</script>