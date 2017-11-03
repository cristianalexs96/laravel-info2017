<!DOCTYPE html>
<html>
<head>

    <title>Editar Modulo</title>

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

        {{csrf_field()}}

        {{ method_field('PUT') }}



            <div class="form-group">

                <label for="">Nombre</label>

                <input type="text" name="nombre" class="form-control" value="{{$module->nombre}}"/>

            </div>


            <div class="form-group">

                <label for="descripcion">Descripcion</label>

                <textarea rows="5" name="descripcion" class="form-control"/>{{$module->descripcion}}</textarea>

            </div>



            <div class="form-group">

                <label for="">Dia</label>

                <input type="date" name="dias" class="form-control" value="{{ $module->dias }}"/>

            </div>


            <div class="form-group">

                <label for="">Horario</label>

                <input type="date" name="horarios" class="form-control" value="{{ $module->horarios}}"/>

            </div>


            <div class="form-group">

                <button type="submit" class='btn btn-primary'>Editar</button>


            </div>

        </form>



    </div>

</body>
</html>