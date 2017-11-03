@extends( 'layouts.app' )

@section( 'content' )

	<h1>List of Courses</h1>

	<hr/>

	<ul>
		@foreach ( $courses as $course )
			<li>
				{{ $course->nombre }} 
				<a class="btn btn-success" href="{{ route( 'courses.show', [ 'course' => $course->id ] ) }}" >
					VER
				</a>
				<a class="btn btn-info" href="{{ route( 'courses.edit', [ 'course' => $course->id ] ) }}" >
					EDITAR
				</a>
				<form action="{{ route( 'courses.destroy', [ 'course' => $course->id ] ) }}" method="POST">
						{{ csrf_field() }}

						{{ method_field( 'DELETE' ) }}

						<button type="submit" class="btn btn-danger">ELIMINAR</button>
				</form>	
			<li>
		@endforeach
	</ul>

@endsection