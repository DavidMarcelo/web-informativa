<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Usuario</title>
</head>

<body>
    <div class="card">
        <div class="card-header">
          Prestamo!!!
        </div>
        <div class="card-body">
          <h3 class="card-title">¡Nuevo prestamo usuario!</h3>
          <p class="card-text">Un nuevo usuario con el nombre de {{ $usuario }}, telefono {{$usuario}}</p>
          <p class="card-text">y correo electronico {{ $usuario}}. Ha solicitado un prestamo</p>
          <p class="card-text">de {{$usuario}} aun plazo de {{ $usuario }} meses.</p>
          <p class="card-text">{{ $usuario }}.</p>
        </div>
      </div>
</body>
</html>