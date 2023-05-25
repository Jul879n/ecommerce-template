<div class="w-personalizado estatico">
	<nav class="navbar navbar-expand-lg navbar-dark bg-nav">
		<div class="container-fluid d-flex justify-content-between">
			<div class="d-flex">

				<a class="ver navbar-brand" href="<?php echo get_site_url() ?>">
					<?php the_custom_logo();?>
				</a>
				<div>
					<a class="ver btn btn-link" href="#"><i class="fa-solid fa-magnifying-glass me-2"></i><span
							class="texto"></span></a>
				</div>
				<div>
					<a class="ver btn btn-light rounded-pill ps-2 pe-2 negro" href="#">Abrir aplicación</a>
				</div>

			</div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<div class="d-flex justify-content-between">
					<ul class="col-12 col-sm-2 navbar-nav m-0 ms-3 no-ver">
						<li class="nav-item">
							<a onclick="window.history.back()"
								class="nav-link bg-black rounded-circle boton d-flex justify-content-center align-items-center"
								aria-current="page"><i class="fa-solid fa-angle-left fs-4"></i></a>
						</li>
						<li class="nav-item ms-2">
							<a class="nav-link bg-black rounded-circle boton d-flex justify-content-center align-items-center"
								href="#"><i class="fa-solid fa-angle-right fs-4"></i></a>
						</li>
					</ul>
						<?php if (is_active_sidebar('nav0')):
							dynamic_sidebar('nav0');
						endif; ?>
						<?php if (is_active_sidebar('nav1')):
							dynamic_sidebar('nav1');
						endif; ?>
				</div>
			</div>
		</div>
	</nav>
</div>