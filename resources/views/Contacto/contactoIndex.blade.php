<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Listado de contactos</h1>
    <ul>
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Comentario</th>
            </tr>
            
            @foreach($contactos as $contacto)
                <tr>
                    <td> {{ $contacto->nombre }} </td>
                    <td> {{ $contacto->correo }} </td>
                    <td> {{ $contacto->comentario }} </td>
                </tr>
            @endforeach
            
        </table>
    <ul>
</body>
</html>