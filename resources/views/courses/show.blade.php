
@extends( 'layouts.app' )

@section( 'content' )

	<h1>Curso: {{ $course->nombre }}</h1>

	<h2>Modulos correspondientes:</h2>
	
	<ul>

		@if ($modules==null) 
            <p> No existen modulos correspondientes a este curso </p>
        @else
			@foreach( $modules as $module )
				<li> {{ $module->nombre }} 
					<a href="{{ route( 'module_path', [ 'module' => $module->id ] ) }}">
						VER
					</a>
				</li>
			@endforeach
		@endif
	</ul>

@endsection