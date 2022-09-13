<!DOCTYPE html>
<html lang="es">
<meta charset = "UTF-8">
<link rel="stylesheet" href="estilo.css">
<title>Formulario</title>

<center>
  <body>
    <br><br><br>
    <h1>Contacto</h1>
    <section>
      <form action="index.php" method="POST">
        <table width='800' cellpadding='6' border='0'>
          <tr>
            <td colspan="2" valign='center' align='center'>
            </td>
          </tr> 
          <tr>
            <td width='25%' valign='top' align='right'>
              <label for='nombre'>Nombre:</label>
            </td> 
            <td>
              <input type="text" name="nombre" placeholder="Escribe tu nombre..." required value={{$nombre}} >
            </td> 
          </tr> 
          <tr> 
            <td valign='top' align='right'> 
              <label>Correo:</label>
            </td> 
            <td>
              <input type="email" name="correo" placeholder="Escribe tu correo electronico..." required value={{$correo}}>
            </td> 
          </tr> 
          <tr>
            <td valign='top' align='right'>
              <label>Comentario:</label>
            </td> 
            <td>
              <textarea name="comentario" placeholder="Escribe un comentario..." required value={{$comentario}}></textarea>
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