@extends( 'layouts.app' )

@section( 'content' )

	<h1><br>Lista de Localidades<br/></h1>

	<hr/>

	<ul>
		@foreach ( $localitys as $locality )
			
			<br><br>	{{ $locality->nombre }} <br/>

				<a href="{{ route('edit_locality_path', ['localitys' => $locality->id]) }}" 
					class="btn btn-info">EDITAR</a>


		@endforeach
	</ul>

@endsection