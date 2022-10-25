<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Informacion de proveedor</h1>
    <h2>{{ $proveedor->proveedor }} </h2>
    <p>
        {{ $proveedor->correo }}
        <br>
        {{ $proveedor->telefono }}
        <br>
        {{ $proveedor->direccion }}
    </p>
</body>
</html>