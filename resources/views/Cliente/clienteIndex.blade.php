<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    <h2>Buscar</h2>
    <form action ="/cliente/create" method="get">
       <input type="submit" value="agregar">
    </form>
    <br>
    
    <form  method="post">
        <input type="text" name="buscar" placeholder="buscar cliente...">
        <input type="submit" value="Buscar">
    </form>
    <ul>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Dirección</th>
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
                    <td> 
                        <a href="/cliente/{{$cliente->id}}">
                            {{ $cliente->nombre }} 
                        </a>
                    </td>
                    <td> {{ $cliente->correo }} </td>
                    <td> {{ $cliente->telefono }} </td>
                    <td> {{ $cliente->direccion }} </td>
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