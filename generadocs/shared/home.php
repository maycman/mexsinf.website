<?php include_once("analyticstracking.php") ?>
<div class="jumbotron animated bounceInDown">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>¡Bienvenido!</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2>Genera tu documento</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<a class="btn btn-primary btn-lg" href="#venta" role="tab" data-toggle="tab">Venta a Plazos</a>
			</div>
			<div class="col-md-3">
				<a class="btn btn-success btn-lg" href="#adendum" role="tab" data-toggle="tab">Adendum</a>
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
</div>
<div class="tab-content">
	<div id="inicio" class="tab-pane fade active in"></div>
	<div id="venta" class="tab-pane fade in">
		<div class="container">
			<?php include("shared/plazopdf.php"); ?>
		</div>
	</div>
	<div id="adendum" class="tab-pane fade in">
		<div class="container">
			<?php include("shared/contratoAdendum.php"); ?>
		</div>
	</div>
</div>