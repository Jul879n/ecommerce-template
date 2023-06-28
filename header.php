<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ecommerce_template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'ecommerce-template'); ?></a>

		<header id="masthead" class="site-header">
			<nav class="navbar navbar-expand-lg bg-principal">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="d-flex justify-content-between">
								<?php the_custom_logo(); ?>
								<div class="col-6 col-sm-7">
									<?php aws_get_search_form(true); ?>
								</div>
								<div class="d-flex justify-content-start w-20 no-ver">
									<?php
									$image = get_field('promocion');
									if (!empty($image)) : ?>
										<img class="promocion-nav" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</div>
								<div>
								</div>
								<button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
							</div>
						</div>
						<div class="collapse navbar-collapse col-12 col-sm-12" id="navbarNavDropdown">
								<div class="d-flex justify-content-between no-ver w-100">
									<?php if (is_active_sidebar('nav1')) :
										dynamic_sidebar('nav1');
									endif; ?>
									<?php if (is_active_sidebar('nav2')) :
										dynamic_sidebar('nav2'); endif; ?>
									<?php if (is_active_sidebar('nav3')) :
										dynamic_sidebar('nav3');
									endif; ?>
								</div>
							<div class="ver">
								<div class="sesion">
									<div class="d-flex align-items-center">
										<span class="fs-personalizado me-3"><i class="fa-regular fa-circle-user bg-white rounded-circle"></i></span>
										<div class="texto">
											<span class="fw-bold">Bienvenido</span><br>
											<span>Ingresa a tu cuenta para ver tus compras, favoritos, etc.</span>
										</div>
									</div>
									<?php if (is_active_sidebar('sesion')) :
										dynamic_sidebar('sesion');
									endif; ?>
								</div>
								<?php if (is_active_sidebar('nav-responsivo')) :
									dynamic_sidebar('nav-responsivo');
								endif; ?>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</header><!-- #masthead -->
	</div>