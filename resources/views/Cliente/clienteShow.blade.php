<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Informacion de cliente</h1>
    <h2>Nombre: {{ $cliente->nombre }}</h2>
    <p>
        Correo: {{ $cliente->correo }}
        <br>
        Télefono: {{ $cliente->telefono }}
        <br>
        Dirección: {{ $cliente->direccion }}
    </p>
</body>
</html>