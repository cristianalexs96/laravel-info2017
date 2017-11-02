@extends( 'layouts.app' )

@section( 'content' )

	<h1>List of Modules</h1>

	<hr/>

	@foreach( $modules as $module )

		<p> {{ $module->nombre }}</p>

	@endforeach

@endsection