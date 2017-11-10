<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar Localidad</title>
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



        <form action="{{ route('update_locality_path', ['localitys' => $locality->id]) }}" method="POST">

            {{ csrf_field() }}

            {{ method_field('PUT') }}



            <div class="form-group">
                
                <label for="nombre">Nombre de la localidad</label>
                <input type="text" name="nombre" class='form-control' value="{{$locality->nombre }}"/>

            </div>


        </form>



    </div>

</body>
</html>

</body>
</html>