@extends('layouts.app')
@section('content')
<div class="slider slider-overlay" data-nav="true" data-dots="true">
	<div class="slides owl-carousel">
		<div class="slider-item" style="height: 400px;">
			<img src="{{URL::asset('img/slider4.jpeg')}}" width="1098" height="574" alt="Slide">
			<div class="caption-wrap">
				<div class="caption text-xs-center">
					<h2 class="title">
						<strong style="color:#DF7401;">
						<i class="fa fa-arrow-right"></i>Rentabilice</strong> 
						<br>
						todos sus proyectos
					</h2>
				</div>
			</div>
		</div><!-- .slider-item -->

		<div class="slider-item" style="height: 400px;">
			<img src="{{URL::asset('img/slider3.jpeg')}}" width="1098" height="574" alt="Slide">
			<div class="caption-wrap">
				<div class="caption text-xs-center">
					<h2 class="title">
						<strong style="color:#DF7401;">
						<i class="fa fa-arrow-right"></i>Rentabilice</strong> 
						<br>
						todos sus proyectos
					</h2>
				</div>
			</div>
		</div><!-- .slider-item -->
	</div>
</div><!-- .slider -->


      <div class="container card">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Áreas de negocio</h2>
          </div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/redes-ti.jpg')}}" alt="">
							<h4 class="text-center">Redes TI</h4>
					</div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/certificacion.jpg')}}" alt="">
							<h4 class="text-center">Certificación</h4>
					</div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/servicio-tecnico.jpg')}}" alt="">
							<h4 class="text-center">Servicio Técnico</h4>
					</div>
        </div>
      </div>
      <br><br>

      <div class="container card">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">¿Por que nosotros?</h2>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-tag text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Precios Competetivos</h3>
              <p class="text-muted mb-0">Entregamos valor agregado a nuestra gama de servicios y productos</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-clock-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Tiempo Optimizado</h3>
              <p class="text-muted mb-0">Optimizamos nuestros plazos de entrega según la necesidad de su proyecto.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-reply-all text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Consulta tus dudas</h3>
              <p class="text-muted mb-0">El tiempo de respuesta a sus dudas es nuestra prioridad, rápida y efectiva.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-phone text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Soporte Teléfonico</h3>
              <p class="text-muted mb-0">Estamos para disponibles para usted cuando nos necesite.​</p>
            </div>
          </div>
        </div>
      </div>
      <br><br>
@endsection