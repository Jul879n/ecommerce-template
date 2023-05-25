<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ecommerce_template
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
						<div class="col-12 col-sm-9 d-flex align-items-center">
							<div>
								<span>Canción</span>
								<h1><?php echo get_the_title() ?></h1>
								<div class="d-flex">
									<a class="me-2" href="#"><?php the_field('perfil'); ?></a>
									<span class="me-2"><?php the_field('ano'); ?></span>
									<span class="me-2"><?php the_excerpt(); ?></span>
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
				<div class="container mt-5">
					<div class="row">
						<div class="col-12 col-sm-5">
							<div class="card bg-primary">
								<div class="card-body">
									<p class="card-text">Inicia sesión para ver la letra y escuchar la canción al completo</p>
									<div class="d-flex justify-content-end">
										<div>
											<a class="btn" href="#">Iniciar sesión</a>
											<a class="btn btn-light rounded-pill negro" href="#">Registrarte</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php include get_template_directory() . '/template-parts/footer.php'; ?>
			</div>
		</div>
	</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->