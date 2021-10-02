<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curso</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- Scripts -->
        <script defer src="https://cdn.socket.io/4.2.0/socket.io.min.js"></script>
        <script defer src="../resources/js/app.js"></script>
    </head>
    <body>
        <div class="row p-5">
            @foreach ($items as $item)
                <div class="col-lg-4 my-2">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3>{{$item->name}}</h3>
                            <p class="text-muted">{{$item->description}}</p>
                            <p><strong>PVP: {{ number_format($item->price, 2, ',', '.') }}</strong></p>
                            <button data-id="{{ $item->id }}" id="boton" class="btn btn-primary">Buy</button>
                        </div>
                    </div>      
                </div>
            @endforeach
        </div>
    </body>
</html>
