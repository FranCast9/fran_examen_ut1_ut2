<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Prueba superada</h1>
        @if($messages->isEmpty())
            <p>No hay mensajes en la base de datos</p>
        @else
            <ul>
                @foreach($messages as $message)
                    <li>{{ $message->text }}</li>
                    <li> 
                        <select name="subrayado" id="subrayado">
                            <option value="Si"> <u> {{ $message->text }} </u> </option>
                            <option value="No"> {{ $message->text }} </option>
                        </select> 
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>