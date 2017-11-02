@extends( 'layouts.app' )

@section( 'content' )

	<h1>List of Courses</h1>

	<hr/>

	<ul>
		@foreach ( $courses as $course )
			<li>
				{{ $course->nombre }} 
				<a href="{{ route( 'courses.show', [ 'course' => $course->id ] ) }}" >
					VER
				</a>
				<a href="{{ route( 'courses.edit', [ 'course' => $course->id ] ) }}" >
					EDITAR
				</a>
				<a href="{{ route( 'courses.destroy', [ 'course' => $course->id ] ) }}">
					ELIMINAR
				</a>
			<li>
		@endforeach
	</ul>

@endsection