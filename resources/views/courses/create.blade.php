<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Crear Curso</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

	<div class="container">
	
		<div class="row">
			<div class="col-md-12">

				<h2>CREAR CURSO</h2>

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
		
		<form action="{{ route('store_courses_path') }}" method="POST">
		

			{{ csrf_field() }}

			

			<div class="form-group">
				
				<label for="nombre">NOMBRE</label>
				<input type="text" name="nombre" class='form-control' value="{{ old('nombre') }}"/>

			</div>
			


			<div class="form-group">
				
				<label for="descripcion">DESCRIPCION</label>
				<textarea rows="5" name="descripcion" class="form-control">{{ old('descripcion') }}</textarea>

			</div>


			<div class="form-group">
				

			<div class="row">
			  <div class="col-md-6">
			  	<label for="inicio">FECHA INICIO</label>
			    <input type="date" name="inicio" class="form-control" value="{{ old('inicio') }}"/>
			  </div>
			  <div class="col-md-6">
			  	<label for="final">FECHA FIN</label>
			    <input type="date" name="final" class="form-control" value="{{ old('fin') }}"/>
			  </div>

			<div class="col-lg-4"> 
				<label for="Localidad">Localidad</label>
				{!!Form::select('locality',$localitys)!!}
	
			</div>




			<div class="form-group">
				
				<button type="submit" class='btn btn-primary'>CREAR CURSO</button>

			</div>

		</form>

	</div>

</body>
</html>