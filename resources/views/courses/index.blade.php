@extends( 'layouts.app' )

@section( 'content' )

	<h1>List of Courses</h1>

	<hr/>

	@foreach ( $courses as $course )
		<p>{{ $course->name }}</p>
	@endforeach

@endsection