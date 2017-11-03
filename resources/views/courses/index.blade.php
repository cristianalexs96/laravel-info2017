@extends( 'layouts.app' )

@section( 'content' )

	<h1>Lista de Cursos</h1>

	<hr/>

	@foreach ( $courses as $course )
		<p>{{ $course->name }}</p>
	@endforeach

@endsection