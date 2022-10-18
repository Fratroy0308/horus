<!DOCTYPE html>
<html lang="es">
<meta charset = "UTF-8">
<link rel="stylesheet" href="estilo.css">
<title>Formulario</title>

<center>
  <body>
    <br><br><br>
    <h1>Contactox</h1>
    <section>
      <form method="post" action="/cliente">
        @csrf
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
              <input type="text" name="nombre" placeholder="Escribe tu nombre..." required value={{ old('nombre') }} >
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
              <input type="email" name="correo" placeholder="Escribe tu correo electronico..." required value={{ old('correo') }}>
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
              <input type="tel" name="telefono" placeholder="Escribe tu telefono..." required value={{ old('telefono') }}>
              @error('correo')
                <i>{{ $message }}</i>
              @enderror
            </td> 
          </tr> 
          <tr>
            <td valign='top' align='right'>
              <label>Comentario:</label>
            </td> 
            <td>
              <textarea name="direccion" placeholder="Escribe tu direccion..." required value={{ old('direccion') }}></textarea>
              @error('comentario')
                <i>{{ $message }}</i>
              @enderror
            </td> 
          </tr>
        </table> 
        <br>
        <div>
          <input type="submit" value="Enviar">
        </div>
      </form>
      <br>
    </section>
  </body>
</center>
</html>