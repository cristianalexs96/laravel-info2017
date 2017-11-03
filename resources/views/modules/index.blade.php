@extends( 'layouts.app' )

@section( 'content' )

	<h1><br>Lista de Modulos<br/></h1>

	<hr/>

	<ul>
		@foreach ( $modules as $module )
			
			<br><br>	{{ $module->nombre }} <br/>
				<a href="{{ route( 'module_path', [ 'module' => $module->id ] ) }}" >
					VER
				</a>
				<a href="{{ route( 'edit_module_path', [ 'module' => $module->id ] ) }}" >
					EDITAR
				</a>
				<a href="{{ route( 'delete_module_path', [ 'module' => $module->id ] ) }}">
					ELIMINAR
				</a>
			<br/>

		@endforeach
	</ul>

@endsection