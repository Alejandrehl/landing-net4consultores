@extends('layouts.app')
@section('content')
	<main id="main">
		<header class="page-header">
			<h1>Contacto</h1>
		</header>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-8">
					<article class="page bg">
						<div class="page-media">
							<img class="retina" src="img/handshake.jpeg" width="718" height="360" alt="Contact Us">
						</div><!-- .page-media -->

						<div class="page-content">
							<img class="retina" src="img/tarjeta.jpg" width="400" height="200" alt="Contact Us">
							<hr>
							<h5>Envia un mensaje</h5>
							<form method="post" class="contact-form m-b-0">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group comment-form-author">
											<label for="name" class="control-label">Nombre <span class="required red-text">*</span></label>
											<input id="name" class="form-control" name="name" type="text" value="">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group comment-form-email">
											<label for="email" class="control-label">Email <span class="required red-text">*</span></label>
											<input id="email" class="form-control" name="email" type="text" value="">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group comment-form-url">
											<label for="phone" class="control-label">Teléfono</label>
											<input id="phone" class="form-control" name="phone" type="text" value="">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group comment-form-comment">
											<label for="comment" class="control-label">Tu mensaje <span class="required red-text">*</span></label>
											<textarea id="comment" class="form-control" name="comment"></textarea>
										</div>
									</div>
								</div>

								<div class="form-submit">
									<button type="submit" class="btn btn-primary submit">Enviar</button>
									<span class="form-message"></span>
								</div>
							</form><!-- .contact-form -->
						</div><!-- .page-content -->
					</article><!-- .page -->
				</div>

				<div class="col-xs-12 col-lg-4 sidebar">
					<aside class="widget bg latest-posts-widget">
						<h4 class="widget-title"><span>Presentación</span></h4>
								<img src="img/about-us.jpg" width="450" height="450" alt="">
								<div class="post-content">
									<img class="retina" src="img/descargar-pdf.png" width="300" height="300" alt="">
									<h6>Presentación de Empresa PDF</h6>
								</div>
					</aside><!-- .latest-posts -->
				</div><!-- .sidebar -->
			</div>
		</div>
	</main><!-- #main -->
@endsection