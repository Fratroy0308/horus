<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Proveedores</title>
</head>
<body>
    <h1>Proveedores</h1>
    <h2>Buscar</h2>
    <form action ="/proveedor/create" method="get">
       
        <input type="submit" value="agregar">
    </form>
    <input type="text" name="buscar" placeholder="buscar proveedor...">
    <input type="submit" value="Buscar">
    
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
            
            @foreach($proveedores as $proveedor)
                <tr>
                    <td> 
                        <a href="/proveedor/{{$proveedor->id}}">
                            {{ $proveedor->id }} 
                        </a>
                    </td>
                    <td> 
                        <a href="/proveedor/{{$proveedor->id}}/edit">{{ $proveedor->proveedor }}

                        </a> 
                    </td>
                    <td> {{ $proveedor->correo }} </td>
                    <td> {{ $proveedor->telefono }} </td>
                    <td> {{ $proveedor->direccion }} </td>
                    <td> 
                        <a href="/proveedor/{{$proveedor->id}}/edit">editar</a> 
                    </td>
                    <td> 
                        <form action ="/proveedor/{{$proveedor->id}}" method="post">
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