@extends( 'layouts.app' )

@section( 'content' )

	<h1>
	<br> Lista de Curso <br/>
	</h1>

	<hr/>

	<ul>
		@if ($courses==null)

			<p> No existe ningun curso </p>

		@else
			@foreach ( $courses as $course )
			
				<br><br> {{$course->nombre}} <br/>
				<form action="{{ route( 'course_path', [ 'course' => $course->id ] ) }}" >
					<button type="submit" class="btn btn-info">VER</button>
	
				<a href="{{ route('edit_course_path', ['course' => $course->id]) }}" 
					class="btn btn-info">EDITAR</a>
	
				<form action="{{ route( 'delete_course_path', [ 'course' => $course->id ] ) }}" method="POST">
						{{ csrf_field() }}

						{{ method_field( 'DELETE' ) }}

						<button type="submit" class="btn btn-danger">ELIMINAR</button>

				</form>


			@endforeach
		@endif
	</ul>

@endsection