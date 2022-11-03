<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
</head>
<body>
    <h1>Productos</h1>
    <h2>Buscar</h2>
    <form action ="/producto/create" method="get">
        <input type="submit" value="agregar">
    </form>
    <input type="text" name="buscar" placeholder="buscar producto...">
    <input type="submit" value="Buscar">
    
    <ul>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Talla</th>
                <th>Precio</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            
            @foreach($productos as $producto)
                <tr>
                    <td> 
                        <a href="/producto/{{$producto->id}}">
                            {{ $producto->id }} 
                        </a>
                    </td>
                    <td> {{ $producto->produto }} </td>
                    <td> {{ $producto->descripcion }} </td>
                    <td> {{ $producto->talla }} </td>
                    <td> {{ $producto->precio }} </td>
                    <td> 
                        <a href="/producto/{{$producto->id}}/edit">editar</a> 
                    </td>

                    <td> 
                        <form action ="/producto/{{$producto->id}}" method="post">
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