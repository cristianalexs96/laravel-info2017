@extends( 'layouts.app' )

@section( 'content' )

	<h1>Lista de Cursos</h1>

	<div class="container">
		<a class="btn btn-info" href="{{ route( 'courses.create' ) }}" >
			 CREAR CURSO
		</a> 
		<input type="search" name="buscarCurso" id="buscarCurso" placeholder="Buscar curso..">
	</div>
	<hr/>

	<div class="container">

		@if ( ! is_null ( $courses ) ) 
			@foreach ( $courses as $course )
			<div class="row" style="background: #d8d8d8; padding: 10px; margin-top: 10px; margin-bottom: 10px; border: 1px solid #000;">
				<p class="col-sm-7" style="margin-right: 100px;"><b>CURSO: </b>{{ $course->nombre }} </p>

				<div class="pull-right">
				
					<a class="btn btn-success pull-right" href="{{ route( 'courses.show', [ 'course' => $course->id ] ) }}" >
						 VER 
					</a> 
					<a class="btn btn-info" href="{{ route( 'courses.edit', [ 'course' => $course->id ] ) }}" >
						 EDITAR
					</a> 

					<form style="display: inline-block;" action="{{ route( 'delete_course_path', [ 'course' => $course->id ] ) }}" method="POST">
							{{ csrf_field() }}

							{{ method_field( 'DELETE' ) }}

							<button type="submit" class="btn btn-danger">ELIMINAR</button>
					</form>	
				</div>
			</div>
			@endforeach
		@else 
			<p>No existe ningún curso.</p>
		@endif
	
</div>

@endsection