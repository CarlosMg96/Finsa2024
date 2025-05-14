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
    margin: 20px 0;
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

</style>

<div class="container">
  <!-- Primera sección -->
<section class="first-content">
  <div style="display: flex; width: 100vw; min-height: 780px; font-family: 'Helvetica Neue', sans-serif;">
    
    <!-- Columna de texto -->
    <div style="width: 700px; background: #E8F9FF; display: flex; align-items: center; transform: skewX(-6deg);">
      <div style="width: 80%; margin: auto;">
        <div class="carta-presidente-texto-contenido" data-aos="fade-right">
          <h3 style="color: #1A2B49; font-size: 1.4em; margin-bottom: 5px; font-weight: 500;">Carta del presidente y</h3>
          <h2 style="color: #1976D2; font-weight: 800; font-size: 2.6em; margin: 0;">DIRECTOR GENERAL</h2>
          <p style="color: #1A2B49; font-size: 1.15em; line-height: 1.6; margin-top: 20px;">
            El sector inmobiliario industrial actual se distingue por un dinamismo en constante evolución, donde las demandas del mercado se transforman en valiosas oportunidades.
          </p>
        </div>

        <!-- Botón de descarga -->
        <div class="btn-letter-dowload" data-aos="fade-right" style="margin-top: 30px;">
          <a href="#" style="
            display: inline-block;
            background-color: #1976D2;
            color: white;
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

     <div class="blue-line"></div>

    <div style="
      width: 900px;
background-color: #877E6D;
      clip-path: polygon(35% 0%, 100% 0, 100% 100%, 25% 100%);
      min-height: 480px;">
    </div>
  </div>
</section>


  <!-- Segunda sección -->
  <section class="second-container"> 
    <div class="flex-row">
      <div class="flex-col second-container-image" data-aos="fade-up-right">
        <img src="im/00/portada-foto.jpg" alt="">
      </div>
      <div class="flex-col" data-aos="fade-up-left">
        <p>
          Esto nos ha permitido definir estrategias efectivas
          que, además de impulsar nuestro crecimiento,
          están alineadas con principios de sostenibilidad,
          garantizando un desarrollo responsable y a largo
          plazo.
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
      </div>
    </div>
  </section>

  <section class="three-container">
    <div class="divider"></div>
    <b style="color:#1A2B49; font-size: 1.4em; line-height: 1.4;" data-aos="zoom-in">
      Estamos convencidos de la importancia de integrar los
principios ASG (Ambientales, Sociales y de Gobernanza) en
todas nuestras operaciones.
    </b>
  </section>

   <section class="second-container"> 
    <div class="flex-row">
      <div class="flex-col" data-aos="fade-up-right">
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
      Estamos convencidos de la importancia de integrar los
principios ASG (Ambientales, Sociales y de Gobernanza) en
todas nuestras operaciones.
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
      </div>
       <div class="flex-col for-container-image" data-aos="fade-up-left">
        <img src="im/00/portada-foto.jpg" alt="">
      </div>
    </div> 
  </section>
</div>
HTML;

$prev1 = "nuestra-empresa";
$next1 = "impacto-social";

require_once "footer.php";
?>
