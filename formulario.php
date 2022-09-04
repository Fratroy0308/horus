<!DOCTYPE html>

<?php
  include('conexion.php');

  if(!empty($_POST['nombre']) 
  || !empty($_POST['correo']) 
  || !empty($_POST['genero'])
  || !empty($_POST['password'])
  || !empty($_POST['comentario'])
  || !empty($_POST['ciudad'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $genero = $_POST['genero'];
    $password = $_POST['password'];
    $comentario = $_POST['comentario'];
    $ciudad = $_POST['ciudad'];
    $interes = $_POST['interes'];

    $sql = "INSERT INTO usuario (nombre, correo, genero, password, comentario, ciudad, interes) 
    VALUES ($nombre, $correo, $genero, $password, $comentario, $ciudad, $interes)";
  }
?>


<html lang="es">
<meta charset = "UTF-8">
<link rel="stylesheet" href="estilo.css">
<title>Formulario</title>

<center>
  <body>
    <a id="link" href="index.php">
      <div class="nav">
        <a href="index.php">Inicio</a>
        <a href="formulario.php">Formulario</a>
      </div>
    </a>
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
              <input type="text" name="nombre" placeholder="Escribe tu nombre..." required>
            </td> 
          </tr> 
          <tr> 
            <td valign='top' align='right'> 
              <label>Correo:</label>
            </td> 
            <td>
              <input type="email" name="correo" placeholder="Escribe tu correo electronico..." required>
            </td> 
          </tr> 
          <tr> 
            <td valign='top' align='right'> 
              <label>Genero:</label>
            </td> 
            <td> 
              <input type="radio" name="genero" value="H" required>
              <label>Hombre</label>
              <input type="radio" name="genero" value="M" required> 
              <label>Mujer</label>
            </td> 
          </tr>
          <tr>
            <td valign='top' align='right'>
              <label>Contraseña:</label>
            </td> 
            <td>
              <input type="password" name="password" placeholder="Escribe tu contraseña..." required>
            </td> 
          </tr>
          <tr>
            <td valign='top' align='right'>
              <label>Comentario:</label>
            </td> 
            <td>
              <textarea name="comentario" placeholder="Escribe un comentario..." required></textarea>
            </td> 
          </tr>
          <tr>
            <td valign='top' align='right'>
              <label>Ciudad:</label>
            </td> 
            <td>
              <select name="ciudad" required>
                <option selected hidden value="">Seleccione su ciudad</option>
                <option value="Guadalajara">Guadalajara</option>
                <option value="Zapopan">Zapopan</option>
                <option value="Tonalá">Tonalá</option>
                <option value="Tlaquepaque">Tlaquepaque</option>
                <option value="Otra">Otra</option>
              </select>
            </td> 
          </tr>
          <tr>
            <td valign='top' align='right'>
              <label>Me interesa contratarte:</label>
            </td> 
            <td>
              <input type="radio" name="interes" value="si" required>
              <label>Si</label>
              <input type="radio" name="interes" value="no" required> 
              <label>No</label>
            </td> 
          </tr>
        </table> 
        <br>
        <div>
          <input type="submit" value="Enviar">
        </div>
      </form>
    </section>
  </body>
</center>
</html>