<?php
session_start();

if (!isset($_SESSION['usuario'])) {
  header("Location: index.php?error=noLogged");
  exit;
}else{
  $user = $_SESSION['usuario'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="cv.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <!-- Page header-->
  <a class="logout" type="submit" href="logout.php">Cerrar Sesión</a>
  <header class="bg-secondary">
    <img src="chico-guapo1.jpg" class="rounded-circle" style="border:5px solid gray; width: 200px ; margin-top: 40px; margin-left: 50px;">
    <h3 class="name"><?php echo $_SESSION['nom']?></h3>


  </header>

  <!-- Perfil-->
  <!-- col 4 <- 2 veces -->
  <div id="formació">
    <div class="container">
      <div class="row m-0">
        <div style="margin-top:100px ;" class="col-lg-4">
          <div class="row">
            <img src="flechas.png" class="flechas">
            <h5>Datos Personales</h5>
            <hr>
            <div>
              <img src="contacto.png" class="emotes">
              <h9><b><?php echo $_SESSION['nom'] . '&nbsp'.$_SESSION['cognom'];?></b></h9> <br>
              <img src="hogar.png" class="emotes">
              <h9><b>Calle 24 5632, City Bell, La Plata</b></h9><br>
              <img src="llamada-telefonica.png" class="emotes">
              <h9><b>1234 56789</b></h9><br>
              <img src="arroba.png" class="emotes">
              <h9><b><?php echo $_SESSION['email'];?></b></h9><br>
              <img src="calendario.png" class="emotes">
              <h9><b>04/01/1995</b></h9><br>
              <img src="bandera.png" class="emotes">
              <h9><b>Argentina</b></h9><br>
              <img src="telefono-movil.png" class="emotes">
              <h9><b>9376 5432</b></h9><br>
              <img src="signo-wc.png" class="emotes">
              <h9><b>Soltero</b></h9><br>
              <img src="coche.png" class="emotes">
              <h9><b>Clase C</b></h9>
            </div>
          </div>
          <br>
          <div class="row">
            <img src="flechas.png" class="flechas">
            <h5>Idiomas</h5>
            <hr>
            <div class="row">
              <div class="col-lg-8">
                <h7>Disciplinado</h7>
                <h7>Liderazgo</h7>
                <h7>Visionario</h7>
                <h7>Habilidad numérica</h7>
                <h7>Relaciones públicas</h7>
              </div>
              <div class="col-lg-4">
                <img src="barra1.png" class="barra"> <br>
                <img src="barra1.png" class="barra"> <br>
                <img src="barra1.png" class="barra"> <br>
                <img src="barra2.png" class="barra"> <br>
                <img src="barra3.png" class="barra"> <br>
              </div>

            </div>
          </div>
          <br>
          <div class="row">
            <img src="flechas.png" class="flechas">
            <h5>Habilidades</h5>
            <hr>
            <div class="row">
              <div class="col-lg-8">
                <h7>Español</h7> <br>
                <h7>Inglés</h7> <br>
                <h7>Francés</h7> <br>
                <h7>Portugués</h7>
              </div>
              <div class="col-lg-4">
                <img src="barra2.png" class="barra"> <br>
                <img src="barra1.png" class="barra"> <br>
                <img src="barra1.png" class="barra"> <br>
                <img src="barra2.png" class="barra"> <br>
              </div>

            </div>
          </div>
          <br>
          <div class="row">
            <img src="flechas.png" class="flechas">
            <h5>Informática</h5>
            <hr>
            <div class="row">
              <div class="col-lg-8">
                <h7>Microsoft Excel</h7>
                <h7>Microsoft Word</h7>
                <h7>Software DelBol</h7>
                <h7>Contalux</h7> <br>
                <h7>Cegit</h7>
              </div>
              <div class="col-lg-4">
                <img src="barra2.png" class="barra"> <br>
                <img src="barra1.png" class="barra"> <br>
                <img src="barra3.png" class="barra"> <br>
                <img src="barra2.png" class="barra"> <br>
                <img src="barra3.png" class="barra"> <br>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <img src="flechas.png" class="flechas">
            <h5>Competencias</h5>
            <hr>
            <div class="row">
              <div>
                <img src="flechita.png" class="flechita">
                <h9> Comunicación </h9><br>
                <img src="flechita.png" class="flechita">
                <h9> Trabajo en equipo </h9><br>
              </div>
            </div>
            <br>

          </div>
        </div>

        <div class="col-lg-8">
          <div class="row">
            <div class="row">
              <img src="flechas.png" class="flechas">
              <h5>Perfil</h5>
              <hr>
              <p>Experiencia en diferentes proywctos de Impelementación y mantenimiento post Impelementación
                como así también tareas de mantenimiento correctivo y evolutivo. Proactivo, orientado a resultados
                con 4 años de experiencia en areas administro-contables, y más de 4 años de experiencia como consultor.
              </p>
            </div>
            <div class="row">
              <img src="flechas.png" class="flechas">
              <h5>Experiencia de trabajo</h5>
              <hr>
              <div class="row">
                <div class="col-lg-4">
                  <p>01/2017 - Presente</p>
                </div>
                <div class="col-lg-8">
                  Consultor SAP <br>
                  <p class="subtitulo">Bunge Cono Bur</P>

                  <p>Mantenimiento Correctivo/evolutivo Moduls FI-OO-TRM. Implementación interfase con bancos para registro de cobranzas por cuentas recaudadoras. Implementacion de recaudadores a trevés de sistemas Lapos. Lider Funcional FICOO para proyecto Upgrade.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">08/2016 - 12/2016 </div>
                <div class="col-lg-8">
                  Consultor SAP FICO Sr. <br>
                  <p class="subtitulo">Boñiec - La Plata, Buenos Aires</P>

                  <p>Como consultor BAP FICO, participe activamente en los siguientes proyectos:</p>
                  <ul>
                    <li>Banco Hipotecarlo - Upgrade de visión5.0 a 6.0</li>
                    <li>PC Arts Argentina (BANGAHO) - Implementación SAP ALL IN ONE </li>
                    <li>Laboratorios Sonfi Avents - Soporte para LATAM </li>
                    <li>Investigación y desarrollo de casos y aplicación del modulo TRM - PlazosFlos. </li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">01/2015 - 07/2016</div>
                <div class="col-lg-8">
                  Especialista SAP FI <br>
                  <p class="subtitulo">Accenture Argentina</P>

                  <p>Consultor funcional del modulo FI de nuevas socialidades FI, configuración de operaciones bancarias de extractos automaticos, configuración de nuevas estructuras bancarias en las distintas sociedades del grupo de empresas, configuración de nuevos indicadores de Impuestos, soporte funcional a usuarios del mundo FI-AR, FI-TR, FI-GL, FI-AP</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <img src="flechas.png" class="flechas">
            <h5>Educación</h5>
            <hr>
            <div class="row">
              <div class="col-lg-4">08/2009 - Presente</div>
              <div class="col-lg-8">
                Contador Público <br>
                <p class="subtitulo">Universidad de Buenos Aires (UBA) - Buenos Aires - Promedio: 3</P>

                <p>Durante mi formación me he capacitado para asesorar personas y empresas en las áreas financiera, impostiva, contable, laboral, de costos y societaria. Diseñar, interpretar e implementar sistemas de información contables, dentro de las organizaciones públicas y provadas para la toma de.</p>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
  </div>






  </div>
</body>

</html>


<?php
}

?>