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
    <!--<a class="btn btn-outline-light" href="#" role="button">INICIO</a>-->
    </nav>
</head>
<center>
  <body>
    <br><br><br>
    <h1>Producto</h1>
    <section>
      <form method="post" action="/producto">
        @csrf
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
              <input type="text" name="producto" placeholder="Escribe el producto..." required value={{ old('producto') }} >
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
              <textarea name="descripcion" placeholder="Escribe una descripción..." required value={{ old('descripcion') }}></textarea>
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
              <input type="text" name="talla" placeholder="Escribe la talla del producto..." required value={{ old('talla') }}>
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
              <input type="number" name="precio" placeholder="Escribe el precio..." required value={{ old('precio') }}>
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
