<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="icon1.ico">
        <!--<meta http-equiv="X-UA-Compatible" content="ie=edge">-->
  </head>

  <body>
    <div class="card">
        <div class="card-header">
          Prestamo!!!
        </div>
        <div class="card-body">
          <h3 class="card-title">¡Nuevo prestamo usuario!</h3>
          <p class="card-text">Un nuevo usuario ha solicitado un prestamo:</p>
          <ul>
              <li><b>Nombre:</b> {{ $usuario->name }}</li>
              <li><b>Teléfono:</b> {{ $usuario->phone }}</li>
              <li><b>Email:</b> {{ $usuario->email }}</li>
          </ul>
          <p class="card-text">Solicitud del prestamo ${{$usuario->money}}.00 a un plazo de {{$usuario->plazo}} meses.</p>
          <p class="card-text">{{$usuario->comentario}}</p>
        </div>
      </div>
  </body>
</html>