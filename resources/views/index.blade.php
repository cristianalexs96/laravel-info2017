<form action="{{ route('delete_post_path', ['post'=>$post->id]) }}" method="POST">
{{ csrf_field() }}
{{ method_field('DELETE') }}

""el boton de eliminar""
<div class "form-group">
	<button type="submit" class='btn btn-danger'>Eliminar</button>
</form>