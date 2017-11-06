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

                <h2>Editar</h2>

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



        <form action="{{ route('update_module_path', ['module' => $module->id]) }}" method="POST">

            {{ csrf_field() }}

            {{ method_field('PUT') }}



            <div class="form-group">
                
                <label for="nombre">Nombre del modulo</label>
                <input type="text" name="nombre" class='form-control' value="{{$module->nombre }}"/>

            </div>

            


            <div class="form-group">
                
                <label for="descripcion">Descripcion</label>
                <textarea rows="5" name="descripcion" class="form-control">{{ $module->descripcion }}</textarea>

            </div>


            <div class="form-group">
                
                <label for="dias">Dia</label>
                <input type="text" name="dias" class='form-control' value="{{ $module->dias }}"/>

            </div>


            <div class="row">
              <div class="col-md-6">
                <label for="hsinicio">HORARIO DE INICIO</label>
                <input type="time" name="hsinicio" class="form-control" value="{{ $module->hsinicio }}"/>
              </div>

              <div class="col-md-6">
                <label for="hsfin">HORARIO DE FIN</label>
                <input type="time" name="hsfin" class="form-control" value="{{ $module->hsfin }}"/>
              </div>
            </div>


            <div class="form-group">
                <br>
                
                <button type="submit" class='btn btn-primary'>EDITAR</button>

            </div>

        </form>



    </div>

</body>
</html>

</body>
</html>