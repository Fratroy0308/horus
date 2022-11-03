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
    <h1>Producto</h1>
    <ul>
        <table border="1">
            <tr>
                <th>Proveedor</th>
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
                        <a href="/producto/{{$producto->proveedor}}">
                            {{ $producto->proveedor->proveedor }} 
                        </a>
                    </td>
                    <td> 
                        <a href="/producto/{{$producto->id}}">
                            {{ $producto->id }} 
                        </a>
                    </td>
                    <td> {{ $producto->producto }} </td>
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