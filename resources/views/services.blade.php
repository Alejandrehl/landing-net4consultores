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
							<img src="{{URL::asset('img/soport-ti2.png')}}" alt="" width="250" height="250">
							<h4 class="text-center">Soporte TI</h4>
							<hr width="100">
							<p>
								<strong>Planes Soporte</strong> <br><br>

								Todos los planes cuentan con:
								<ol>
									<li>Levantamiento de equipos</li>
									<li>Sistema de ticket</li>
									<li>Soporte terreno</li>
								</ol>
								<br>
								<strong>Plan 1:</strong> de 2 a 4 equipos            1 día/mes<br>
								<strong>Plan 2:</strong> de 5 a 10 equipos           2 días/mes<br>
								<strong>Plan 3:</strong> de 11 a 30 equipos          5 días/mes<br>
								<strong>Plan 4:</strong> de 31 a 49 equipos          17 días/mes<br>
								<strong>Plan 5:</strong> de 50 a 100 equipos         30 días/mes<br>
								<strong>Plan 6:</strong> Día adicional<br>
								<strong>Valor hora remota 0.75%</strong><br>
							</p>
					</div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/camaras2.jpg')}}" alt="">
							<h4 class="text-center">Cámaras</h4>
							<hr width="100">
							<p>
								<strong>Servicio de Camaras</strong><br><br>
								<strong>Kit 4 cámaras HD(720)</strong>
								<ul>
									<li>1 DVR  4 salidas</li>
								    <li>1 DD Purpura 1 TB</li>
								    <li>2 Cámaras Domo</li>
								    <li>2 Cámaras Bala</li>
								    <li>4 trasformadores</li>
								    <li>4 Balum</li>
								    <li>80 metros de cable utp</li>
								    <li>Canalización por metro</li>
								</ul>

								<strong>Kit 8 cámaras HD(720)</strong>
								<ul>
								    <li>1 DVR  8 salidas</li>
								    <li>1 DD Purpura 1 TB</li>
								    <li>4 Cámaras Domo</li>
								    <li>4 Cámaras Bala</li>
								    <li>8 trasformadores</li>
								    <li>8 Balum</li>
								    <li>160 metros de cable utp</li>
								    <li>Canalización por metro</li>
								</ul>
							</p>
					</div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/cableado-estructurado.jpg')}}" alt="">
							<h4 class="text-center">Cableado estructurado</h4>
							<hr width="100">
					</div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-12 text-center">
          </div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/continuidad-operativa.png')}}" alt="">
							<h4 class="text-center">Continuidad Operativa de redes</h4>
							<hr width="100">
					</div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/develop.jpeg')}}" alt="">
							<h4 class="text-center">Programación y bases de datos</h4>
							<hr width="100">
					</div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/citofonia.png')}}" alt="">
							<h4 class="text-center">Citofonia y electromecánica</h4>
							<hr width="100">
					</div>
        </div>
      </div>

	</main><!-- #main -->
@endsection