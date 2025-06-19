<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponentes</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Listado de Ponentes</h1>
        
        @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif

        <table class="table table-striped">
            <thead class="table-light">
                <tr>
                    <th> Nombre</th>
                    <th> Especialidad</th>
                    <th> Biografía</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ponentes as $p)
                <tr>
                    <td>{{$p->nombre}}</td>
                    <td>{{$p->especialidad}}</td>
                    <td>{{$p->biografia}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <hr class="my-4">
    </div>    
</body>
</html>