<?php
error_reporting(E_ALL);

$thispage = "carta-del-presidente";

require_once "header.php";

echo <<<HTML
<style type="text/css">
  /* Contenedor principal */
  .container {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    background-color: #fff; 
    width: 100vw;
  }

  /* Primera sección con texto e imagen */
  .first-content {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    min-height: 400px;
    width: 100vw;
    border-top: 1px solid #E9F2F9;
    border-bottom: 1px solid #E9F2F9;
  }

  /* Texto de la carta */
  .carta-presidente-texto {
    width: 100%;
  }

  .carta-presidente-texto-contenido {
    width: 80%;
    margin: auto;
  }

  /* Botón descargar carta */
  .btn-letter-dowload {
    margin-top: 20px;
    text-align: center;
  }

  .btn-letter-dowload a {
    background-color: #1976D2;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1em;
  }


.blue-line {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 48%;
  width: 7%;
  height: 780px;
  background-color: #2f80ed;
  transform: skewX(-6deg);
  z-index: 2;
  margin-left: 2%;
}

@media (max-width: 768px) {
  .first-content {
    flex-direction: column;
    padding: 20px 0;
    margin-top: 48px;
  }

  .first-content > div {
    flex-direction: column !important;
    width: 100% !important;
    min-height: auto !important;
  }

  .first-content .blue-line {
    display: none;
  }

  .first-content > div > div:first-child {
    width: 100% !important;
    transform: none !important;
    padding: 20px;
  }

  .first-content .carta-presidente-texto-contenido {
    width: 100%;
    margin: 0 auto;
  }

  .first-content > div > div:last-child {
    width: 100% !important;
    clip-path: none !important;
    background-color: #877E6D;
    height: 250px;
  }

  .btn-letter-dowload a {
    width: 100%;
    display: block;
    box-sizing: border-box;
  }
}


  /* Segunda sección */
.second-container {
    padding: 50px 10%;
    background-color: #F8F9FA;
}

/* Layout de columnas para pantallas medianas y grandes */
.flex-row {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
}

/* Imagen más grande (60%) */
.second-container-image {
    width: 50%;
}

/* Texto (40%) */
.second-container .flex-col:not(.second-container-image) {
    width: 40%;
}

/* Imagen responsiva */
.second-container-image img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 8px;
}

/* Texto */
.second-container p {
    font-size: 1em;
    line-height: 1.6;
    color: #1A2B49;
}

/* Responsive: una columna en móviles */
@media (max-width: 768px) {
    .flex-row {
        flex-direction: column;
    }

    .second-container-image,
    .second-container .flex-col:not(.second-container-image) {
        width: 100%;
    }
}

.divider {
    width: 100%;
    height: 2px;
    background-color: #1A2B49;
}

.three-container {
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 50px 10%;
  background-color: #F8F9FA;
  text-align: center;
}

.p{
  line-height: 1.6;
}

/* second-content */
.second-container-image {
  width: 600px;
  height: 400px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

  .second-container-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    border-radius: 8px;
  }

  @media screen and (max-width: 768px) {
    .second-container-image {
      width: 100%;
      height: auto;
    }
    
  }

/* for-content */
.for-container-image {
  width: 600px;
  height: 800px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

  .for-container-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    border-radius: 8px;
  }

   @media screen and (max-width: 768px) {
    .second-container-image {
      width: 100%;
      height: auto;
    }

    .for-container-image {
      width: 100%;
      height: auto;
    }
    
  }

  .data-text{
    width: 100%;
    padding: 20px;
    margin-bottom: 20px;
  }

  .data-text p {
    font-size: 1em;
    line-height: 1.6;
    color: #1A2B49;
  }

 .data-asg {
  font-size: 1.4em;
  line-height: 1.5;
  color: #1A2B49;
  margin-bottom: 20px;
  margin-left: 40%;
  width: 20%;
  padding: 20px;
}

.main-content{
  background: #F2F4F6;
  padding-left: 60px;
  padding-right: 60px;
  padding-top: 20px;
  witdh: 100%;
  margin-right: -120px;
  margin-top: 20px;
  height: 300px;
}

@media screen and (max-width: 768px) {
  .data-asg {
    margin-left: 0;
    margin-right: 0;
    text-align: center;
  }

  .main-content{
    background: #F2F4F6;
    padding: 20px;
    width: 100%;
    margin-right: 0;
    height: auto;
  }
}

</style>

<div class="container">
  <!-- Primera sección -->
<section class="first-content">
  <div style="display: flex; width: 100vw; min-height: 780px; font-family: 'Helvetica Neue', sans-serif;">
    
    <!-- Columna de texto -->
    <div style="width: 650px; display: flex; align-items: center;">
      <div>
        <div style="width: 80%; margin: auto;" class="carta-presidente-texto-contenido" data-aos="fade-right">
          <h3 style="color: #1A2B49; font-size: 1.4em; margin-bottom: 5px; font-weight: 500;">Carta del presidente y</h3>
          <h2 style="color: #1976D2; font-weight: 800; font-size: 2.6em; margin: 0;">DIRECTOR GENERAL</h2>
        </div>

        <div class="main-content" data-aos="fade-right">
          <p style="color: #1A2B49; font-size: 1.4em; line-height: 1.6; margin-top: 20px; font-weight: 500;">
            El sector inmobiliario industrial actual se distingue por un dinamismo en constante evolución, donde las demandas del mercado se transforman en valiosas oportunidades.
          </p>
           <!-- Botón de descarga -->
        <div class="btn-letter-dowload" data-aos="fade-right" style="margin-top: 30px;">
          <a href="#" style="
            display: inline-block;
            background-color:rgb(241, 248, 255);
            color: black;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            font-size: 0.95em;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: background-color 0.3s;">
            DESCARGAR CARTA DEL PRESIDENTE
          </a>
        </div>
        </div>
      </div>
    </div>

    <div style="
      width: 1000px;
      background: url('im/2024/carta-director.png') no-repeat;
      background-size: cover;
      background-position: 80px 0;
      clip-path: polygon(20% 0%, 100% 0, 100% 100%, 0 100%);
      min-height: 480px;">
    </div>
  </div>
</section>


  <!-- Segunda sección -->
  <section class="second-container"> 
    <div class="flex-row">
      <div class="flex-col second-container-image" data-aos="fade-up-right">
        <img src="im/2024/FINSA_Parque_Industrial_by_Mino_Mora_0781.png" alt="">
      </div>
      <div class="flex-col data-text" data-aos="fade-up-left">
        <p>
          Esto nos ha permitido definir estrategias efectivas
          que, además de impulsar nuestro crecimiento,
          están alineadas con principios de sostenibilidad,
          garantizando un desarrollo responsable y a largo
          plazo.
          <br><br><br>
          Continuamos fortaleciendo nuestra relación con
          las instituciones financieras, consolidándonos
          como un referente en el desarrollo inmobiliario
          industrial en México. Este reconocimiento nos
          impulsa a seguir innovando y transformando el
          futuro del sector. Un claro ejemplo es nuestra
          nueva generación de parques industriales,
          diseñados con un enfoque en eficiencia operativa,
          sostenibilidad y seguridad. Nuestra
          infraestructura no solo facilita las operaciones de
          nuestros clientes, sino que también optimiza su
          productividad, brindando espacios que impulsan
          su crecimiento y competitividad.
        </p>
        <div class="divider"></div>
      </div>
    </div>
  </section>

  <section class="three-container">
    <b class="data-asg" data-aos="zoom-in">
      Estamos convencidos de la importancia de integrar los principios ASG (Ambientales, Sociales y de Gobernanza) en todas nuestras operaciones.
    </b>
  </section>

   <section class="second-container"> 
    <div class="flex-row">
      <div class="flex-col data-text" data-aos="fade-up-right">
        <p>
          Por ello, seguimos fortaleciendo los pilares de
nuestro modelo de sostenibilidad empresarial:
Talento y Cultura Corporativa,
Medio Ambiente,
Ética y Legalidad, y Comunidad. Nuestra visión se
enfoca en la gestión de riesgos, la innovación, el
compromiso con la cadena de valor, la
responsabilidad y resiliencia, así como el sentido
sostenible del negocio.
Asimismo, sabemos que nuestra participación en
iniciativas globales para la reducción de emisiones
de gases de efecto invernadero (GEI) es clave
para mitigar el cambio climático. Este
compromiso nos posiciona como un eslabón
estratégico dentro de nuestra cadena de
suministro, promoviendo el uso de energías más
eficientes y la adopción de las mejores prácticas
sostenibles.
        </p>
        <b style="color:#1A2B49; font-size: 1.4em; line-height: 1.4;">
      Nuestro capital humano es el pilar fundamental de nuestra empresa.
    </b>
    <p>
      Su compromiso con la excelencia, el servicio y la
ética profesional nos permite generar confianza
en un entorno socialmente responsable y
preparado para enfrentar los desafíos del sector.
Para fortalecer su bienestar, hemos
implementado diversas iniciativas que han
resultado en una retención de talento superior a
nuestras expectativas.
En el ámbito de Tecnologías de la Información,
continuamos avanzando en la implementación de
un ERP (Enterprise Resource Planning) de última
generación, diseñado para optimizar nuestras
operaciones diarias y reforzar nuestra eficiencia y
competitividad.
Sin duda, 2024 nos permitió reafirmar nuestro
liderazgo como desarrolladores industriales en
México. Hemos demostrado que nuestra gente,
nuestra visión estratégica y nuestra excelencia
operativa son los motores de nuestro éxito.
Gracias a todos ustedes por ser parte de la
historia de éxito de FINSA
.
    </p>
   <div style="display: flex; align-items: center; gap: 10px; margin-top: 20px;">
  <img src="im/whitediag.svg" height="70px" style="filter: invert(1);">

  <div>
    <b style="color:#1A2B49; font-size: 1.4em; line-height: 1.4; margin: 0;">Sergio Argüelles González</b>
    <p style="margin: 0;">Presidente del Consejo de Administración <br> y director general</p>
  </div>
</div>

      </div>
       <div class="flex-col for-container-image">
        <img src="im/2024/FINSA_Parque_Industrial_by_Mino_Mora_0718-2.png" alt="">
      </div>
    </div> 
  </section>
</div>
HTML;

$prev1 = "nuestra-empresa";
$next1 = "impacto-social";

require_once "footer.php";
?>
