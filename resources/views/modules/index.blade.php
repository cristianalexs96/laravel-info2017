@extends( 'layouts.app' )

@section( 'content' )

	<h1><br>Lista de Modulos<br/></h1>

	<hr/>

	<ul>
		@foreach ( $modules as $module )
			
			<br><br>	{{ $module->nombre }} <br/>

				<a href="{{ route( 'modules.edit', [ 'module' => $module->id ] ) }}" >
					EDITAR
				</a>
				<a href="{{ route( 'modules.destroy', [ 'module' => $module->id ] ) }}">
					ELIMINAR
				</a>
			<br/>

		@endforeach
	</ul>

@endsection