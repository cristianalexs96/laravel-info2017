@extends( 'layouts.app' )

@section( 'content' )

	<h1>Curso: {{ $course->nombre }}</h1>

	<h2>Modulos correspondientes:</h2>
	
	<ul>
		@foreach( $modules as $module )
			<li> {{ $module->nombre }} 
				<a href="{{ route( 'modules.show', [ 'module' => $module->id ] ) }}">
					VER
				</a>
			</li>
		@endforeach
	</ul>

@endsection