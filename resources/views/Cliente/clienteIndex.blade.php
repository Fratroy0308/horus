<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de clientes</title>
    @vite(['resources/css/bootstrap.css', 'resources/js/bootstrap.js'])
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    FASHION_BEAUTY
  </a>
    <ul class="navbar-nav ms-auto">
        <li><a class="btn btn-outline-light" href="/cliente/create" role="button">Añadir cliente</a></li>
        <!--<li><a class="btn btn-outline-light" href="/menu" role="button">INICIO</a></li>-->
    </ul>
</nav>
</head>

<body>
    <h1>Clientes</h1>
    <h2>Buscar</h2>
    <br>

    <form  method="post">
        <input type="text" name="buscar" placeholder="buscar cliente...">
        <input type="submit" value="Buscar">
        <br>
    </form>
    <br>
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
