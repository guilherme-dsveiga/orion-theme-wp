<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="d-flex justify-content-between align-items-center bg-header-blue py-3 px-5">
			<div class="contact d-flex align-items-center gap-5">
				<div class="d-flex gap-2 justify-content-center align-items-center">
					<img class="max-icon-header" src="<?php echo get_bloginfo('template_url') ?>/assets/mail-ball.svg" alt="Icone de e-mail">
					<div class="fs-5 text-white">bpwr@amorion.com.br</div>
				</div>
				<div class="d-flex gap-2 justify-content-center align-items-center">
					<img class="max-icon-header" src="<?php echo get_bloginfo('template_url') ?>/assets/phone-ball.svg" alt="Icone de telefone">
					<div class="fs-5 text-white">+55 (53) 2125-4400</div>
				</div>
			</div>
			<div class="social d-flex align-items-center justify-content-center">
				<ul class="d-flex gap-3 list-unstyled align-items-center justify-content-center m-0">
					<li><img class="max-icon-header py-1" src="<?php echo get_bloginfo('template_url') ?>/assets/facebook-white.svg" alt="Icone de Facebook"></li>
					<li><img class="max-icon-header py-1" src="<?php echo get_bloginfo('template_url') ?>/assets/linkedin-white.svg" alt="Icone de Linkedin"></li>
					<li><img class="max-icon-header py-1" src="<?php echo get_bloginfo('template_url') ?>/assets/instagram-white.svg" alt="Icone de Instagram"></li>
				</ul>
			</div>
		</div>
		<div class="d-flex justify-content-around align-items-center p-3">
			<div class="header-logo">
				<img class="w-75" src="<?php echo get_bloginfo('template_url') ?>/assets/orion-logo.png" alt="Logo do grupo Orion Maritima">
			</div>
			<div class="d-flex gap-5 justify-content-evenly align-items-center">
				<a href="" class="text-uppercase text-decoration-none fs-4 active">Home</a>
				<a href="" class="text-uppercase text-decoration-none fs-4 text-black">Quem Somos</a>
				<div class="d-flex gap-3">
					<img src="<?php echo get_bloginfo('template_url') ?>/assets/magnifier.svg" alt="Icone de Lupa">
					<button class="fs-4 rounded text-uppercase py-2 px-4 text-white border-0 bg-blue">Contato</button>
				</div>
			</div>
		</div>
	</header>