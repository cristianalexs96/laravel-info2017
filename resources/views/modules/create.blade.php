<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MODULO</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

	<div class="container">
	
		<div class="row">
			<div class="col-md-12">

				<h2>Crear Modulo</h2>
				<h2>Curso: {{ $course->nombre }}

			</div>
		</div>

		<hr>

		@if (count($errors)>0)
			<div class="alert alert-danger">
				
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>

			</div>
		@endif
		
		<form action="{{ route('store_module_path'), ['course'=>$course->id] }}" method="POST">

			{{ csrf_field() }}

			<input type="hidden" name="course_id" class='form-control' value="{{ $course_id = $course->id }}"/>


			<div class="form-group">
				
				<label for="nombre">Nombre del modulo</label>
				<input type="text" name="nombre" class='form-control' value="{{ old('nombre') }}"/>

			</div>

			


			<div class="form-group">
				
				<label for="descripcion">Descripcion</label>
				<textarea rows="5" name="descripcion" class="form-control">{{ old('descripcion') }}</textarea>

			</div>



			<div class="row">
			  <div class="col-md-6">
			  	<label for="hsinicio">HORARIO DE INICIO</label>
			    <input type="time" name="hsinicio" class="form-control" value="{{ old('hsinicio') }}"/>
			  </div>

			  <div class="col-md-6">
			  	<label for="hsfin">HORARIO DE FIN</label>
			    <input type="time" name="hsfin" class="form-control" value="{{ old('hsfin') }}"/>
			  </div>
			</div>


			<div class="form-group">
				<br>
				
				<button type="submit" class='btn btn-primary'>CREAR</button>

			</div>

		</form>

	</div>

</body>
</html>