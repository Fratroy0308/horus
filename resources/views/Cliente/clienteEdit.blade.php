<!DOCTYPE html>
<html lang="es">
<meta charset = "UTF-8">
<link rel="stylesheet" href="estilo.css">
<title>Formulario</title>

<center>
  <body>
    <br><br><br>
    <h1>Cliente</h1>
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