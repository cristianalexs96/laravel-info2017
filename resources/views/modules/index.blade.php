@extends( 'layouts.app' )

@section( 'content' )

	<h1><br>Lista de Modulos<br/></h1>

	<hr/>

	<ul>
		@foreach ( $modules as $module )
			
			<br><br>	{{ $module->nombre }} <br/>

				<a href="{{ route('edit_module_path', ['module' => $module->id]) }}" 
					class="btn btn-info">EDITAR</a>
	
				<form action="{{ route('delete_module_path', [ 'module' => $module->id ] ) }}" method="POST">
						{{ csrf_field() }}

						{{ method_field('DELETE') }}

						<button type="submit" class="btn btn-danger">ELIMINAR</button>

				</form>

		@endforeach
	</ul>

@endsection