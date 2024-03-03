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
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>


<body class="body">
	<header class="header">
		<div class="grid">
			
		</div>
	</header>