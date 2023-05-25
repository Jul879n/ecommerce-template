<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ecommerce_template
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid">
		<div class="col-12 no-ver">
			<?php include get_template_directory() . '/template-parts/registrarse.php'; ?>
		</div>
		<div class="row">
			<div class="col-12 col-sm-2 p-0 estatico no-ver">
				<?php include get_template_directory() . '/template-parts/menu-lateral.php'; ?>
			</div>
			<div class="col-12 col-sm-2 p-0 no-ver">
			</div>
			<div class="col-12 col-sm-10 p-0 mb-footer">
				<?php include get_template_directory() . '/template-parts/nav-spotify.php'; ?>
				<div class="container-fluid pt-5 fondo-gris mb-2">
					<div class="row mt-5">
						<div class="col-12 col-sm-3">
							<img class="sombra mb-3" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="..">
						</div>
						<div class="col-11 col-sm-9">
							<div>
								<div class="text-wrap">
									<span><?php the_excerpt() ?></span>
									<h1><?php echo get_the_title() ?></h1>
									<p><?php echo the_content() ?></p>
									<a class="me-2" href="#"><?php the_field('perfil'); ?></a>
									<span><?php the_field('me_gusta'); ?> me gusta</span>
									<span><?php the_field('cantidad_canciones'); ?>, </span>
									<span><?php the_field('duracion'); ?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="reproducir">
					<div class="container  d-flex align-items-center">
						<span onclick="var audio = document.querySelector('#canciones audio:first-child');
						if (audio.paused) {
							audio.play(); 
							this.querySelector('i').classList.remove('fa-circle-play');
							this.querySelector('i').classList.add('fa-circle-pause');
						} else {
							audio.pause();
							this.querySelector('i').classList.remove('fa-circle-pause');
							this.querySelector('i').classList.add('fa-circle-play');
							}
							"><i class="fa-solid fa-circle-play verde fs-1 me-4"></i></span>
						<span><i class="fa-regular fa-heart fs-3 me-4"></i></span>
						<span><i class="fa-solid fa-ellipsis fs-3"></i></span>
					</div>
				</div>
				<div class="sticky mt-2 no-ver">
					<div class="container bg-sticky">
						<div class="row">
							<div class="col-1">
								<span>#</span>
							</div>
							<div class="col-4">
								<span>Titulo</span>
							</div>
							<div class="col-2">
								<span>Álbum</span>
							</div>
							<div class="col-3">
								<span>Fecha <span class="no-ver">en la que se añadio</span></span>
							</div>
							<div class="col-2">
								<span><i class="fa-regular fa-clock"></i></span>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<?php include get_template_directory() . '/assets/modulos/modulo-playlists/loop-canciones.php'; ?>
				</div>
				<?php include get_template_directory() . '/template-parts/footer.php'; ?>
			</div>
		</div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->