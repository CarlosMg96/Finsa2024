<?php
error_reporting(E_ALL);

$thispage = "impacto-ambiental";

require_once "header.php";


echo<<<HTML
<style type="text/css">
  .portadafoto { height:  50vw; width:100vw; background-image:url(im/02/portada.jpg); background-position: bottom left; background-size: cover; position:relative; overflow:hidden}
  .portadacurved {height:  49vw; width:47vw; position:absolute;right:0;bottom:0;}
  .portadacurve {height:  49vw; width:26vw; position:absolute;right:30.4vw;bottom:0;}
  .portadapeople { width:27vw; position:absolute;left:15vw;bottom:0;}
  .portadainforme { width:20vw; position:absolute;right:9vw;top:23vw;}
  .trascender {position: relative; margin-left:0vw; margin-top:3vw; width:20vw}
  .toptext { position: relative; margin-top:5vw; margin-left:4vw; font-size:1.2vw; width:20vw }
  .descargar-capitulo {width:240px; position:relative; top:3vw; margin-left:4vw;}
  .header-text {position:absolute; color:white;  top:0; right:0; opacity:0.45;  border:0px solid red; }
  @media(max-width:570px){
    .portadapeople {width:55vw;left:5vw;}
    .portadainforme { width:55vw; }
    .portadacurved , .portadacurve { height:120vw; }
    .trascender {width:40vw}
    .toptext { font-size:0.8em; width:40vw; background-color:rgba(255,255,255,0.5)};
    .descargar-capitulo {width:240px; }
    .portadafoto { height:50vh; }
    .header-text {position:absolute; transform:scale(1.3); opacity:0.95; top:auto; bottom:0; right:-5%; border:0px solid red;min-width:30%; min-height:50vw; }
    .diag1 { display:none }
  }
  @media(max-width:600px){
    .portadafoto { height:50vh; background-position: -70px 0px; }
    .toptext { font-size:0.8em; width:55vw};
  }
</style>

<div style="width:100vw; height:60px; ">
</div>
<div class="portadafoto" data-aos="zoom-out">
  
  <img src="im/02/02-trascender.png"  class="trascender" style="" data-aos="fade-down">
  <div class="toptext">
    <p data-aos="fade-right">
      Más allá de promover una cultura ambiental, hemos transformado nuestra responsabilidad por conservar los recursos naturales en una parte intrínseca de nuestro día a día.
    </p>
  </div>

  <a target="_new" href="pdf/IAS_Finsa_2023_Capitulo-2.pdf">
    <img src="im/descarga-capitulo.svg?v=1" class="descargar-capitulo" style="" data-aos="flip-down">
  </a>

  <div class="header-text">
    <div data-aos="fade-down" style="position: absolute; right:11vw; top:2vw; font-size:6vw; font-weight: 600;">
    impacto</div>
    <div data-aos="fade-right" style="position: absolute; right:11.8vw; top:5.2vw; font-size:12vw; font-weight: 600;">
    am</div>
    <div data-aos="fade-up" style="position: absolute;   right:13vw; top:14.4vw; font-size:12vw; font-weight: 600;">
    bien</div>
    <div data-aos="fade-left" style="position: absolute; right:10.7vw; top:23.7vw; font-size:12vw; font-weight: 600;">
    tal</div>
  </div>
</div>

<div style="position:relative;width:100vw;  border-top:1px solid #F7F7F7; border-bottom:1px solid #F7F7F7; background-color:#F7F7F7;
">

  <img src="im/00/whitecurve.svg" style="width:30vw; top:0px; right:0px; position:absolute; border:0px solid purple" data-aos="fade-down" >  

  <img src="im/02/foto-1.png" class="foto1png" data-aos="float-left" />  

  <div style="width:100%; position:relative; margin:80px auto 60px auto; border:0px solid orange " class="flex1">

    <div class="w60 flex4" >
      <div class="diag1" style="position:relative; text-align:right; border:0px solid yellow;">
        <img src="im/diag1.svg" style="height:100%">
      </div>
      <div class="w80" style="width:80%; padding-left:23px;color:#00adef; text-transform: uppercase; position:reative">
        Colaborar en la mitigación del cambio climático y en la conservación de los recursos naturales, es un compromiso que ha asumido FINSA como empresa sostenible, por lo que hemos tomado una serie de medidas y emprendido diversas acciones para evitarlos y reducirlos.
        <br>
      </div>
    </div>
    
    
    
  </div>


<style>
  .pq40 { width:40% }
  .foto1png {width:30%; position:absolute; right:0px; bottom:0px}
  @media(max-width:700px){
    .pq40 { width:70%; margin-left:10%; margin-bottom:170px }
    .foto1png {width:50%;}
    .w10 {display:none}
  }
</style>

  <div style="width:100%; margin:20px auto 0px auto; " class="flex1">

    <div class="w10">
    </div>
    <div class="pq40 flex5" style="border:0px solid pink">
      
      <div data-aos="fade-down">
        <h3>Parques</h3>
        <h1>SOSTENIBLES</h1>
      </div>
      
      <p data-aos="fade-up">
        Nuestro portafolio lo integran parques industriales que cumplen con estándares sostenibles en todas sus operaciones, así como con los lineamientos establecidos en nuestra Política ASG, controlando el consumo de agua y energía, de los residuos generados y de las emisiones de gases invernadero.
      </p>
    </div>
    <div class="w40">
    <br>&nbsp;
    </div>

  </div>

  

</div>




<div style="positon:relative;width:100vw; border-top:1px solid #fff; border-bottom:1px solid #fff; background-color:#fff;"  >
  <div style="positon:relative;width:80%; margin:80px auto" class=flex1>
    <div class="w35">
      <p style="color:#00adef; text-transform:uppercase; font-weight:600">ENERGÍA RENOVABLE</p>
      El Parque Industrial FINSA Aguascalientes ha dado un paso significativo hacia la sostenibilidad y la innovación, con la colocación de paneles solares dentro de sus instalaciones. Esta iniciativa no sólo demuestra el compromiso de FINSA con el medio ambiente y la reducción de la huella de carbono, sino que también establece un precedente importante en la integración de energías renovables dentro de nuestras operaciones.
    </div>

    <div class="w35">
      <p style="color:#00adef; text-transform:uppercase; font-weight:600">Lámparas LED alimentadaspor paneles solares</p>
      El Parque Industrial FINSA Querétaro II tiene lámparas LED en sus vialidades, alimentadas por energía solar. El sistema instalado consta de un total de 46 luminarias LED, cada una con una capacidad de 80W. Para alimentarlas, se han instalado 92 paneles solares, asignando dos paneles por lámpara.
    </div>

  </div>
</div>


<div style="positon:relative;width:100vw; border-top:1px solid #F5FBFE; border-bottom:1px solid #F5FBFE; background-color:#F5FBFE;"  >
  
    <div style="width:100%" class="flex1">
      <div class="w50">
        <div style="width:80%; margin:80px auto 20px auto;" data-aos="fade-right">
          <h3>Uso de energía y</h3>
          <h1>EMISIONES GEI</h1>
        </div>
      </div>
      <div style="width:50%; text-align:right">
        <br>
      </div>
    </div>

    <div style="width:80%; margin:20px auto 20px auto;" class="flex1">
      <div class="w35">
        <p data-aos="fade-right">Uno de los recursos materiales más importantes para nuestras operaciones es la energía, la cual obtenemos de la electricidad y de los combustibles.</p>
      </div>
      <div class="w50">
        <p data-aos="fade-down">
          <img src="im/02/tabla-1.png" style="width:100%">
        </p>
      </div>
    </div>

    <div style="width:80%; margin:20px auto 20px auto;" class="flex1">
      <div class="w35">
        <p>
          <p style="color:#00adef; text-transform:uppercase; font-weight:600">EMISIONES</p>
        </p>
        <p data-aos="fade-up">
        Las emisiones totales de gases de efecto invernadero de FINSA, registraron un aumento de 2022 a 2023 de 4.51 por ciento, Este incremento puede atribuirse a varios factores clave, que abarcan desde la expansión operativa hasta el uso de energías basadas en combustibles fósiles.</p>
      </div>
      <div class="w50">
        <p data-aos="fade-left">
          <img src="im/02/tabla-2.png" style="width:100%">
        </p>
      </div>
    </div>




<div style="position:relative;width:100vw; border-top:1px solid #fff; border-bottom:1px solid #fff; background-color:#fff;"  >

  <img src="im/02/bottom-curve.png" style="position: absolute; bottom:0; left:0; width:50vw">

  <div style="positon:relative;width:80%; margin:80px auto" class=flex1>
    <div class="w25">
      <img src="im/02/circles.jpg" style="width:100%; mix-blend-mode: multiply;" data-aos="fade-right">
    </div>
    <div class="w70" data-aos="fade-left">
      <h3>Uso de</h3>
      <h1>AGUA</h1>
      <p>
      El agua es un recurso vital para los seres humanos. Para FINSA representa uno de los insumos más importantes, por lo que continuamente supervisa y atiende cualquier contingencia relacionada con el consumo y el abastecimiento del vital líquido.
      </p>
      <p>
Contamos con plantas de tratamiento que operan bajo procesos biológicos de degradación de contaminantes en función de los servicios sanitarios que brinda FINSA en algunos de sus parques. 
      </p>
      <p>
        <span class="counter" style="font-size:2.8em">457,360.60</span> <span style="font-size:1.4em">m<sup>3</sup></span>
        <br>
        <span style="color:#09c9b6; font-weight:600;">
          TOTAL DE AGUA TRATADA EN 2023
        </span>
      </p>
      <br>
      <p>
        <img src="im/02/tabla-agua.png" style="width:100%" data-aos="fade-up">
      </p>
    </div>
  </div>
</div>

</div>

<style type="text/css">
  .icns { display:block; } .icnsm { display:none; }
  @media(max-width:700px){
    .icns { display:none; } .icnsm { display:block; }
  }
</style>


<div style="positon:relative;width:100vw; border-top:1px solid #EBF9F7; border-bottom:1px solid #EBF9F7; background-color:#EBF9F7;"  >
  <div style="positon:relative;width:80%; margin:80px auto">
    <h3>Cambio climático y</h3>
    <h1>RESILIENCIA</h1>
  </div>
  <div style="positon:relative;width:80%; margin:80px auto" class=flex1>
    <div class="w65">
      Medir las divulgaciones financieras relacionadas con el clima es fundamental para las empresas. Con ayuda de las directrices establecidas por el Task Force on Climate-Related Financial Disclosures, (TCFD), podemos mejorar la transparencia, fortalecer la toma de decisiones, aumentar la confianza de los inversionistas y otros grupos de interés, así como abordar de manera proactiva los impactos financieros del cambio climático.
      <br><br>
    </div>
    <div class="w30">
      <img src="im/02/tcfd-2.png" style="width:100%">
    </div>
  </div>
  <div style="positon:relative;width:80%; margin:80px auto">
    <p style="color:#00adef; text-transform:uppercase; font-weight:600; text-align:center">
    Reportamos nuestros avances en los cuatro pilares de TCFD:
    </p>
    <p></p>
    <p style="text-align:center">
      <img class="icns" src="im/02/icons.png" data-aos="fade-up" style="width:80%; margin:50px auto">
      <img class="icnsm" src="im/02/icons-mobile.png" data-aos="fade-up" style="width:80%; margin:50px auto">
    </p>
  </div>
</div>



HTML;


//$ocultar = 1;
$prev1 = "nuestra-empresa";
$next1 = "impacto-social";

require_once "footer.php";


?>