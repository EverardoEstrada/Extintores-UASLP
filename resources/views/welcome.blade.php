<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>S.L.E.</title>
</head>

<body>
    <header>
        <h1>Sistema para Localicacion de Extintores</h1>
    </header> 
    
    <div class="container">
        <div class="row">
            @csrf
            <div class="col-2 d-flex flex-column align-items-center function-section">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar Extintor
                </button>
            </div>
            <div class="col">
                <div class="card mt-1">
                    <div class="card-header">
                        <h3>Extintores</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Kg</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Fecha de expiración</th>
                                    <th scope="col">Localización</th>
                                    <th scope="col">Lugar</th>
                                    <th scope="col">Piso</th>
                                    <th scope="col">Observaciones</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exts as $ext)
                                    <tr>
                                        <td>{{ $ext->size }}</td>
                                        <td>{{ $ext->type }}</td>
                                        <td>{{ $ext->expiration_date }}</td>
                                        <td>{{ $ext->location }}</td>
                                        <td>{{ $ext->place }}</td>
                                        <td>{{ $ext->floor }}</td>
                                        <td>{{ $ext->observation }}</td>
                                        <td>
                                            <button class="btn btn-primary m-1 btn-edit" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                                onclick="show_data('{{$ext}}')">
                                                <i class="far fa-edit"></i>
                                            </button>
                                            <a href="/delete/{{$ext->id}}" class="btn btn-danger m-1">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('modals.addExt');
        @include('modals.editExt');

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('js/formControl.min.js') }}"></script>

</body>

</html>