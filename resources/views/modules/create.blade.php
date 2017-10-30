@extends('layouts.app')
@section('content')
<form action="" method="POST">
	<div class="form-group"  >
		
		<label form"nombre"> Nombre
			
		</label>
		<input type="text" name="nombre" class="form-control" value="">
	</div>
	<div class="form-group"  >
		
		<label form"descripcion"> Descripcion
			
		</label>
		<input type="text" name="descripcion" class="form-control" value="">
	</div>
	<div class="form-group"  >
		
		<label form"docente"> Docente
			
		</label>
		<input type="text" name="docente" class="form-control" value="">
	</div>
	
	<div class="form-group">
		<button type="submit" class="btn btn-primary">crear modulo</button>
	</div>


</form>
@endsection
	