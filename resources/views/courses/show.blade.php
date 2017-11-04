
@extends( 'layouts.app' )

@section( 'content' )

	<h1>Curso: {{$courses->nombre}}</h1>

	

	<h2>Modulos correspondientes:</h2>

		<form action="{{ route( 'create_module_path', [ 'course' => $courses->id ] ) }}" >
		<button type="submit" class="btn btn-info">Crear Modulo</button>
	
	<ul>


        <br>

		@if ($modules==null) 
            <p> No existen modulos correspondientes a este curso </p>
        @else

			@foreach( $modules as $module )
				 {{ $module->nombre }} 
				
			@endforeach
		@endif
	</ul>

@endsection