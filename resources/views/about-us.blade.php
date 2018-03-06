@extends('layouts.app')
@section('content')
	<main id="main">
		<header class="page-header bg-page-header" style="background-image: url(img/handshake.jpeg);">
			<h1><span class="accent-color">Quienes</span> Somos</h1>
		</header>

		<div class="container" style="color:black;">
			<div class="row">
				<div class="col-xs-12 col-lg-8">
					<article class="page bg margin">
						<div class="page-content">
							<h3>Historia</h3>
							<p><strong>Grupo Empresas | NET4 Consultores Ltda.</strong> Nace a principios del año 2017 a través de tres profesionales multidisciplinarios en el área con más de 10 años de experiencia
							en el mercado Informático, Telecomunicaciones y de Electricidad.<br>
							Todos estos años de trabajo y experiencia, nos han entregado un conocimiento amplio, permitiéndonos detectar nuevas necesidades donde nuestros servicios pueden ser utilizados.<br><br>

							Nuestro objetivo principal es de prestar un servicio integral al cliente, basándose en dos pilares fundamentales para la entrega de sus servicios: lograr un alto grado de satisfacción del cliente, utilizando productos de alta calidad y trabajando de la manera más eficiente posible.<br><br>
							Debido al fortalecimiento de las áreas de trabajo y al crecimiento en la demanda por servicios de recursos técnicos de calidad, se crea NET4 CONSULTORES LIMITADA,
							con el fin de cubrir satisfactoriamente las necesidades y requerimientos profesionales específicos.</p>
							<hr>
							<div>
								<div class="col-md-12">
									<h3>Misión</h3>
									<p>
									Crear soluciones integrales, asistiendo y contribuyendo a nuestros clientes servicios tecnológicos innovadores de alta calidad a través del trabajo especializado de servicios profesionales para la implementación y utilización de las mismas.
									</p>
								</div>
								<hr>
								<div class="col-md-12">
									<h3>Visión</h3>
									<p>
									Rentabilizar y consolidarnos como una organización visionaria en el desarrollo de soluciones, entregando la máxima satisfacción y calidad a nuestros clientes.
									</p>
								</div>
								<hr>
								<div class="col-md-12">
									<h3>Valores</h3>
									<p>
									Nuestra dedicación es para y por los clientes, implementando políticas de disciplina autocrítica, pro-actividad, perseverancia, disponibilidad al Cambio, responsabilidad y aprendizaje.
									</p>
								</div>
							</div>
						</div><!-- .page-content -->
					</article><!-- .page -->

					<div class="">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">Mercado actual</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">Áreas de negocio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab">Lo que marca la diferencia</a>
							</li>
						</ul><!-- .nav-tabs -->

						<div class="tab-content">
							<div class="tab-pane active" id="tab-1" role="tabpanel">
								<p>
									Debido al constante cambio de la tecnología en los últimos años, la decisión más importante que cada organización debe tomar es la inversión en aquellas soluciones técnicas que cumplan con sus necesidades actuales, para asegurar el cumplimiento de objetivos y el crecimiento necesario para el futuro.
									Es así que <strong>NET4 Consultores Limitada</strong>, invierte sus esfuerzos en la prestación adecuada de servicios específicos para cada uno de sus clientes, orientándonos en políticas de calidad, establecidas por nuestro modelo de trabajo y buenas prácticas.
								</p>
							</div><!-- .tab-pane -->

							<div class="tab-pane" id="tab-2" role="tabpanel">
								<p>
								Nuestro principal activo es nuestra gente, un equipo de profesionales con intenso y permanente entrenamiento y una amplia experiencia en la utilización y soporte de las soluciones ofrecidas, lo que les permite alcanzar altos grados de especialización y contar con la solvencia necesaria para enfrentar cualquier situación que se presente, para esto contamos con las siguientes especialidades:
								</p>
								<ol class="">
									<li>Asesoría de proyectos, para la prestación de servicios de TI.</li>
									<li>Ofimática e Informática.</li>
									<li>Continuidad Operativa.</li>
									<li>Administración de Sistemas de gestión.</li>
									<li>Soporte Técnico TI, Redes, Impresoras, Computación, CCtv, VoIP</li>
									<li>Cableado Estructurado.</li>
									<li>Proyectos eléctricos relacionados a baja, media y alta tensión.</li>
								</ol>
							</div><!-- .tab-pane -->

							<div class="tab-pane" id="tab-3" role="tabpanel">
								<ul class="m-b-0">
									<h6>Entregamos valor agregado a nuestra gama de servicios y productos</h6>
									<li>Precios Competitivos</li><br><br>
									<h6>Optimizamos nuestros plazos de entrega según la necesidad de su proyecto.</h6>
									<li>El tiempo es importante</li><br><br>									
									<h6>Estamos 100% disponibles para usted cuando nos necesite.</h6>
									<li>Soporte Telefónico 24 horas</li><br><br>									
									<h6>El tiempo de respuesta a sus dudas es nuestra prioridad.</h6>
									<li>Rápida y efectiva</li>
								</ul>
							</div><!-- .tab-pane -->
						</div><!-- .tab-content -->
					</div><!-- .product-tabs -->
				</div>

				<div class="col-xs-12 col-lg-4 sidebar">
{{-- 					<aside class="widget bg">
						<h4 class="widget-title"><span>Contacto</span></h4>

						<form class="subscribe m-b-0">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Nombre">
								<input id="subscribe" class="form-control" type="email" name="subscribe" placeholder="tu email">
								<input class="form-control" type="text" placeholder="Asunto">
								<input class="form-control" type="text" placeholder="Número de teléfono">
								<textarea class="form-control" placeholder="mensaje ..."></textarea>
								<span class="form-message"></span>
							</div>
							<button class="btn btn-block btn-outline-primary">Enviar</button>
						</form>
					</aside> --}}
					<aside class="widget bg latest-posts-widget">
						<h4 class="widget-title"><span>Presentación</span></h4>
								<img src="img/about-us.jpg" width="450" height="450" alt="">
								<div class="post-content">
								<a href="/pdf/presentacion_empresa.pdf">
									<img class="retina" src="img/descargar-pdf.png" width="300" height="300" alt="">
								</a>
									<h6>Presentación de Empresa PDF</h6>
								</div>
					</aside><!-- .latest-posts -->
				</div><!-- .sidebar -->
			</div>
		</div>
	</main><!-- #main -->
@endsection