<!DOCTYPE html>
<html>
<head>
	<title>MODULO</title>
</head>
<body>

	<div class="container">
	
		<div class="row">
			<div class="col-md-12">

				<h2>Crear modulo</h2>

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
		
		<form action="{{ route('store_module_path') }}" method="POST">

			{{ csrf_field() }}

			<div class="form-group">
				
				<label for="">Nombre del Modulo</label>
				<input type="text" name="nombre" class='form-control' value="{{ old('nombre') }}"/>

			</div>
			


			<div class="form-group">
				
				<label for="descripcion">Descripcion</label>
				<textarea rows="5" name="descripcion" class="form-control">{{ old('descripcion') }}</textarea>

			</div>


			<div class="form-group">
				
				<label for="">Dia</label>
				<input type="date" name="dias" class='form-control' value="{{ old('dias') }}"/>

			</div>

			<div class="form-group">
				
				<label for="">Horario Inicio</label>
				<input type="time" name="horarios" class='form-control' value="{{ old('horarios') }}"/>

			</div>

						<div class="form-group">
				
				<label for="">Horario Fin</label>
				<input type="time" name="horarios" class='form-control' value="{{ old('horarios') }}"/>

			</div>

			<div class="form-group">
				
				<button type="submit" class='btn btn-primary'>CREAR</button>

			</div>

		</form>

	</div>

</body>
</html>