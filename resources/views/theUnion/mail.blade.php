<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Llamado de emergencia</title>
</head>
<body>
    <h1>The Union</h1>
    <p>Buenas! Usted ha realizado su pedido con exito</p>
    <p>Para mas informacion en nuestra aplicacion tienes los detalles de su pedido</p>
    <br>
    <p>Este pedido va dirigido a la direccion</p>
    {{$user->address}}
    <p>Esperemos que vaya todo bien</p>
    <p>Un saludo</p>
<img src="{{ asset('img/logo.png') }}" alt="">
</body>
</html>
