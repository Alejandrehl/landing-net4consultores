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
          <br>
					<div class="col-md-4">
						<button @click="openModalSupportTI()" class="btn">
							<img src="{{URL::asset('img/soport-ti2.png')}}" alt="" width="250" height="250">
							<h4 class="text-center">Soporte TI</h4>
						</button>
{{-- 							<hr width="100"> --}}
					</div>
					<div class="col-md-4">
						<button @click="openModalCameras()" class="btn">
							<img src="{{URL::asset('img/camaras2.jpg')}}" alt="">
							<h4 class="text-center">Cámaras</h4>
						</button>
{{-- 							<hr width="100"> --}}
					</div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/cableado-estructurado.jpg')}}" alt="">
							<h4 class="text-center">Cableado estructurado</h4>
{{-- 							<hr width="100"> --}}
					</div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-12 text-center">
          </div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/continuidad-operativa.png')}}" alt="">
							<h4 class="text-center">Continuidad Operativa de redes</h4>
{{-- 							<hr width="100"> --}}
					</div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/develop.jpeg')}}" alt="">
							<h4 class="text-center">Programación y bases de datos</h4>
{{-- 							<hr width="100"> --}}
					</div>
					<div class="col-md-4">
							<img src="{{URL::asset('img/citofonia.png')}}" alt="">
							<h4 class="text-center">Citofonia y electromecánica</h4>
{{-- 							<hr width="100"> --}}
					</div>
        </div>
        <br>
      </div>

	</main><!-- #main -->

<b-modal ref="modalSupportTI" hide-footer title="Información">
  <div class="d-block text-center">
    <h3>Planes soporte</h3>
    <div>
		<p>
			<h5>Todos los planes cuentan con:</h5><br>
				<strong style="color:black;">1. Levantamiento de equipos</strong><br>
				<strong style="color:black;">2. Sistema de ticket</strong><br>
				<strong style="color:black;">3. Soporte terreno</strong><br>
			<br>
			<strong style="color:black;">Plan 1:</strong> de 2 a 4 equipos            1 día/mes<br>
			<strong style="color:black;">Plan 2:</strong> de 5 a 10 equipos           2 días/mes<br>
			<strong style="color:black;">Plan 3:</strong> de 11 a 30 equipos          5 días/mes<br>
			<strong style="color:black;">Plan 4:</strong> de 31 a 49 equipos          17 días/mes<br>
			<strong style="color:black;">Plan 5:</strong> de 50 a 100 equipos         30 días/mes<br>
			<strong style="color:black;">Plan 6:</strong> Día adicional<br>
			<strong style="color:black;">Valor hora remota 0.75%</strong><br><br>

			<button @click="closeModalSupportTI()" class="btn btn-danger btn-sm">Cerrar</button>
		</p>
	</div>
  </div>
</b-modal>


<b-modal ref="modalCameras" hide-footer title="Información">
  <div class="d-block text-center">
    <h3>Servicio de Cámaras</h3>
    <h3></h3>
    <div>
		<p>
			<h5>Kit 4 cámaras HD(720)</h5>
				1 DVR  4 salidas	<br>
			   	1 DD Purpura 1 TB	<br>
			   	2 Cámaras Domo	<br>
			   	2 Cámaras Bala	<br>
			   	4 trasformadores	<br>
			   	4 Balum	<br>
			   	80 metros de cable utp	<br>
			   	Canalización por metro	<br>

			<h5>Kit 8 cámaras HD(720)</h5>
			   	1 DVR  8 salidas	<br>
			   	1 DD Purpura 1 TB	<br>
			   	4 Cámaras Domo	<br>
			   	4 Cámaras Bala	<br>
			   	8 trasformadores	<br>
			   	8 Balum	<br>
			   	160 metros de cable utp	<br>
			   	Canalización por metro	<br><br>

			<button @click="closeModalCameras()" class="btn btn-danger btn-sm">Cerrar</button>
		</p>
	</div>
  </div>
</b-modal>

@endsection