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
    background-image: url(im/00/portada-foto.jpg);
    background-position: bottom left;
    background-size: cover;
  }

  .portadacurved {
    position: absolute;
    bottom: 0;
    right: 0;
  }

  .portadacurve {
    position: absolute;
    bottom: 0;
  }

  .portadapeople {
    position: absolute;
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

  .portadacurved {
    height: 49vw;
    width: 47vw;
  }

  .portadacurve {
    height: 49vw;
    width: 26vw;
    right: 30.4vw;
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
    left: 22.8vw;
    top: 7.3vw;
    font-size: 4.9vw;
  }

  .portadafoto-texto-principal-sostenibilidad {
    left: 21vw;
    top: 10.5vw;
    font-size: 8vw;
  }


  /* Estilos Mobile - Sobreescriben SOLO lo necesario */
  @media (max-width: 700px) {
    .portadafoto {
      height: 112vw;
      background-position: center;
    }

    .portadacurved, .portadacurve {
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
  }

  /* Estilos para la sección "EVOLUCIÓN ESTRATÉGICA" */
  .evolucion-estrategica {
      width: 100vw;
      border-top: 1px solid #E9F2F9;
      border-bottom: 1px solid #E9F2F9;
      background-color: #e8f9ff;
  }

  .evolucion-estrategica-container {
      display: flex;
      width: 100%;
      min-height: 400px;
  }

  .evolucion-estrategica-imagen {
      width: 50vw;
      background: url('https://placehold.co/600x400') center center/cover no-repeat;
      clip-path: polygon(0 0, 90% 0, 75% 100%, 0% 100%);
      min-height: 400px;
  }

  .evolucion-estrategica-texto {
      width: 50vw;
      background: #e8f9ff;
      display: flex;
      align-items: center;
      padding-bottom: 10px;
  }

  .evolucion-estrategica-texto-contenido {
      width: 80%;
      margin: auto;
  }

  /* Estilos para la sección "Carta del Presidente" */
  .carta-presidente {
      position: relative;
      width: 100vw;
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
      margin: 80px auto 20px auto;
  }

  .carta-presidente-imagen {
      width: 50%;
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
      width: 18px;
      margin-right: 5px;
  }

  /* Estilos para la sección "FINSA EN NÚMEROS" */
  #mainnumbers {
    width: 100vw;
    background-image: url(im/00/fondo-numbers.jpg);
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
      background-color: #e8f9ff;
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
      width: 50vw;
      background: url('https://placehold.co/600x400') center center/cover no-repeat;
      height: 500px;
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

    #mainnumbers .fen {
      width: 34vw
    }
  }

  /* Estilos para la sección "EVOLUCIÓN ESTRATÉGICA" (ajustes en mobile) */
  @media (max-width: 700px) {
      .evolucion-estrategica-container {
          flex-direction: column;
          align-items: center;
          min-height: auto; /* Para permitir que se ajuste al contenido */
      }

      .evolucion-estrategica-imagen {
          width: 100%;
          max-width: 500px; /* Limita el ancho máximo de la imagen */
          min-height: 200px; /* Reduce la altura */
          clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
      }

      .evolucion-estrategica-texto {
          width: 100%;
          max-width: 500px; /* Limita el ancho máximo del texto */
      }

      .evolucion-estrategica-texto-contenido {
          width: 90%; /* Ajusta el ancho del contenido para mayor comodidad */
          margin: 20px auto; /* Centra y añade espacio vertical */
      }
  }

  /* Estilos para la sección "CARTA DEL PRESIDENTE" (ajustes en mobile) */
  @media (max-width: 700px) {
      .carta-presidente-container {
          flex-direction: column;
          align-items: center; /* Centra los elementos */
      }

      .carta-presidente-texto {
          width: 100%;
          order: 2; /* El texto va después de la imagen */
      }

      .carta-presidente-texto-contenido {
          width: 90%; /* Ancho del texto */
          margin: 20px auto; /* Espacio vertical y centrado */
      }

      .carta-presidente-imagen {
          width: 100%;
          order: 1; /* La imagen va primero */
          min-height: auto; /* Altura automática */
      }

      .carta-presidente-imagen img {
          max-width: 90%; /* Ancho máximo de la imagen */
          height: auto; /* Altura proporcional */
      }
  }

  /* Estilos para la sección "CONTENIDO" (ajustes en mobile) */
  @media (max-width: 700px) {
      .contenido-seccion {
          padding: 30px 10%; /* Menos padding horizontal */
      }

      .contenido-titulo {
          font-size: 2em; /* Reduce el tamaño del título */
          margin-bottom: 30px; /* Menos espacio debajo del título */
      }

      .contenido-item {
          margin-bottom: 20px; /* Reduce el espacio entre elementos */
          flex-direction: column; /* Apila los elementos */
          align-items: flex-start; /* Alinea a la izquierda */
      }

      .contenido-item-izquierda {
          margin-bottom: 10px; /* Espacio entre el icono/texto y el enlace */
      }

      .contenido-item-derecha {
          text-align: left; /* Alinea el enlace a la izquierda */
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
      clip-path: none; /* Remueve el clip-path en móvil */
      max-width: 500px; /* Limita el ancho */
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
  <img src="im/00/portada-curved.png" class="portadacurved" data-aos="fade-left" />
  <img src="im/00/portada-curve.png" class="portadacurve" data-aos="fade-left" />
  <img src="im/00/portada-people.png" class="portadapeople" data-aos="fade-right" />
  <img src="im/00/portada-informe.png" class="portadainforme" />
  <div style="width:78.5%; height:1px; background-color:white; position: absolute; right:0px; top:20.8vw;"></div>

  <div class="portadafoto-texto-principal portadafoto-texto-principal-siguiendo" data-aos="fade-down">
    Siguiendo
  </div>
  <div class="portadafoto-texto-principal portadafoto-texto-principal-ruta" data-aos="fade-right">
    la ruta de la
  </div>
  <div class="portadafoto-texto-principal portadafoto-texto-principal-sostenibilidad" data-aos="fade-up">
    sostenibilidad
  </div>
</div>

<style type="text/css">
  .diagtxt { padding-left:14px; width:80%; padding-left:14px;}
</style>

<div class="evolucion-estrategica" data-aos="fade-right">
    <div class="evolucion-estrategica-container">
        <div class="evolucion-estrategica-imagen"></div>
        <div class="evolucion-estrategica-texto">
            <div class="evolucion-estrategica-texto-contenido">
                <h2 style="color:#1976D2; font-weight:700;">EVOLUCIÓN ESTRATÉGICA</h2>
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
                <b style="color:#1A2B49;">
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
                <h3 style="color: #1A2B49; font-size: 1.2em; margin-bottom: 5px;">Carta del presidente y</h3>
                <h2 style="color:#1976D2; font-weight:700; font-size: 2em; margin-top: 0;">DIRECTOR GENERAL</h2>
                <b style="color:#1A2B49; font-size: 1.1em; line-height: 1.4;">
                    Estamos convencidos de la importancia de integrar
                    los principios ASG (Ambientales, Sociales y de
                    Gobernanza) en todas nuestras operaciones.
                </b>
                <p style="margin-top: 15px; color: #333; line-height: 1.6; font-size: 1em;">
                    Por ello, seguimos fortaleciendo los pilares de nuestro modelo de
                    sostenibilidad empresarial: Talento y Cultura Corporativa, Medio
                    Ambiente, Ética y Legalidad, y Comunidad. Nuestra visión se enfoca en
                    la gestión de riesgos, la innovación, el compromiso con la cadena de
                    valor, la responsabilidad y resiliencia, así como el sentido sostenible
                    del negocio.
                </p>
                <a href="seguir-leyendo" style="display: inline-block; margin-top: 20px; color: #1976D2;">
                    Seguir leyendo
                </a>
            </div>
        </div>
        <div class="carta-presidente-imagen">
            <img src="https://placehold.co/600x400" data-aos="fade-down">
        </div>
    </div>
</div>

<div class="contenido-seccion" data-aos="fade-right">
    <h2 class="contenido-titulo">
        CONTENIDO
    </h2>

    <ul class="contenido-lista">
        <li class="contenido-item">
            <div class="contenido-item-izquierda">
                <img src="URL_DE_LA_IMAGEN_FLECHA" alt="Flecha">
                <span>Carta del Presidente y Director General</span>
            </div>
            <div class="contenido-item-derecha">
                <a href="#">
                    <img src="URL_DE_LA_IMAGEN_DESCARGA" alt="Descargar">
                    DESCARGA CARTA
                </a>
            </div>
        </li>

        <li class="contenido-item">
            <div class="contenido-item-izquierda">
                <span style="font-size: 2.5em; font-weight: bold; color: #00AEEF; width: 60px;">01</span>
                <div>
                    <p style="margin: 0; font-size: 0.9em; color: #A0C4FF;">EVOLUCIÓN QUE REAFIRMA NUESTRO LIDERAZGO</p>
                    <p style="margin: 5px 0 0; font-weight: bold;">Sobre FINSA</p>
                </div>
            </div>
            <div class="contenido-item-derecha">
                <a href="#">
                    <img src="URL_DE_LA_IMAGEN_DESCARGA" alt="Descargar">
                    DESCARGA CAPÍTULO
                </a>
            </div>
        </li>

        <li class="contenido-item">
            <div class="contenido-item-izquierda">
                <span style="font-size: 2.5em; font-weight: bold; color: #00E6B8; width: 60px;">02</span>
                <div>
                    <p style="margin: 0; font-size: 0.9em; color: #7CF2D0;">EVOLUCIÓN QUE SUMA A LA SOSTENIBILIDAD</p>
                    <p style="margin: 5px 0 0; font-weight: bold;">Medio ambiente</p>
                </div>
            </div>
            <div class="contenido-item-derecha">
                <a href="#">
                    <img src="URL_DE_LA_IMAGEN_DESCARGA" alt="Descargar">
                    DESCARGA CAPÍTULO
                </a>
            </div>
        </li>

        <li class="contenido-item">
            <div class="contenido-item-izquierda">
                <span style="font-size: 2.5em; font-weight: bold; color: #1976D2; width: 60px;">03</span>
                <div>
                    <p style="margin: 0; font-size: 0.9em; color: #89C4F4;">EVOLUCIÓN QUE NOS PERMITE HACER MÁS</p>
                    <p style="margin: 5px 0 0; font-weight: bold;">Talento, cultura corporativa y comunidad</p>
                </div>
            </div>
            <div class="contenido-item-derecha">
                <a href="#">
                    <img src="URL_DE_LA_IMAGEN_DESCARGA" alt="Descargar">
                    DESCARGA CAPÍTULO
                </a>
            </div>
        </li>

        <li class="contenido-item">
            <div class="contenido-item-izquierda">
                <span style="font-size: 2.5em; font-weight: bold; color: #FF9800; width: 60px;">04</span>
                <div>
                    <p style="margin: 0; font-size: 0.9em; color: #FFCA80;">EVOLUCIÓN QUE NOS GUÍA CON INTEGRIDAD</p>
                    <p style="margin: 5px 0 0; font-weight: bold;">Gobernanza</p>
                </div>
            </div>
            <div class="contenido-item-derecha">
                <a href="#">
                    <img src="URL_DE_LA_IMAGEN_DESCARGA" alt="Descargar">
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
  }

  .numT {
    color: white;
    border-collapse: collapse;
  }

  .bignum {
    font-size: 5vw;
  }

  .smalltext {
    font-size: 0.9vw;
    text-transform: uppercase;
  }

  #mainnumbers {
    min-height: 50vw;
  }

  .fen {
    width: 14vw;
  }

  /* Estilos para la sección de números (Móvil) */
  @media (max-width: 700px) {
    .numbers1 {
      width: 49%;
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

<div id="mainnumbers" style="width:100vw; background-image: url(im/00/fondo-numbers.jpg); background-size: cover;border-top:1px solid white;border-bottom:1px solid white;" >

  <div style="width:80%; margin:5vw auto;">
    <img src="im/00/finsa-en-numeros.svg" class="fen" data-aos="fade-down" />

    <div class="flex1 w65" style="margin-top:5vw;">

      <div class="numbers1" data-aos="fade-down" data-aos-duration="400">
        <table class="numT">
          <tr>
          <td rowspan=2>
            <img src="im/whitediag.svg" style="height:100%">
          </td>
          <td class="bignum">+ <span class="counter bn">70</span></td>
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
          <td class="bignum"><span class="counter bn">46</span></td>
          </tr>
          <tr>
            <td class="smalltext">
              años de<br>experiencia
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
          <td class="bignum"><span class="counter bn">21</span></td>
          </tr>
          <tr>
            <td class="smalltext">
              Parques<br>industriales
            </td>
          </tr>
        </table>
      </div>

      <div class="numbers1" data-aos="fade-down" data-aos-duration="1600">
        <table class="numT">
          <tr>
          <td rowspan=2>
            <img src="im/whitediag.svg" style="height:100%">
          </td>
          <td class="bignum"><span class="counter bn">99</span>%</td>
          </tr>
          <tr>
            <td class="smalltext">
              DE OCUPACIÓN
            </td>
          </tr>
        </table>
      </div>

    </div><!-- 67 -->

     <div class="flex1 w40" style=" margin-top:5vw;">

      <div class="numbers1" data-aos="fade-down" data-aos-duration="400">
        <table class="numT">
          <tr>
          <td rowspan=2>
            <img src="im/whitediag.svg" style="height:100%">
          </td>
          <td class="bignum"><span class="counter bn">3.2</span><span style="font-size:3vw">MILL</span></td>
          </tr>
          <tr>
            <td class="smalltext">
              m<sup>2</sup> administrados
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
          <td class="bignum"><span class="counter bn">12</span><span style="font-size:3vw">MILL</span></td>
          </tr>
          <tr>
            <td class="smalltext">
              m<sup>2</sup> desarrollados
            </td>
          </tr>
        </table>
      </div>

    </div><!-- 40 -->

  </div><!-- 80 -->
</div>

<style type="text/css">
  /* Estilos para PC */
  .cont {
    width: 24%;
    position: relative;
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
<div class="highlights-section" data-aos="fade-right">
    <div class="highlights-container">
        <div class="highlights-imagen"></div>
        <div class="highlights-texto">
            <h2 style="font-size: 3em; font-weight: bold; margin-bottom: 0.5em; color: #1976D2;">HIGHLIGHTS</h2>
            <p style="font-size: 1.2em; margin-bottom: 2em;">2024</p>

            <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                <div style="width: 45%; margin-bottom: 2em; text-align: left; position: relative;">
                    <span style="font-size: 7em; font-weight: lighter; color: #1976D2; display: block; line-height: 0.8;">10</span>
                    <span style="font-size: 1em; display: block; color: #1976D2;">Estados de<br>la República</span>
                    <div style="position: absolute; top: 0; right: 0; height: 100%; border-right: 1px solid #1976D2;"></div>
                </div>

                <div style="width: 45%; margin-bottom: 2em; text-align: left; position: relative;">
                    <span style="font-size: 7em; font-weight: lighter; color: #1976D2; display: block; line-height: 0.8;">4</span>
                    <span style="font-size: 1em; display: block; color: #1976D2;">Parques Proveedores<br>de la industria<br>automotriz</span>
                    <div style="position: absolute; top: 0; right: 0; height: 100%; border-right: 1px solid #1976D2;"></div>
                </div>
            </div>

            <div style="display: flex; flex-wrap: wrap; justify-content: space-between; position: relative;">
                <div style="width: 30%; margin-bottom: 2em; text-align: left; position: relative;">
                    <span style="font-size: 0.8em; color: #1976D2;">Cierre de la segunda<br>etapa del fondo de<br>inversión FINSA V</span>
                    <div style="position: absolute; top: 0; right: 0; height: 100%; border-right: 1px solid #1976D2;"></div>
                </div>

                <div style="width: 30%; margin-bottom: 2em; text-align: left; position: relative;">
                    <span style="font-size: 0.8em; color: #1976D2;">Formamos parte por<br>segundo año de las<br>500 empresas más importantes<br>de México, de la revista expansión</span>
                    <div style="position: absolute; top: 0; right: 0; height: 100%; border-right: 1px solid #1976D2;"></div>
                </div>

                <div style="width: 30%; margin-bottom: 2em; text-align: left; position: relative;">
                    <span style="font-size: 0.8em; color: #1976D2;">Inicio del proyecto de<br>transformación digital:<br>Innovación estratégica<br>Sostenible (IES)</span>
                    <div style="position: absolute; top: 0; right: 0; height: 100%; border-right: 1px solid #1976D2;"></div>
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
?>