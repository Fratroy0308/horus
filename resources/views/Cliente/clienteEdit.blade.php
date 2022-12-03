<!DOCTYPE html>
<html lang="es">
<head>
<meta charset = "UTF-8">
<!--<link rel="stylesheet" href="estilo.css">-->
@vite(['resources/css/bootstrap.css', 'resources/js/bootstrap.js'])
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <!--<img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">-->
    FASHION_BEAUTY
  </a>
</nav>
<title>Formulario</title>
</head>

<center>
  <body>
    <br><br><br>
    <h1>EDITAR</h1>
    <section>
      <form action="/cliente/{{ $cliente->id }}"| method="post">
        @csrf
        @method('patch')
        <table width='400' cellpadding='6' border='0'>
          <tr>
            <td colspan="2" valign='center' align='center'>
            </td>
          </tr>
          <tr>
            <td width='25%' valign='top' align='right'>
              <label for='nombre'>Nombre:</label>
            </td>
            <td>
              <input type="text" name="nombre"  required value="{{ $cliente->nombre }}">
              @error('nombre')
                <i>{{ $message }}</i>
              @enderror
            </td>
          </tr>
          <tr>
            <td valign='top' align='right'>
              <label>Correo:</label>
            </td>
            <td>
              <input type="email" name="correo"  value="{{ $cliente->correo }}">
              @error('correo')
                <i>{{ $message }}</i>
              @enderror
            </td>
          </tr>
          <tr>
            <td valign='top' align='right'>
              <label>Telefono:</label>
            </td>
            <td>
              <input type="tel" name="telefono" placeholder="Escribe tu telefono..." required value="{{ $cliente->telefono }}">
              @error('correo')
                <i>{{ $message }}</i>
              @enderror
            </td>
          </tr>
          <tr>
            <td valign='top' align='right'>
              <label>Direccion:</label>
            </td>
            <td>
              <textarea name="direccion">{{ $cliente->direccion }}</textarea>
              @error('comentario')
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
