
@extends( 'layouts.app' )

@section( 'content' )

	<h1>Curso: {{$courses->nombre}}</h1>

	

	<h2>Modulos correspondientes:</h2>

		<form action="{{ route( 'create_module_path', [ 'course' => $courses->id ] ) }}" >
			<button type="submit" class="btn btn-info">Crear Modulo</button>
		</form>
	
	<ul>


        <br><br>

		@if (is_null($modules)) 

            <p> No existen modulos correspondientes a este curso </p>
        @else

			@foreach( $modules as $module )
				 <br><br>	{{ $module->nombre }} <br/>



				<a href="{{ route('edit_module_path', ['module' => $module->id]) }}" 
					class="btn btn-info">EDITAR</a>
	
				<form action="{{ route('delete_module_path', [ 'module' => $module->id ] ) }}" method='POST'>
						{{ csrf_field() }}

						{{ method_field('DELETE') }}

						<button type="submit" class="btn btn-danger">ELIMINAR</button>
				</form>
				
			@endforeach
		@endif
	</ul>

@endsection