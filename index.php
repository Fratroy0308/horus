<!DOCTYPE html>

<html lang="es">
<meta charset = "UTF-8">
<head>
    <link rel="stylesheet" href="estilo.css">    
    <title>Inicio</title>
</head>
<center>
  <body>
    <a id="link" href="index.php">
      <div class="nav">
        <a href="index.php">Inicio</a>
          <a href="formulario.php">Formulario</a>
      </div>
    </a>
    <br><br><br>
    <h1>Matavilla Estrada Raúl Alfredo</h1>
    <main>
      <section>
        <h2>Acerca de mi</h2>
        <p>
          Tengo 26 años.
          <br>
          Trabajo como programador.
          <br>
          Me gustan las motos y salir a rodar de vez en cuando.
          <br>
          Hacer ejercicio.
          <br>
          Ver series Online o en Netflix
          <br>
          Jugar videojuegos.
          <br>
          Salir de fiesta con amigas y amigos.
          <br>
          Estudio en el Centro Universitario de Ciencias Exactas e Ingenierías (CUCEI)
        </p>
      </section>
      <br>
      <section>
        <h2>Mis conocimientos</h2>
        <p>
          Programar en VB.NET.
          <br>
          Trabajar con ACCESS.
          <br>
          Trabajar con MYSQL.
          <br>
          Soy bueno en el diseño.
          <br>
          Se un poco de escultura.
          <br>
          Dar soporte tecnico.
          <br>
          Dibujar.
        </p>
      </section>
      <br>
      <section>
        <h2>Mis fortalezas</h2>
        <p>
          Resilente.
          <br>
          Empático.
          <br>
          Lider.
          <br>
          Versatil.
          <br>
          Proactivo o iniciativa.
          <br>
          Curiosidad y disposición para aprender.
          <br>
          Determinación.
        </p>
      </section>
      <br>
      <section>
        <h2>Proyectos</h2>
        <table width="200" cellpadding='1' border='1'>
          <tr>
            <td valign='center' align='center'>
              <p> 
                Tabla: CatEmpresas
              </p>
            </td>
          </tr>
          <tr>
            <td valign='center' align='center'>
              Campos:
              <li>iCodEmpresa</li>
              <li>vchNombreEmpresa</li>
              <li>vchTelefono</li>
              <li>vchCodigoPostal</li>
              <li>vchDireccion</li>
            </td>
          </tr> 
        </table>
        <br>
        <table width="200" cellpadding='1' border='1'>
          <tr>
            <td valign='center' align='center'>
              <p> 
                Tabla: CatServicios
              </p>
            </td>
          </tr>
          <tr>
            <td valign='center' align='center'>
              Campos:
              <li>iCodServicio</li>
              <li>iCodEmpresa</li>
              <li>vchServicio</li>
              <li>dPrecio</li>
              <li>dComision</li>
            </td>
          </tr> 
        </table>
        <br>
        <table width="200" cellpadding='1' border='1'>
          <tr>
            <td valign='center' align='center'>
              <p> 
                Tabla: CatMedicos
              </p>
            </td>
          </tr>
          <tr>
            <td valign='center' align='center'>
              Campos:
              <li>iCodMedico</li>
              <li>vchNombreMedico</li>
              <li>vchApellidoP</li>
              <li>vchApellidoM</li>
              <li>vchProfesion</li>
              <li>vchCedula</li>
            </td>
          </tr> 
        </table>
        <br>
        <table width="200" cellpadding='1' border='1'>
          <tr>
            <td valign='center' align='center'>
              <p> 
                Tabla: TranPacientes
              </p>
            </td>
          </tr>
          <tr>
            <td valign='center' align='center'>
              Campos:
              <li>iCodPaciente</li>
              <li>vchNombre</li>
              <li>vchPaterno</li>
              <li>vchMaterno</li>
              <li>bSexo</li>
              <li>dtFechaNacimiento</li>
              <li>vchTelefono</li>
              <li>vchCorreo</li>
              <li>vchObservaciones</li>
            </td>
          </tr> 
        </table>
        <br>
        <table width="200" cellpadding='1' border='1'>
          <tr>
            <td valign='center' align='center'>
              <p> 
                Tabla: TranInformesMedicos
              </p>
            </td>
          </tr>
          <tr>
            <td valign='center' align='center'>
              Campos:
              <li>iCodInformeMedico</li>
              <li>iCodPaciente</li>
              <li>iCodMedico</li>
              <li>iCodServicio</li>
              <li>dtFechaConsulta</li>
              <li>dtFechaInicioSintomas</li>
              <li>bAtencionClinica</li>
              <li>bPrimeraVez</li>
              <li>vchMotivoConsulta</li>
              <li>vchExploracionFisica</li>
              <li>vchReceta</li>
            </td>
          </tr> 
        </table>
        <br>
        <table width="200" cellpadding='1' border='1'>
          <tr>
            <td valign='center' align='center'>
              <p> 
                Tabla: RelSignos
              </p>
            </td>
          </tr>
          <tr>
            <td valign='center' align='center'>
              Campos:
              <li>iCodSignos</li>
              <li>iCodInformeMedico</li>
              <li>vchFrecCardiaca</li>
              <li>vchFrecResp</li>
              <li>dTemp</li>
              <li>dPeso</li>
              <li>vchPreArt</li>
              <li>vchTiempoLlenadoCapilar</li>
            </td>
          </tr> 
        </table>
        <br>
        <table width="200" cellpadding='1' border='1'>
          <tr>
            <td valign='center' align='center'>
              <p> 
                Tabla: TranDiagnosticos
              </p>
            </td>
          </tr>
          <tr>
            <td valign='center' align='center'>
              Campos:
              <li>iiCodDaignostico</li>
              <li>iCodPaciente</li>
              <li>vchDiagPresuntivo</li>
              <li>vchDiagDiferencial</li>
              <li>vchDiagDefinitivo</li>
              <li>vchPruevasLabGab</li>
              <li>vchMedicacion</li>
            </td>
          </tr> 
        </table>
        <p>
          Nombre del proyecto: Horus.
          <br>
          Lenguajes: vb.net y sql (Access y Mysql).
          <br>
          Descripción: Software para consultorios médicos.
        </p>
      </section>
      <br>
      <section>
        <h2>Persona que admiro</h2>
        <img src="nikola-tesla.jpeg" alt="Nikola Tesla"  width="500">
        <table width="400" cellpadding='0' border='0'>
          <tr>
            <td valign='center' align='center'>
              <p> <b>Nikola Tesla</b> fue un inventor, ingeniero eléctrico y mecánico serbio nacionalizado estadounidense, célebre por sus contribuciones al diseño del moderno suministro de electricidad de corriente alterna. <a target="_blank" href="https://es.wikipedia.org/wiki/Nikola_Tesla">Wikipedia</a>
              </p>

            </td>
          </tr> 
        </table>
      </section>
    </main>
  </body>
  <br><br>
  <div class="footer">
    <footer>
      <p>
        Contáctame en 
        <a href="mailto:raul.maravilla9279@alumnos.udg.mx" target="_blank">raul.maravilla9279@alumnos.udg.mx</a>.
      </p>      
    </footer>
  </div>
  <br>
  <br>
</center>
</html>