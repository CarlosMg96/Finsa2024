<?php
error_reporting(E_ALL);

require_once "header.php";

echo <<<HTML
<style type="text/css">
  /* Estilos Base (PC y Mobile) */
  .portadafoto {
    width: 100%;
    position: relative;
    overflow: hidden;
    background-image: url(im/2024/portada.jpg);
    background-position: bottom left;
    background-size: cover;
  }

  .portadapeople {
    position: absolute;
    z-index: 4;
    bottom: 0;
  }

  .portadainforme {
    position: absolute;
  }

  .portadafoto-texto-principal {
    position: absolute;
    color: white;
    font-weight: 600;
  }

  /* Estilos PC - Diseño original */
  .portadafoto {
    height: 47vw;
  }

  .portadapeople {
    width: 27vw;
    left: 15vw;
  }

  .portadainforme {
    width: 20vw;
    right: 9vw;
    top: 23vw;
  }

  .portadafoto-texto-principal-siguiendo {
    left: 11vw;
    top: 2vw;
    font-size: 6vw;
  }

  .portadafoto-texto-principal-ruta {
    left: 41.8vw;
    top: 4.3vw;
    font-size: 7vw;
  }
  @media (max-width: 700px) {
    .evolucion-estrategica-imagen {
        width: 100%;
        min-height: 250px;
        background: url(im/2024/DJI_0457-HDR-Pano.png) center center / cover no-repeat;
        clip-path: polygon(0 0, 200% 0, 75% 140%, 0% 100%);
    }
}

  /* Estilos para la animación del texto */
  .evolucion-texto-wrapper {
    position: relative;
    display: inline-block;
    overflow: hidden; /* Importante para que la linea no se salga del contenedor */
  }

  .evolucion-texto {
    position: relative;
    z-index: 2; /*  Z-index del texto inferior */
    color: #1976D2; /* Todo el texto en azul */
  }

    .evolucion-texto-blanco { /* Estilo para el texto superior */
    position: absolute;
    top: 0;
    left: 0;
    z-index: 3; /* Z-index del texto superior */
    color: rgba(255, 255, 255, 0.7); /* Blanco semi-transparente */
  }

.evolucion-linea-animada {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: 10% 106%;
    background: linear-gradient(rgb(156 187 255 / 56%) 100%);
    background-size: 10% 106%;
    background-position: 70%; /* lado izquierdo */
    animation: animacionLineaReverse 2.5s linear forwards;
    z-index: 3;
    background-repeat: no-repeat;
    transform:skewX(353deg);
    filter: contrast(0.5);
    mix-blend-mode: color-dodge;
}



@keyframes animacionLineaReverse {
    0% {
      background-position: left center; /* Posición inicial: lado izquierdo */
    }
    100% {
      background-position: 50%; /* Posición final: lado derecho */
    }
  }




  .portadafoto-texto-principal-sostenibilidad {
    left: 34vw;
    top: 12.5vw;
    font-size: 8vw;
   color:#1976D2;
  }

   .portadafoto-texto-principal-sostenibilidad-blanco {
    left: 34vw;
    top: 12.5vw;
    font-size: 8vw;
   color: rgba(255, 255, 255, 0.7);
   position:absolute;
  }
  /* NUEVOS ESTILOS PARA LA LINEA */
  .portada-linea {
    width:rgb(255, 255, 255)
    height: 1px;
    background-color: white;
    position: absolute;
    right: 0px;
    top: 21.8vw; /* Valor por defecto para PC */
  }

  /* NUEVA CLASE PARA LOS NUMEROS CON ESTILO */
  .numero-con-estilo {
    font: 800 80px Arial;
    -webkit-text-fill-color: transparent;
    -webkit-text-stroke: 1px;
  }

  /* Estilos Mobile - Sobreescriben SOLO lo necesario */
  @media (max-width: 700px) {
    .portadafoto {
      height: 112vw;
      background-position: center;
    }

    .portadacurved,
    .portadacurve {
      display: none;
    }
    

    .portadapeople {
      width: 55vw;
      left: 5vw;
    }

    .portadainforme {
      width: 55vw;
      top: auto;
      bottom: 10px;
      right: auto;
      left: 50%;
      transform: translateX(-50%);
    }

    .portadafoto-texto-principal {
      text-align: center;
      width: 100%;
    font-size: 8vw;
    color: #1976D2 !important;
    }

    .portadafoto-texto-principal-siguiendo {
      left: 0;
      top: 2vw;
      font-size: 8vw;
    }

    .portadafoto-texto-principal-ruta {
      left: 0;
      top: 15vw;
      font-size: 7vw;
    }

    .portadafoto-texto-principal-sostenibilidad {
      left: 0;
      top: 25vw;
      font-size: 10vw;
    }

    /* Ajuste de la línea en mobile */
    .portada-linea {
      top: 40.8vw; /* Valor para mobile */
    }
  }

  /* Estilos para la sección "EVOLUCIÓN ESTRATÉGICA" */
  .evolucion-estrategica {
    width: 100vw;
    border-top: 1px solid #E9F2F9;
    border-bottom: 1px solid #E9F2F9;
    background-color: #F2F4F6;
  }

  .evolucion-estrategica-container {
    display: flex;
    width: 100%;
    min-height: 400px;
  }

  .evolucion-estrategica-imagen {
    width: 50vw;
    background: url('im/2024/estrategia.png') center center/cover no-repeat;
    clip-path: polygon(0 0, 90% 0, 75% 140%, 0% 100%);
    min-height: 600px;
    max-width: 550px;
  }

  .evolucion-estrategica-texto {
    width: 50vw;
    background: #F2F4F6;
    display: flex;
    align-items: center;
    padding-bottom: 10px;
  }

  .evolucion-estrategica-texto-contenido {
    width: 80%;
    margin: auto;
  }

  .evolucion-estrategica-texto-contenido h2 {
    color: #1976D2;
    font-size: 2.7em;
  }

  .evolucion-estrategica-texto-contenido p {
    font-size: 1.2em;
    font-line-height: 1.6;
    color: #1A2B49;
    margin-bottom: 20px;
  }

  .bold-text {
    font-weight: bold;
    color: #1A2B49;
    font-size: 1.4em;
  }

  /* Estilos para la sección "Carta del Presidente" */
  .carta-presidente {
    position: relative;
    width: 100vw;
    min-height: 600px;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #fff;
    background-color: #fff;
  }

  .carta-presidente-container {
    display: flex;
    width: 100%;
  }

  .carta-presidente-texto {
    width: 50%;
  }

  .carta-presidente-texto-contenido {
    width: 80%;
    margin: 90px auto 20px auto;
  }

  .carta-presidente-texto-contenido h3 {
    color: #1A2B49;
    font-size: 1.6em;
    margin-bottom: 5px;
  }

  .carta-presidente-texto-contenido h2 {
    color: #1976D2;
    font-weight: 700;
    font-size: 2.5em;
    margin-top: 0;
  }

  .carta-presidente-texto-contenido p {
    font-size: 1.2em;
    line-height: 1.6;
    color: #1A2B49;
    margin-bottom: 20px;
  }

  .carta-presidente-texto-contenido b {
    font-size: 1.2em;
    line-height: 1.6;
    font-weight: bold;
    margin-bottom: 20px;
    margin-top: 24px;
  }

  .carta-presidente-texto-contenido a {
    color: #00AEEF;
    font-weight: bold;
    text-decoration: none;
    font-size: 1.2em;
  }

  .carta-presidente-imagen {
    width: 40%;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 400px;
    text-align: center;
  }

  .carta-presidente-imagen img {
    width: 70%;
    border-radius: 10px;
    max-height: 300px;
    object-fit: cover;
  }

  /* Estilos para la sección "CONTENIDO" */
  .contenido-seccion {
    background-color: #001F4C;
    padding: 50px 30%;
    color: #fff;
    font-family: 'Arial', sans-serif;
  }

  .contenido-titulo {
    font-size: 2.5em;
    font-weight: 800;
    margin-bottom: 50px;
    text-transform: uppercase;
    color: white;
  }

  .contenido-lista {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .contenido-item {
    margin-bottom: 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .contenido-item-izquierda {
    display: flex;
    align-items: center;
    gap: 15px;
  }

  .contenido-item-izquierda img {
    width: 25px;
  }

  .contenido-item-izquierda span {
    font-weight: bold;
    font-size: 1em;
  }

  .contenido-item-derecha {
    text-align: right;
  }

  .contenido-item-derecha a {
    color: #fff;
    text-decoration: none;
    font-size: 0.7em;
    display: flex;
    align-items: center;
  }

  .contenido-item-derecha img {
    width: 32px;
    margin-right: 10px;
  }

  /* Estilos para la sección "FINSA EN NÚMEROS" */
  #mainnumbers {
    width: 100vw;
    background-image: url(im/2024/Cifras.png);
    background-size: cover;
    border-top: 1px solid white;
    border-bottom: 1px solid white;
  }

  #mainnumbers .fen {
    width: 14vw;
  }

  #mainnumbers .numT {
    color: white;
    border-collapse: collapse;
  }

  #mainnumbers .bignum {
    font-size: 5vw;
  }

  #mainnumbers .smalltext {
    font-size: 0.9vw;
    text-transform: uppercase;
  }

  /* Estilos para la sección "HIGHLIGHTS" */
  .highlights-section {
    width: 100vw;
    background-color: #fff;
    font-family: sans-serif;
    color: #1A2B49;
    position: relative;
  }

  .highlights-container {
    display: flex;
    width: 100vw;
    align-items: center;
  }

  .highlights-imagen {
    width: 30vw;
    background: url('im/2024/FINSA_Parque_Industrial_by_Mino_Mora_0748.png') center center/cover no-repeat;
    height: 600px;
    clip-path: polygon(0 0, 90% 0, 75% 100%, 0% 100%);
  }

  .highlights-texto {
    width: 50vw;
    padding: 2vw;
  }

  /* Estilos para la sección "FINSA EN NÚMEROS" (ajustes en mobile) */
  @media (max-width: 700px) {
    #mainnumbers {
      min-height: 110vw;
    }

    #mainnumbers .numbers1 {
      width: 49%;
    }

    #mainnumbers .numT td {
      font-size: 1em
    }

    #mainnumbers .bn {
      font-size: 3em
    }

    .fen {
      width: 34vw
    }
  }

  /* Estilos para la sección "EVOLUCIÓN ESTRATÉGICA" (ajustes en mobile) */
  @media (max-width: 700px) {
    .evolucion-estrategica-container {
      flex-direction: column;
      align-items: center;
      min-height: auto;
      /* Para permitir que se ajuste al contenido */
    }

    .evolucion-estrategica-imagen {
      width: 100%;
      max-width: 500px;
      min-height: 200px;
      clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
    }

    .evolucion-estrategica-texto {
      width: 100%;
      max-width: 500px;
      /* Limita el ancho máximo del texto */
    }

    .evolucion-estrategica-texto-contenido {
      width: 90%;
      /* Ajusta el ancho del contenido para mayor comodidad */
      margin: 20px auto;
      /* Centra y añade espacio vertical */
    }
  }

  /* Estilos para la sección "CARTA DEL PRESIDENTE" (ajustes en mobile) */
  @media (max-width: 700px) {
    .carta-presidente-container {
      flex-direction: column;
      align-items: center;
      /* Centra los elementos */
    }

    .carta-presidente-texto {
      width: 100%;
      order: 2;
      /* El texto va después de la imagen */
    }

    .carta-presidente-texto-contenido {
      width: 90%;
      /* Ancho del texto */
      margin: 20px auto;
      /* Espacio vertical y centrado */
    }

    .carta-presidente-imagen {
      width: 100%;
      order: 1;
      /* La imagen va primero */
      min-height: auto;
      /* Altura automática */
    }

    .carta-presidente-imagen img {
      max-width: 90%;
      /* Ancho máximo de la imagen */
      height: auto;
      /* Altura proporcional */
    }
  }

  /* Estilos para la sección "CONTENIDO" (ajustes en mobile) */
  @media (max-width: 700px) {
    .contenido-seccion {
      padding: 30px 10%;
      /* Menos padding horizontal */
    }

    .contenido-titulo {
      font-size: 2em;
      /* Reduce el tamaño del título */
      margin-bottom: 30px;
      /* Menos espacio debajo del título */
    }

    .contenido-item {
      margin-bottom: 20px;
      /* Reduce el espacio entre elementos */
      flex-direction: column;
      /* Apila los elementos */
      align-items: flex-start;
      /* Alinea a la izquierda */
    }

    .contenido-item-izquierda {
      margin-bottom: 10px;
      /* Espacio entre el icono/texto y el enlace */
    }

    .contenido-item-derecha {
      text-align: left;
      /* Alinea el enlace a la izquierda */
    }
  }

  /* Estilos para la sección "HIGHLIGHTS" (ajustes en mobile) */
  @media (max-width: 700px) {
    .highlights-container {
      flex-direction: column;
      align-items: center;
    }

    .highlights-imagen {
      width: 100%;
      height: auto;
      clip-path: none;
      /* Remueve el clip-path en móvil */
      max-width: 500px;
      /* Limita el ancho */
    }

    .highlights-texto {
      width: 100%;
      padding: 20px;
      max-width: 500px;
    }
  }
</style>

<div style="width:100vw; height:60px; ">
</div>

<div class="portadafoto">
  <img src="im/00/portada-people.png" class="portadapeople" data-aos="fade-right" />
  <!-- LINEA HORIZONTAL AQUI -->
  <div class="portada-linea"></div>
  <div class="portadafoto-texto-principal portadafoto-texto-principal-ruta" style="z-index:1; font-size:8vw; font-weight:600; font-family:inherit; color:#4fa7ff;" data-aos="fade-right">
    <span class="evolucion-texto-wrapper">
      <span class="evolucion-texto">EVOLUCIÓN</span>
    </span>
  </div>
  <div class="evolucion-texto portadafoto-texto-principal portadafoto-texto-principal-sostenibilidad" data-aos="fade-up" style="z-index:1; font-size:8vw; font-weight:600; font-family:inherit; color:#4fa7ff;">
    ESTRATÉGICA
  </div>
        <span class="evolucion-linea-animada"></span>


</div>

<style type="text/css">
  .diagtxt {
    padding-left: 14px;
    width: 80%;
    padding-left: 14px;
  }
</style>

<div class="evolucion-estrategica">
  <div class="evolucion-estrategica-container">
    <div class="evolucion-estrategica-imagen"></div>
    <div class="evolucion-estrategica-texto" data-aos="fade-right">
      <div class="evolucion-estrategica-texto-contenido">
        <h2 style="color:#1976D2; font-weight:900;">EVOLUCIÓN ESTRATÉGICA</h2>
        <p>
          2024 fue un año que reafirmó nuestra capacidad para convertir
          desafíos en oportunidades, impulsando una evolución estratégica que
          nos fortalece y nos prepara para un futuro prometedor.
        </p>
        <p>
          Gracias al liderazgo, el talento y el compromiso de nuestra gente,
          demostramos que en FINSA el éxito va más allá de los resultados, está
          en nuestra contribución al desarrollo de México, en la preservación del
          planeta y en el bienestar nuestras comunidades
        </p>
        <b class="bold-text">
          Este año de evolución marcó un paso firme hacia el
          crecimiento sostenido, guiados con visión,
          responsabilidad y determinación.
        </b>
        <div style="height:3px; background-color:#1A2B49; margin-top: 20px;"></div>
      </div>
    </div>
  </div>
</div>

<div class="carta-presidente">
    <div class="carta-presidente-container">
        <div class="carta-presidente-texto">
            <div class="carta-presidente-texto-contenido" data-aos="fade-right">
                <h3 >Carta del presidente y</h3>
                <h2 >DIRECTOR GENERAL</h2>
                <b >
                    Estamos convencidos de la importancia de integrar
                    los principios ASG (Ambientales, Sociales y de
                    Gobernanza) en todas nuestras operaciones.
                </b>
                <p>
                    Por ello, seguimos fortaleciendo los pilares de nuestro modelo de
                    sostenibilidad empresarial: Talento y Cultura Corporativa, Medio
                    Ambiente, Ética y Legalidad, y Comunidad. Nuestra visión se enfoca en
                    la gestión de riesgos, la innovación, el compromiso con la cadena de
                    valor, la responsabilidad y resiliencia, así como el sentido sostenible
                    del negocio.
                </p>
                <a href="carta-del-presidente" >
                  Seguir leyendo
                </a>
            </div>
        </div>
        <div class="carta-presidente-imagen">
            <img src="im/2024/casa_aguascalientes.png" data-aos="fade-down">
        </div>
    </div>
</div>

<div class="contenido-seccion">
  <h2 class="contenido-titulo" data-aos="fade-right">
    CONTENIDO
  </h2>

  <ul class="contenido-lista">
    <li class="contenido-item">
      <div class="contenido-item-izquierda" data-aos="fade-right">
        <img src="im/arr-right-blue.svg" alt="Flecha" style="width: 42px;">
        <div>
          <img src="im/whitediag.svg" alt="" style=" max-height: 40px;">
        </div>
        <span>Carta del Presidente y Director General</span>
      </div>
      <div class="contenido-item-derecha" data-aos="fade-left">
        <a href="#">
          <img src="im/arr-dwn.svg" alt="Descargar">
          DESCARGA CARTA
        </a>
      </div>
    </li>

    <li class="contenido-item">
      <div class="contenido-item-izquierda" data-aos="fade-right">
        <span class="numero-con-estilo"
          style="color: #00AEEF; width: 60px;#00AEEF; width: 60px; font-size:4em;">01</span>
        <div>
          <img src="im/whitediag.svg" alt="" style=" max-height: 40px;">
        </div>
        <div>
          <p style="margin: 0; font-size: 0.9em; color: #A0C4FF;">EVOLUCIÓN QUE REAFIRMA NUESTRO LIDERAZGO</p>
          <p style="margin: 5px 0 0; font-weight: bold;">Sobre FINSA</p>
        </div>
      </div>
      <div class="contenido-item-derecha" data-aos="fade-left">
        <a href="#">
          <img src="im/arr-dwn.svg" alt="Descargar">
          DESCARGA CAPÍTULO
        </a>
      </div>
    </li>

    <li class="contenido-item">
      <div class="contenido-item-izquierda" data-aos="fade-right">
        <span class="numero-con-estilo"
          style="color: #00E6B8; width: 60px;#00AEEF; width: 60px; font-size:4em;">02</span>
        <div>
          <img src="im/whitediag.svg" alt="" style=" max-height: 40px;">
        </div>
        <div>
          <p style="margin: 0; font-size: 0.9em; color: #7CF2D0;">EVOLUCIÓN QUE SUMA A LA SOSTENIBILIDAD</p>
          <p style="margin: 5px 0 0; font-weight: bold;">Medio ambiente</p>
        </div>
      </div>
      <div class="contenido-item-derecha" data-aos="fade-left">
        <a href="#">
          <img src="im/arr-dwn.svg" alt="Descargar">
          DESCARGA CAPÍTULO
        </a>
      </div>
    </li>

    <li class="contenido-item">
      <div class="contenido-item-izquierda" data-aos="fade-right">
        <span class="numero-con-estilo"
          style="color:#1979d2; width: 60px; width: 60px; font-size:4em;">03</span>
        <div>
          <img src="im/whitediag.svg" alt="" style=" max-height: 40px;">
        </div>
        <div>
          <p style="margin: 0; font-size: 0.9em; color:#1979d2;">EVOLUCIÓN QUE NOS PERMITE HACER MÁS</p>
          <p style="margin: 5px 0 0; font-weight: bold;">Talento, cultura corporativa y comunidad</p>
        </div>
      </div>
      <div class="contenido-item-derecha" data-aos="fade-left">
        <a href="#">
          <img src="im/arr-dwn.svg" alt="Descargar">
          DESCARGA CAPÍTULO
        </a>
      </div>
    </li>

    <li class="contenido-item">
      <div class="contenido-item-izquierda" data-aos="fade-right">
        <span class="numero-con-estilo"
          style="color: #FF9800; width: 60px;#00AEEF; width: 60px; font-size:4em;">04</span>
        <div>
          <img src="im/whitediag.svg" alt="" style=" max-height: 40px;">
        </div>
        <div>
          <p style="margin: 0; font-size: 0.9em; color: #FFCA80;">EVOLUCIÓN QUE NOS GUÍA CON INTEGRIDAD</p>
          <p style="margin: 5px 0 0; font-weight: bold;">Gobernanza</p>
        </div>
      </div>
      <div class="contenido-item-derecha" data-aos="fade-left">
        <a href="#">
          <img src="im/arr-dwn.svg" alt="Descargar">
          DESCARGA CAPÍTULO
        </a>
      </div>
    </li>
  </ul>
</div>

<style type="text/css">
  /* Estilos para la sección de números (PC) */
  .numbers1 {
    width: 24%;
    display: block;
    /* Asegura que los elementos sean bloques */
  }

  .numT {
    color: white;
    border-collapse: collapse;
  }

  .bignum {
    font-size: 15vw;
  }

  .smalltext {
    font-size: 1.2vw;
    text-transform: uppercase;
  }

  #mainnumbers {
    min-height: 50vw;
    display: flex;
    /* Usa flexbox */
    flex-direction: column;
    /* Apila los elementos verticalmente */
    justify-content: center;
    /* Centra verticalmente */
  }

  .fen {
    width: 14vw;
  }

  /* Estilos para la sección de números (Móvil) */
  @media (max-width: 700px) {
    .numbers1 {
      width: 49%;
      display: inline-block;
      /* Para que estén en la misma línea */
      vertical-align: top;
      /* Alinea en la parte superior */
    }

    #mainnumbers {
      min-height: 110vw;
    }

    .numT td {
      font-size: 1em
    }

    .bn {
      font-size: 3em
    }

    .fen {
      width: 34vw
    }
  }
</style>

<div id="mainnumbers"
  style="width:100vw; background-image: url(im/2024/Cifras.png); background-size: cover;border-top:1px solid white;border-bottom:1px solid white;">

  <div style="width:80%; margin:5vw auto;">
    <img src="im/00/finsa-en-numeros.svg" class="fen" data-aos="fade-down" />

    <div class="flex1 w65" style="margin-top:5vw;">

      <div class="numbers1" data-aos="fade-down" data-aos-duration="400">
        <table class="numT">
          <tr>
            <td rowspan=2>
              <img src="im/whitediag.svg" style="height:100%">
            </td>
            <td class="bignum special-number"><span class="counter bn">+70</span></td>
          </tr>
          <tr>
            <td class="smalltext">
              ubicaciones <br>en México
            </td>
          </tr>
        </table>
      </div>

      <div class="numbers1" data-aos="fade-down" data-aos-duration="800">
        <table class="numT">
          <tr>
            <td rowspan=2>
              <img src="im/whitediag.svg" style="height:100%">
            </td>
            <td class="bignum special-number"><span class="counter bn">3.4</span></td>
          </tr>
          <tr>
            <td class="smalltext">
              Millones de M<span style="font-size: 12px;"><sup>2</sup></span> Administrados<br> y arrendados
            </td>
          </tr>
        </table>
      </div>

      <div class="numbers1" data-aos="fade-down" data-aos-duration="1200">
        <table class="numT">
          <tr>
            <td rowspan=2>
              <img src="im/whitediag.svg" style="height:100%">
            </td>
            <td class="bignum special-number"><span class="counter bn">14</span></td>
          </tr>
          <tr>
            <td class="smalltext">
              Millones de M<span style="font-size: 12px;"><sup>2</sup></span><br>desarrollados
            </td>
          </tr>
        </table>
      </div>

    </div>
    <!-- 67 -->

    <div class="flex1 w40" style=" margin-top:5vw;">

      <div class="numbers1" data-aos="fade-down" data-aos-duration="400">
        <table class="numT">
          <tr>
            <td rowspan=2>
              <img src="im/whitediag.svg" style="height:100%">
            </td>
            <td class="bignum special-number"><span class="counter bn">32</span></td>
          </tr>
          <tr>
            <td class="smalltext">
              parques <br> industriales <br> en operación
            </td>
          </tr>
        </table>
      </div>

      <div class="numbers1" data-aos="fade-down" data-aos-duration="800">
        <table class="numT">
          <tr>
            <td rowspan=2>
              <img src="im/whitediag.svg" style="height:100%">
            </td>
            <td class="bignum special-number"><span class="counter bn">300</span><span
                style="font-size:3vw">MILL</span></td>
          </tr>
          <tr>
            <td class="smalltext">
              empleos generados
            </td>
          </tr>
        </table>
      </div>

    </div>
    <!-- 40 -->

  </div>
  <!-- 80 -->
</div>


<style type="text/css">
  /* Estilos para PC */
  .cont {
    width: 24%;
    position: relative;
  }

  .special-number {
    font: 800 80px Arial;
    -webkit-text-fill-color: transparent;
    -webkit-text-stroke: 1px;
    font-size: 6vw;
    /* Make the numbers larger */
      }

  .ilinks {
    position: relative;
    width: 100%;
    cursor: pointer;
  }

  /* Estilos para móvil */
  @media (max-width: 700px) {
    .cont {
      width: 44%;
      margin-bottom: 1em
    }
  }
</style>
<div class="highlights-section">
  <div class="highlights-container">
    <div class="highlights-imagen"></div>
    <div class="highlights-texto" data-aos="fade-right">
      <h2 style="font-size: 3em; font-weight: bold; margin-bottom: 0.5em; color: #000;" data-aos="fade-right">HIGHLIGHTS</h2>
      <p style="font-size: 1.2em; margin-bottom: 2em; font-family:fantasy" data-aos="fade-right">2024</p>

      <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
<div style="width: 45%; margin-bottom: 2em; text-align: left; position: relative;" data-aos="fade-right">
          <span class="numero-con-estilo" style="font-size:7em; font-weight: lighter; color: #1976D2; display: block; line-height: 0.8;">10</span>
          <span style="font-size: 1em; display: block; color: #1976D2;  font-family:fantasy">Estados de<br>la República</span>
          <div style="position: absolute; top: 0; right: 0; height: 100%; border-right: 1px solid #1976D2; transform: rotate(3deg);"></div>
        </div>

        <div style="width: 45%; margin-bottom: 2em; text-align: left; position: relative;" data-aos="fade-right">
          <span class="numero-con-estilo" style="font-size: 7em; font-weight: lighter; color: #1976D2; display: block; line-height: 0.8;">4</span>
          <span style="font-size: 1em; display: block; color: #1976D2;  font-family:fantasy">Parques Proveedores<br>de la industria<br>automotriz</span>
          <div style="position: absolute; top: 0; right: 0; height: 100%; border-right: 1px solid #1976D2; transform: rotate(3deg);"></div>
        </div>
      </div>

      <div style="display: flex;flex-wrap: wrap;justify-content: space-between;position: relative;align-items: flex-end;">
        <div style="width: 30%; margin-bottom: 2em; text-align: left; position: relative;" data-aos="fade-right">
          <span style="font-size: 0.8em; color: #1976D2;  font-family:fantasy">Cierre de la segunda<br>etapa del fondo de<br>inversión FINSA V</span>
          <div style="position: absolute; top: 0; right: 0; height: 100%; border-right: 1px solid #1976D2; transform: rotate(3deg);"></div>
        </div>

        <div style="width: 30%; margin-bottom: 2em; text-align: left; position: relative;" data-aos="fade-right">
          <span style="font-size: 0.8em; color: #1976D2;  font-family:fantasy">Formamos parte por<br>segundo año de las<br>500 empresas más importantes<br>de México, de la revista expansión</span>
          <div style="position: absolute; top: 0; right: 0; height: 100%; border-right: 1px solid #1976D2; transform: rotate(3deg);"></div>
        </div>

        <div style="width: 30%; margin-bottom: 2em; text-align: left; position: relative;" data-aos="fade-right">
          <span style="font-size: 0.8em; color: #1976D2;  font-family:fantasy">Iniciamos el proyecto de<br>transformación digital:<br>Innovación estratégica<br>Sostenible (IES)</span>
          <div style="position: absolute; top: 0; right: 0; height: 100%; border-right: 1px solid #1976D2; transform: rotate(3deg);"></div>
        </div>
      </div>
    </div>
  </div>
</div>

HTML;

//$ocultar = 1;
$prev1 = "gobernanza";
$next1 = "nuestra-empresa";

require_once "footer.php";
