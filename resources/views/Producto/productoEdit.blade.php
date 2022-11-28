<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Formulario</title>
        <!--DISEÑO-->
        @vite(['resources/css/bootstrap.css', 'resources/js/bootstrap.js'])
        <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            FASHION_BEAUTY
        </a>
        <a class="btn btn-outline-light" href="/index" role="button">Clientes</a>
        </nav>
</head>

<center>
  <body>
    <br><br><br>
    <h1>Producto</h1>
    <section>
      <form action="/producto/{{ $producto->id }}"| method="post">
        @csrf
        @method('patch')
        <table width='400' cellpadding='6' border='0'>
          <tr>
            <td colspan="2" valign='center' align='center'>
            </td>
          </tr>
          <tr>
            <td width='25%' valign='top' align='right'>
              <label for='producto'>Producto:</label>
            </td>
            <td>
              <input type="text" name="producto"  required value="{{ $producto->producto }}">
              @error('producto')
                <i>{{ $message }}</i>
              @enderror
            </td>
          </tr>
          <tr>
            <td valign='top' align='right'>
              <label>Descripción:</label>
            </td>
            <td>
              <textarea name="descripcion">{{ $producto->descripcion }}</textarea>
              @error('descripcion')
                <i>{{ $message }}</i>
              @enderror
            </td>
          </tr>
          <tr>
            <td valign='top' align='right'>
              <label>Talla:</label>
            </td>
            <td>
              <input type="text" name="talla"  value="{{ $producto->talla }}">
              @error('talla')
                <i>{{ $message }}</i>
              @enderror
            </td>
          </tr>
          <tr>
            <td valign='top' align='right'>
              <label>Precio:</label>
            </td>
            <td>
              <input type="number" name="precio" placeholder="Escribe el precio..." required value="{{ $cliente->telefono }}">
              @error('precio')
                <i>{{ $message }}</i>
              @enderror
            </td>
          </tr>

        </table>
        <br>
        <div>
          <input type="submit" value="Guardar">
        </div>
      </form>
      <br>
    </section>
  </body>
</center>
</html>
