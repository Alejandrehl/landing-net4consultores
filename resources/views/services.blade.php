@extends('layouts.app')
@section('content')
	<main id="main">
		<header class="page-header bg-page-header" style="background-image: url(img/plan.jpeg);">
			<h1><span class="accent-color">Servicios</h1>
		</header>

      <div class="container card">
        <div class="row">
          <div class="col-lg-12 text-center">
          </div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/service1.jpg')}}" alt="">
							<h4 class="text-center">Continuidad operativa de redes</h4>
							<hr width="100">
							<p>
								Le ofrecemos soluciones adaptadas a sus necesidades. Entre nuestras principales soluciones profesionales ofrecemos la logística, análisis e implementación de Redes.
							</p>
					</div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/service2.jpg')}}" alt="">
							<h4 class="text-center">Cableado estructurado</h4>
							<hr width="100">
							<p>
								Contamos con altos estandares internacionales para la instalacion y uso de cableado UTP cat5e y cat6 multimarca, adecuandonos a las necesidades de cada proyecto.
							</p>
					</div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/service3.jpg')}}" alt="">
							<h4 class="text-center">Ofimatica</h4>
							<hr width="100">
							<p>
								Contamos con un amplio sistema de soluciones a su medida, para ofrecer calidad de servicio, en modalidad de servicio tecnico remoto y onsite.
							</p>
					</div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-12 text-center">
          </div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/service4.jpg')}}" alt="">
							<h4 class="text-center">Asesoria técnica y profesional</h4>
							<hr width="100">
							<p>Poseemos un staff para todo tipo de requerimientos tanto para la desarrollo, implementacion, puesta en marcha y control sobre proyectos de telecomunicaciones en VoIP, Enlaces, Monitoreo, Data Center, Salas de Sistemas, etc
							</p>
					</div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/service5.jpg')}}" alt="">
							<h4 class="text-center">Impresoras</h4>
							<hr width="100">
							<p>Ofrecemos servicios tecnicos para la continuidad operativa de impresoras, logistica, control de inventario y mantencion operativa.
							</p>
					</div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/service3.jpg')}}" alt="">
							<h4 class="text-center">Telefonia VoIP y ccTV</h4>
							<hr width="100">
							<p>Brindamos servicio de soporte tecnico para proyectos de migracion de telefonia, centrales telefonicas, junto a esto desarrollamos proyectos para televigilancia y monitoreo.
							</p>
					</div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-12 text-center">
          </div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/database.jpeg')}}" alt="">
							<h4 class="text-center">Bases de datos</h4>
							<hr width="100">
							<p>
							</p>
					</div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/develop.jpeg')}}" alt="">
							<h4 class="text-center">Creación de aplicaciones</h4>
							<hr width="100">
							<p>
							</p>
					</div>
					<div class="col-md-4">
					</div>
        </div>



      </div>

	</main><!-- #main -->
@endsection