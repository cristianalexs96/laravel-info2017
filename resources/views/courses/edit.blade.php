<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar Curso</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <h2>EDITAR CURSO</h2>

            </div>
        </div>

        <hr>

        @if(count($errors) > 0)

            <div class="alert alert-danger">

                <ul>

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>


        @endif



        <form action="{{ route('update_course_path', ['course' => $course->id]) }}" method="POST">

        {{csrf_field()}}

        {{ method_field('PUT') }}



            <div class="form-group">

                <label for="">NOMBRE</label>

                <input type="text" name="nombre" class="form-control" value="{{$course->nombre}}"/>

            </div>


            <div class="form-group">

                <label for="descripcion">DESCRIPCION</label>

                <textarea rows="5" name="descripcion" class="form-control"/>{{$course->descripcion}}</textarea>

            </div>



            <div class="form-group">

                <label for="">FECHA DE INICIO</label>

                <input type="date" name="inicio" class="form-control" value="{{ $course->inicio }}"/>

            </div>


            <div class="form-group">

                <label for="">FECHA DE FIN</label>

                <input type="date" name="final" class="form-control" value="{{ $course->final}}"/>

            </div>



            <div class="form-group">

                <label for="">DIRECCION</label>

                <input type="text" name="direccion" class="form-control" value="{{ $course->direccion}}"/>

            </div>



            <div class="form-group">

                <label for="">LOCALIDAD</label>

                <input type="text" name="localidad" class="form-control" value="{{ $course->localidad}}"/>

            </div>



            <div class="form-group">

                <button type="submit" class='btn btn-primary'>Editar Curso</button>


            </div>

        </form>



    </div>

</body>
</html>


