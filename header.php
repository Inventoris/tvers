<!DOCTYPE html>
<html lang="ru" style="margin-top: 0 !important;">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php wp_head(); ?>
	<?php get_template_part( 'template-parts/header-analytics' ); ?>
</head>

<body <?php body_class( 'preload' ); ?>>
	<header class="header">
		<div class="container">
			<div class="header__wrapper">
				<div class="header__logo">
					<?php the_custom_logo() ?>
					<p class="header__description">
						ТВЭРС <br> Журнал о лампах ИКЕА
					</p>
				</div>
				<?php wp_nav_menu( [
					'theme_location' => 'header_menu',
					'container' => 'nav',
					'container_class' => 'header__menu',
					'menu_class' => 'header__menu-list' ] );
				?>
				<?php get_search_form(); ?>
			</div>
		</div>
	</header>
	<main class="main">
