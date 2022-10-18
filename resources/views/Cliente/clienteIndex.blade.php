<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de clientes</h1>
    <ul>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Comentario</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            
            @foreach($clientes as $cliente)
                <tr>
                    <td> 
                        <a href="/cliente/{{$cliente->id}}">
                            {{ $cliente->id }} 
                        </a>
                    </td>
                    <td> {{ $cliente->nombre }} </td>
                    <td> {{ $cliente->correo }} </td>
                    <td> {{ $cliente->comentario }} </td>
                    <td> 
                        <a href="/cliente/{{$cliente->id}}/edit">editar</a> 
                    </td>

                    <td> 
                        <form action ="/cliente/{{$cliente->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
            
        </table>
    <ul>
</body>
</html>