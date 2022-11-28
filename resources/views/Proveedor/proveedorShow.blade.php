<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProveedoresShow</title>
    <!--DISEÑO-->
    @vite(['resources/css/bootstrap.css', 'resources/js/bootstrap.js'])
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        FASHION_BEAUTY
    </a>
    <!--<a class="btn btn-outline-light" href="#" role="button">INICIO</a>-->
    </nav>
</head>
<body>
    <h1>Informacion de proveedor</h1>
    <h2>{{ $proveedor->proveedor }} </h2>
    <p>
        <label name="proveedor_id">{{ $proveedor->id }} </label>
        Correo: {{ $proveedor->correo }}
        <br>
        Teléfono: {{ $proveedor->telefono }}
        <br>
        Dirección: {{ $proveedor->direccion }}
    </p>
    <h1>Producto</h1>
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
