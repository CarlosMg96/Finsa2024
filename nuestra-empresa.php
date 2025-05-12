<?php
error_reporting(E_ALL);

$thispage = "nuestra-empresa";

require_once "header.php";


echo<<<HTML
<style type="text/css">
  .portadafoto { height:  50vw; width:100vw; background-image:url(im/01/portada.jpg); background-position: bottom left; background-size: cover; position:relative; overflow:hidden; }

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
    .header-text {position:absolute; transform:scale(1.3); opacity:0.85; top:auto; bottom:0; right:-5%; border:0px solid red;min-width:30%; min-height:50vw; }
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
  
  <div class="header-text">
    <div data-aos="fade-down"  style="position: absolute;  right:11vw; top:2vw; font-size:6vw; font-weight: 600;">
    nuestra</div>
      <div data-aos="fade-right" style="position: absolute;   right:11.8vw; top:5.2vw; font-size:12vw; font-weight: 600;">
    em</div>
      <div data-aos="fade-up" style="position: absolute;   right:13vw; top:13.4vw; font-size:12vw; font-weight: 600;">
    pre</div>
      <div data-aos="fade-left" style="position: absolute; right:10.7vw; top:21.4vw; font-size:12vw; font-weight: 600;">
    sa</div>
  </div>

  <img src="im/01/01-trascender.png?v=1" class="trascender" style="" data-aos="fade-down">
  <div class="toptext">
    <p data-aos="fade-right">
      Estamos constantemente buscando trascender más allá de nuestras actividades operativas, con el propósito de crear beneficios tanto sociales como económicos para todos nuestros grupos de interés.
    </p>
  </div>

  <a target="_new" href="pdf/IAS_Finsa_2023_Capitulo-1.pdf">
  <img src="im/descarga-capitulo.svg?v=2" class="descargar-capitulo" style="" data-aos="flip-down">
  </a>
  
</div>

<style type="text/css">
  .la-labor{ padding-left:23px; }
  .foto1 {width:90%; margin-left:10%;}
  @media(max-width:700px){
    .la-labor{ padding-left:0px; }
    .diag1 {display:none}
    .foto1 {width:70%; margin-left:15%;}
  }
</style>

<div style="positon:relative;width:100vw; border-top:1px solid #E9F2F9; border-bottom:1px solid #E9F2F9; background-color:#E9F2F9;">

  <div style="width:80%; position:relative; margin:80px auto 60px auto; " class="flex1">
    <div style="width:100%" class="flex4" >
      <div class="diag1" style="position:relative; text-align:right; border:0px solid yellow;">
        <img src="im/diag1.svg" style="height:100%">
      </div>
      <div class="la-labor" style="width:80%; color:#00adef; text-transform: uppercase; position:reative">
        
        La labor ininterrumpida e integral que hemos realizado durante 46 años, ha consolidado a FINSA como una de las empresas de desarrollo inmobiliario industrial más importantes de México.
        <br><br>
En FINSA diseñamos, construimos, administramos y operamos parques industriales con un enfoque innovador, sostenible y con los más altos estándares internacionales, ubicados en la República Mexicana.
        <br>
      </div>
    </div>
  </div>


  <div style="width:80%; margin:20px auto 80px auto;" class="flex1">
    <div class="w30">
      <img src="im/01/foto-1.jpg" class="foto1" style="border-radius:50%" data-aos="flip-right" />
    </div>
    <div class="w60 flex5">
      
      <p data-aos="fade-down">
        Las propiedades que administramos y/o arrendamos están distribuidas en cuatro regiones del País: Noreste, Noroeste, Bajío y Occidente y Centro de México, que suman 3.2 millones de metros cuadrados, e integran las 17 entidades federativas donde tenemos presencia.
      </p>
      <p><br></p>
      <p data-aos="fade-up">
        Diseñados con las condiciones adecuadas para ofrecer vías de acceso y movilidad, nuestros parques industriales facilitan los requerimientos de logística y manufactura de nuestros clientes, contribuyendo así a la mejora de sus procesos, comercialización y optimización de sus recursos.
      </p>
    </div>
    
  </div>

  

</div>



<div style="positon:relative;width:100vw; border-top:1px solid #fff; border-bottom:1px solid #fff; background-color:#fff;"  >
  
    <div style="width:100%" class="flex1">
      <div style="width:50%">
        <div style="width:80%; margin:80px auto 20px auto;" data-aos="fade-right">
          <h3>Nuestro portafolio, nuestros productos y</h3>
          <h1>MERCADOS ATENDIDOS</h1>
        </div>
      </div>
      <div style="width:50%; text-align:right">
        <img src="im/00/whitecurve.svg" style="width:70%" data-aos="fade-down">
      </div>
    </div>
    <div style="width:80%; margin:20px auto 20px auto;" class="flex1">
      <div class="w40">
        <p data-aos="fade-right">Cubrimos cuatro zonas del País con servicios de renta y venta de espacios, con mantenimiento integral de parques industriales y la administración de portafolios de propiedades. </p>
      </div>
      <div class="w50">
        <p data-aos="fade-left">La industria automotriz, electrónicos, logística, aeroespacial, médica, metal-mecánica, alimentos y bebidas y de embalaje, entre muchas otras, forman parte de nuestra cartera de clientes, nacionales e internacionales, quienes han encontrado en nuestra oferta la mejor opción para invertir. </p>
      </div>
    </div>

<style type="text/css">
  .regions{  position: absolute; bottom:0; right:0;width:50%; margin-bottom:10%; transition:all 1s ease-out; }  
  .box { width:18px;height:18px;margin-left:0.1em; margin-right:0.7em; transform: skew(-10deg);}
  .selecciona{position:relative; width:680px; margin-left:-170px; margin-top:80px}
  @media(max-width:1100px){
    .selecciona{transform: scale(0.6); margin-top:60px;margin-left:-200px;}
  }
  @media(max-width:1000px){
    .selecciona{transform: scale(0.5);margin-top:40px;margin-left:-220px;}
  }
  @media(max-width:800px){
    .selecciona{transform: scale(0.4);margin-top:20px;margin-left:-240px;}
  }
  @media(max-width:700px){
    .regions{  position:relative; width:60%; margin-bottom:10%; transition:all 1s ease-out; }  
    .selecciona{transform: scale(0.8); margin-top:20px;margin-left:-70px; margin-bottom:40px;}
  }
  @media(max-width:600px){
    .selecciona{transform: scale(0.65); margin-top:20px;margin-left:-100px; margin-bottom:40px;}
  }
  @media(max-width:550px){
    .selecciona{transform: scale(0.5); margin-top:20px;margin-left:-180px; margin-bottom:40px;}
  }
</style>

    <div style="width:80%; margin:20px auto 80px auto;" class="flex1">      
      <div class="w60 flex5">

HTML;


require_once "mexico.php";
/*
        <img class="regions" src="im/01/mexico.svg" style="width:80%" data-aos="fade-right" data-aos-duration="1600">
*/

echo<<<HTML

      </div>
      <div class="w40" style="position:relative">
        <div class="selecciona">
          <span style="font-size:0.85em; font-weight:600; color:#444">
          SELECCIONA LA REGIÓN PARA SABER MÁS DE NUESTRO DESARROLLO EN ELLA
          </span>
          <div style="width:100%; margin-left:-1em; margin-top:0.6em;" class="flex1">

            <div id="r6" style="color:#3abdb0; width:130px; cursor:pointer" class="flex4">
              <div class="box" style="background-color: #3abdb0;"></div>NOROESTE
            </div>

            <div id="r5" style="color:#f78e47; width:130px; cursor:pointer" class="flex4">
              <div class="box" style="background-color: #f78e47;"></div>NORESTE
            </div>

            <div id="r8" style="color:#65666a; width:200px; cursor:pointer" class="flex4">
              <div class="box" style="background-color: #65666a;"></div>BAJÍO Y OCCIDENTE
            </div>

            <div id="r4" style="color:#2dabe2; width:130px; cursor:pointer" class="flex4">
              <div class="box" style="background-color: #2dabe2;"></div>CENTRO
            </div>

            
          </div>
        </div>
        <img class="regions" id="detalle" src="im/01/m-noroeste.png" data-aos="flip-right" data-aos-duration="400">
      </div>
    </div>


</div>
<style type="text/css">
  .cls-4, .cls-5, .cls-6, .cls-8 { cursor:pointer; opacity:0.5;} 
  .cls-4:hove, .cls-5:hover, .cls-6:hover, .cls-8:hover { opacity:0.5; } 
</style>
<script type="text/javascript">

  $('.cls-4, #r4').mouseover(function(){
    $('.regions').attr('src','im/01/m-centro.png');
    $('.cls-4, .cls-5, .cls-6, .cls-8').css('opacity','0.5');
    $('.cls-4').css('opacity','1');
  });

  $('.cls-5, #r5').mouseover(function(){
    $('.regions').attr('src','im/01/m-noreste.png');
    $('.cls-4, .cls-5, .cls-6, .cls-8').css('opacity','0.5');
    $('.cls-5').css('opacity','1');
  });

  $('.cls-6, #r6').mouseover(function(){
    $('.regions').attr('src','im/01/m-noroeste.png');
    $('.cls-4, .cls-5, .cls-6, .cls-8').css('opacity','0.5');
    $('.cls-6').css('opacity','1');
  });

  $('.cls-8, #r8').mouseover(function(){
    $('.regions').attr('src','im/01/m-bajio.png');
    $('.cls-4, .cls-5, .cls-6, .cls-8').css('opacity','0.5');
    $('.cls-8').css('opacity','1');
  });


    






  /*

      .cls-4 {
        fill: #2dabe2;
        //centro
      }

      .cls-5 {
        fill: #f78e47;
        // noreste
      }

      .cls-6 {
        fill: #3abdb0;
        // noroeste
      }

      .cls-7 {
        fill: #f2f2f2;
      }

      .cls-8 {
        fill: #65666a;
        // bajio
      }
  */
</script>

<style>
  .blueback { width:100vw; background-color:#0081c9; position: absolute; height:30vh }

  @media(max-width:700px){
    .blueback { height:50vh }
    .vis { margin-top:1.5em }
  }
</style>

<div style="width:100vw; background-color:#fff; border-top:1px solid white; border-bottom:1px solid #F7F7F7;">
  <div class="blueback">
  </div>
  <div style="width:70vw; margin:8vw auto;" class="flex1">
     <div class="w45" data-aos="flip-right" style="text-align:center; background-color:#fff; padding:3em 2em; box-shadow: 8px 8px 10px -2px rgba(0,0,0,0.35);">
        <h1>MISIÓN</h1>
        <p>
          Mantener el liderazgo en el sector inmobiliario industrial proporcionando soluciones innovadoras y efectivas con un enfoque sostenible.
          </p>
          <p>
Creamos valor a largo plazo para nuestros clientes y alta rentabilidad para nuestros accionistas con múltiples operaciones exitosas que nos respaldan.
        </p>

     </div>
     <div class="w45 vis" data-aos="flip-right" style="text-align:center; background-color:#fff; padding:3em 2em; box-shadow: 8px 8px 10px -2px rgba(0,0,0,0.35);">
      <h1>VISIÓN</h1>
      <p>
      Ser reconocidos como líderes en desarrollos inmobiliarios industriales en México; distinguidos por nuestra innovación, responsabilidad social, sostenibilidad y credibilidad.
      </p>
     </div>
  </div>
  
</div>

<style type="text/css">
  .ics {width:20%; max-width:180px}
  @media(max-width:700px){
    .ics {width:45%; margin-bottom:2em}
  }
</style>

<div style="width:100vw; background-color:#F7F7F7; border-top:1px solid #F7F7F7; border-bottom:1px solid #F7F7F7;">
  <div style="width:80vw; margin:8vw auto;">
      <h3>Compromiso</h3>
      <h1 style="text-transform:uppercase;" data-aos="fade-up" >Ambiental, Social y de Gobernanza (ASG)</h1>
      <p data-aos="fade-right" >
        El compromiso que tenemos de operar de forma responsable y sostenible se ve reflejado en nuestras acciones diarias, enfocándonos en el bienestar laboral, el cuidado al medio ambiente, el desarrollo de las comunidades, respetando los derechos humanos y cumpliendo con la normativa y legislación que nos aplica.
        </p>
        <p data-aos="fade-left" >
Como empresa, cada año nos enfrentamos a nuevos retos globales en temas ambientales, sociales y de gobernanza, por lo que nuestro Modelo está basado en cuatro ejes estratégicos:
      </p>
      <div style="width:90%; margin:60px auto 80px auto" class="flex1">
        <img class="ics" src="im/01/ic-01.png" data-aos="flip-right" >
        <img class="ics" src="im/01/ic-02.png" data-aos="flip-right" >
        <img class="ics" src="im/01/ic-03.png" data-aos="flip-right" >
        <img class="ics" src="im/01/ic-04.png" data-aos="flip-right" >
      </div>
  </div>
</div>


<div style="positon:relative;width:100vw; min-height:70vh; border-top:1px solid #fff; border-bottom:1px solid #fff; background-color:#fff;"  >
  
    <div style="width:100%; height:100%; min-height:70vh; " class="flex1">

      <div style="width:30%; height:100%; min-height:70vh; ; border:0px solid purple" class="flex5">
        <img src="im/01/foto-2.jpg" style="position:relative;width:110%; margin:auto; margin-left:-20%; border-radius:50%">
      </div>

      <div style="width:70%;position:relative" class="flex5">
        <img src="im/01/curva.png" class="curva1" style="height:100%; position:absolute">
        <div style="width:70%; margin:auto;">
          <h3>Política</h3>
          <h1 style="text-transform:uppercase;" data-aos="fade-up" >Ambiental, Social y de Gobernanza (ASG)</h1>
          <p>
          Todas las acciones que realizamos en FINSA, están respaldadas por nuestra Política Ambiental, Social y de Gobernanza, que fue actualizada en octubre de 2023 y que está publicada en nuestra intranet corporativa.
          </p>
          <p>
En este documento se detallan los aspectos más relevantes para nuestra empresa y los criterios de actuación a seguir para generar valor social, ambiental y económico, al mismo tiempo que disminuimos nuestros impactos operativos.
          </p>
        </div>
      </div>
    </div>

</div>

<style type="text/css">
  .obj { width:97%; border:1px solid #0081c9; border-radius:0.3em; padding:0.2em 1em; margin-bottom:1em;}
  .obj:hover {cursor:pointer; background:rgba(250,250,250,02);}
  .leer-mas { width:80px; margin-top:8px;cursor:pointer }
  .leer-mas:hover { margin-left:0.3em;}

  .bl {  list-style: none; margin-left: 0; padding-left: 0;  }
  .bl li {  padding-left: 1em;  text-indent: -0.8em;}
  .bl li:before { content: "/"; padding-right: 3px;  color:#0081c9; font-weight:800;}
  .desc-ap { width:90% }
  @media(max-width:700px){
    .desc-ap { width:300px; margin-bottom:30px }
    .curva1 { opacity:0.45 }
  }
</style>

<div style="positon:relative;width:100vw; border-top:1px solid #E9F2F9; border-bottom:1px solid #E9F2F9; background-color:#E9F2F9;">

  <div style="width:80%; position:relative; margin:80px auto 60px auto; " class="flex1">
    <div class="w30" data-aos="fade-right">
      <h3>Nuestra aportación a los</h3>
      <h1>OBJETIVOS DE DESARROLLO SOSTENIBLE (ODS)</h1>
      <a target="_new" href="pdf/IAS_Finsa_2023_ODS.pdf">
      <br><img src="im/01/descarga-aportacion.svg" class="desc-ap">
      </a>
    </div>
    <div class="w60">
      <div style="width:100%; height:40vh; overflow:auto;">

        <div class="obj" onmouseup="openODS('01')">
          <ul class="bl"><li>
              Reducir los consumos de energía y GEI de Alcance 1 y 2 en un <b>20%, comparado con la linea base del 2022.</b>
              <br><img src="im/leer-mas.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('02')">
          <ul class="bl"><li>
              Energía renovable para todas las áreas comunes de los Parques Industriales.
              <br><img src="im/leer-mas.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('03')">
          <ul class="bl"><li>
              <b>Carbono Neto Zero</b>, alineado a SBTi.
              <br><img src="im/leer-mas.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('04')">
          <ul class="bl"><li>
              Reducir el consumo de agua de nuestras operaciones en <b>20%, comparado con la línea base de 2022.</b>
              <br><img src="im/leer-mas.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('05')">
          <ul class="bl"><li>
              Que el <b>50%</b> de los residuos generados en nuestras operaciones, no lleguen a relleno sanitario (que sean reciclados o reusados).
              <br><img src="im/leer-mas.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('06')">
          <ul class="bl"><li>
              Mejorar nuestros programas de vinculación con la comunidad, con más horas de voluntariado (5%).
              <br>* Garantizar la permanencia de becas otorgadas y de ser posible incrementar su cantidad.
              <br><img src="im/leer-mas.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('07')">
          <ul class="bl"><li>
              Capacitar y concientizar anualmente a todos nuestros colaboradores en temas de ASG - incluyendo aspectos ambientales, ética, anticorrupción y Diversidad, Equidad, Inclusión y Pertenencia (DEIB por sus siglas en inglés).
              <br><img src="im/leer-mas.svg" class="leer-mas">
          </li></ul>
        </div>
 
        <div class="obj" onmouseup="openODS('08')">
          <ul class="bl"><li>
              Capacitar y concientizar a nuestros inquilinos en temas ASG.
              <br><img src="im/leer-mas.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('09')">
          <ul class="bl"><li>
              Obtener certificaciones verdes en nuevas construcciones propias a partir del 2024.
              <br><img src="im/leer-mas.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('10')">
          <ul class="bl"><li>
              Lograr del 20 a 30% de certificaciones verdes en operación en nuestra área bruta rentable (ABR).
              <br><img src="im/leer-mas.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('11')">
          <ul class="bl"><li>
              Identificar y atender los riesgos e implicaciones financieras relacionadas con el clima, en línea con TCFD.
              <br><img src="im/leer-mas.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('12')">
          <ul class="bl"><li>
              Aumentar el porcentaje de mujeres en puestos ejecutivos (35%).
              <br><img src="im/leer-mas.svg" class="leer-mas">
          </li></ul>
        </div>



      </div>
    </div>

  </div>

</div>

<script type="text/javascript">
  function openODS(n){
    $('.odsdiv').css('display','none');
    $('#ods-'+n).css('display','block');
    $('#odsModal').fadeIn();
  }
</script>

<style type="text/css">
  .clogo { height:3.6em; margin:auto; }
  .dv80 {width:80%; }
  .hid32 {width:32%}
  .hid57 {width:57%}
  .hid17 {width:17%}
  .hid43 {width:43%}

  @media(max-width:700px){
    .dv80 {width:95%; }
    .clogo { height:2.2em; }

    .hid32 {width:1%}
    .hid57 {width:90%}
    .hid17 {width:1%}
    .hid43 {width:90%}
  }
  @media(max-width:700px){
    .clogo { height:1.9em;  }
  }
</style>
<div style="positon:relative;width:100vw; border-top:1px solid #f7f7f7; border-bottom:1px solid #f7f7f7; background-color:#f7f7f7;">
  <div class="dv80" style="position:relative; margin:80px auto 60px auto; "  data-aos="fade-right" >
    <h3>Certificaciones y</h3>
    <h1>DISTINTIVOS</h1>

    <div class="flex1 w90">
      <div style="width:25%" class="flex5">
        <img src="im/01/logo-1.png" class="clogo">
      </div>
      <div style="width:70%" class="flex5">
        <div style="width:100%; margin:2em 0em; line-height: 1.4em;">
          <span onmouseup="reveal('hidden1')" class="blu1" style="cursor:pointer">CALIDAD AMBIENTAL<img src="im/arr-right-blue.svg" style="width:1em;margin-left:0.3em"></span>
          <br>En 2023 se recibieron los certificados de renovación de Calidad Ambiental de los parques industriales.
        </div>          
      </div>
    </div>

    <div id="hidden1" style="width:100%; margin-top:1.4em; margin-bottom:2em;display:none;" class="flex4">
        <div class="hid32">
        </div>
        <img src="im/01/calidad-ambiental.jpg" class="hid57">
    </div>
    <div style="width:100%; height:0; border-bottom:1px solid #00adef"></div>


    <div class="flex1 w90">
      <div style="width:25%" class="flex5">
        <img src="im/01/logo-2.png" class="clogo">
      </div>
      <div style="width:70%" class="flex5">
        <div style="width:100%; margin:2em 0em; line-height: 1.4em;">
          <span class="blu1">Distintivo Empresa Socialmente Responsable (ESR)</span>
          <br>En 2023, se obtuvo por décima ocasión el Distintivo ESR otorgado por el Centro Mexicano para la Filantropía (Cemefi).
        </div>
      </div>
    </div>
    <div style="width:100%; height:0; border-bottom:1px solid #00adef"></div>

    <div class="flex1 w90">
      <div style="width:25%" class="flex5">
        <img src="im/01/logo-3.png" class="clogo">
      </div>
      <div style="width:70%" class="flex5">
        <div style="width:100%; margin:2em 0em; line-height: 1.4em;">
          <span onmouseup="reveal('hidden2')" class="blu1" style="cursor:pointer">Distintivos AMPIP<img src="im/arr-right-blue.svg" style="width:1em;margin-left:0.3em"></span>
          <br>En 2023, FINSA recibió por parte de la Asociación Mexicana de AMPIP Parques Industriales Privados (AMPIP) tres distintivos:
        </div>
      </div>
    </div>

    <div id="hidden2" style="width:100%; margin-top:1.4em; margin-bottom:2em;display:none;" class="flex4">
        <div class="hid17">
        </div>
        <img src="im/01/distintivos-ampip.png" class="hid43">
    </div>
    <div style="width:100%; height:0; border-bottom:1px solid #00adef"></div>



  </div>
</div>



<style type="text/css">
  .ods table { width:100%; border-collapse:collapse; }
  .ods table td, .ods table th {   padding:1em; text-align:center; vertical-align:middle; border:1px solid #00adef; }
  .ods table th {background-color:#E6F7FD; font-weight:600;}
  .odsdiv {display:none; overflow-x:auto; border:0px solid red}
</style>



<div class="ods" id="odsModal" style="display:none;position:fixed; z-index:20; width:90%; margin-left:5%; top:20vh; background-color: white; border-radius:0.4em; filter: drop-shadow(10px 10px 12px rgba(0,0,0,0.5)); ">

  <div style="position:relative; width:90%; margin:33px auto;">

    <img onmouseup="$('#odsModal').fadeOut();" src="im/x.svg" style="width:1.2em;top:0em;right:0em;position:absolute; cursor: pointer;">


    <span style="font-weight:600"><span style="color:#00adef; font-weight:800">/</span> ODS AL QUE SE ALINEA</span>

    <div id="ods-01" class="odsdiv">
      <br><br>
      <img src="im/01/ods-7.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-9.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>PRINCIPIO DEL<br>PACTO GLOBAL</th>
          <th>TEMA<br>MATERIAL</th>
          <th>ENFOQUE<br>(FINSA)</th>
          <th>EJE ESTRATÉGICO (FINSA)</th>
          <th>AÑO OBJETIVO Y/O<br>FRECUENCIA</th>
          <th>PROGRESO 2023</th>
        </tr>
        <tr><td>
            Medio Ambiente
          </td><td>
            Energía Verde y Cambio Climático
          </td><td>
            Negocio sostenible
          </td><td>
            Medio ambiente
          </td><td>
            <b>2029</b>
          </td><td style="text-align: left;">
            En 2023 disminuimos un 18.17% el uso de gasolina, en relación con 2022.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-02" class="odsdiv">
      <br><br>
      <img src="im/01/ods-7.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-9.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>PRINCIPIO DEL<br>PACTO GLOBAL</th>
          <th>TEMA<br>MATERIAL</th>
          <th>ENFOQUE<br>(FINSA)</th>
          <th>EJE ESTRATÉGICO (FINSA)</th>
          <th>AÑO OBJETIVO Y/O<br>FRECUENCIA</th>
          <th>PROGRESO 2023</th>
        </tr>
        <tr><td>
            Medio Ambiente
          </td><td>
            Energía Verde
          </td><td>
            Negocio sostenible
          </td><td>
            Medio ambiente
          </td><td>
            <b>2032</b>
          </td><td style="text-align: left;">
            Paneles solares para áreas comunes del Parque Industrial FINSA Aguascalientes.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-03" class="odsdiv">
      <br><br>
      <img src="im/01/ods-7.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-9.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>PRINCIPIO DEL<br>PACTO GLOBAL</th>
          <th>TEMA<br>MATERIAL</th>
          <th>ENFOQUE<br>(FINSA)</th>
          <th>EJE ESTRATÉGICO (FINSA)</th>
          <th>AÑO OBJETIVO Y/O<br>FRECUENCIA</th>
          <th>PROGRESO 2023</th>
        </tr>
        <tr><td>
            Medio Ambiente
          </td><td>
            Energía Verde y Cambio Climático
          </td><td>
            Negocio sostenible
          </td><td>
            Medio ambiente
          </td><td>
            <b>2050</b>
          </td><td style="text-align: left;">
            Se iniciará proceso en 2024.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-04" class="odsdiv">
      <br><br>
      <img src="im/01/ods-6.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>PRINCIPIO DEL<br>PACTO GLOBAL</th>
          <th>TEMA<br>MATERIAL</th>
          <th>ENFOQUE<br>(FINSA)</th>
          <th>EJE ESTRATÉGICO (FINSA)</th>
          <th>AÑO OBJETIVO Y/O<br>FRECUENCIA</th>
          <th>PROGRESO 2023</th>
        </tr>
        <tr><td>
            Medio Ambiente
          </td><td>
            Agua
          </td><td>
            Negocio sostenible
          </td><td>
            Medio ambiente
          </td><td>
            <b>2030</b>
          </td><td style="text-align: left;">
            Se realiza promoción de mejores prácticas para reducir consumo.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-05" class="odsdiv" >
      <br><br>
      <img src="im/01/ods-11.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>PRINCIPIO DEL<br>PACTO GLOBAL</th>
          <th>TEMA<br>MATERIAL</th>
          <th>ENFOQUE<br>(FINSA)</th>
          <th>EJE ESTRATÉGICO (FINSA)</th>
          <th>AÑO OBJETIVO Y/O<br>FRECUENCIA</th>
          <th>PROGRESO 2023</th>
        </tr>
        <tr><td>
            Medio Ambiente
          </td><td>
            Gestión de residuos
          </td><td>
            Negocio sostenible
          </td><td>
            Medio ambiente
          </td><td>
            <b>2030</b>
          </td><td style="text-align: left;">
            Se cambió el modelo de botes de basura para recolección de residuos sólidos urbanos. Se están evaluando opciones.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-06" class="odsdiv" >
      <br><br>
      <img src="im/01/ods-1.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-4.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>PRINCIPIO DEL<br>PACTO GLOBAL</th>
          <th>TEMA<br>MATERIAL</th>
          <th>ENFOQUE<br>(FINSA)</th>
          <th>EJE ESTRATÉGICO (FINSA)</th>
          <th>AÑO OBJETIVO Y/O<br>FRECUENCIA</th>
          <th>PROGRESO 2023</th>
        </tr>
        <tr><td>
            Derechos Humanos
          </td><td>
            Vinculación con la Comunidad
          </td><td>
            Compromiso y cadena de valor
          </td><td>
            Comunidad
          </td><td>
            <b>Anualmente</b>
          </td><td style="text-align: left;">
            En 2023 se estableció un puesto enfocado a la coordinación de responsabilidad social y sostenibilidad.
En todas los proyectos sociales se están integrando datos.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-07" class="odsdiv" >
      <br><br>
      <img src="im/01/ods-13.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-16.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>PRINCIPIO DEL<br>PACTO GLOBAL</th>
          <th>TEMA<br>MATERIAL</th>
          <th>ENFOQUE<br>(FINSA)</th>
          <th>EJE ESTRATÉGICO (FINSA)</th>
          <th>AÑO OBJETIVO Y/O<br>FRECUENCIA</th>
          <th>PROGRESO 2023</th>
        </tr>
        <tr><td>
            Medio Ambiente
            <br>Derechos humanos
            <br>Derechos laborales
            <br>Anticorrupción
          </td><td>
            Cursos y capacitaciones
          </td><td>
            Compromiso y cadena de valor
          </td><td>
            Ética, legalidad y anticorrupción
          </td><td>
            <b>Anualmente</b>
          </td><td style="text-align: left;">
            En 2023 se tuvieron conferencias relacionadas con ética, inclusión, y aspectos ambientales.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-08" class="odsdiv">
      <br><br>
      <img src="im/01/ods-13.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-16.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>PRINCIPIO DEL<br>PACTO GLOBAL</th>
          <th>TEMA<br>MATERIAL</th>
          <th>ENFOQUE<br>(FINSA)</th>
          <th>EJE ESTRATÉGICO (FINSA)</th>
          <th>AÑO OBJETIVO Y/O<br>FRECUENCIA</th>
          <th>PROGRESO 2023</th>
        </tr>
        <tr><td>
            Medio Ambiente
            <br>Derechos humanos
            <br>Derechos laborales
            <br>Anticorrupción
          </td><td>
            Cursos y capacitaciones
          </td><td>
            Compromiso y cadena de valor
          </td><td>
            Talento y cultura corporativa
          </td><td>
            <b>Anualmente</b>
          </td><td style="text-align: left;">
            En 2024 tenemos programado publicar información ASG por redes socia.
          </td>
        </tr>
      </table>
    </div>


   <div id="ods-09" class="odsdiv" >
      <br><br>
      <img src="im/01/ods-11.png" style="width:100px; margin-right:10px;">
      
      <br><br>
      <table>
        <tr>
          <th>PRINCIPIO DEL<br>PACTO GLOBAL</th>
          <th>TEMA<br>MATERIAL</th>
          <th>ENFOQUE<br>(FINSA)</th>
          <th>EJE ESTRATÉGICO (FINSA)</th>
          <th>AÑO OBJETIVO Y/O<br>FRECUENCIA</th>
          <th>PROGRESO 2023</th>
        </tr>
        <tr><td>
            Medio Ambiente
          </td><td>
            Parques Industriales y Edificios Sostenibles
          </td><td>
            Innovación
          </td><td>
            Medio ambiente
          </td><td>
            <b>2024 en adelante</b>
          </td><td style="text-align: left;">
            Entre 2023 y 2024 se tienen 8 proyectos propios a certificarse LEED en los próximos meses. 
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-10" class="odsdiv">
      <br><br>
      <img src="im/01/ods-11.png" style="width:100px; margin-right:10px;">
      
      <br><br>
      <table>
        <tr>
          <th>PRINCIPIO DEL<br>PACTO GLOBAL</th>
          <th>TEMA<br>MATERIAL</th>
          <th>ENFOQUE<br>(FINSA)</th>
          <th>EJE ESTRATÉGICO (FINSA)</th>
          <th>AÑO OBJETIVO Y/O<br>FRECUENCIA</th>
          <th>PROGRESO 2023</th>
        </tr>
        <tr><td>
            Medio Ambiente
          </td><td>
            Parques Industriales y Edificios Sostenibles
          </td><td>
            Innovación
          </td><td>
            Medio ambiente
          </td><td>
            <b>2024 en adelante</b>
          </td><td style="text-align: left;">
            Se están evaluando opciones de otras certificaciones verdes para las naves de nuestros portafolios.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-11" class="odsdiv">
      <br><br>
      <img src="im/01/ods-13.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-1.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>PRINCIPIO DEL<br>PACTO GLOBAL</th>
          <th>TEMA<br>MATERIAL</th>
          <th>ENFOQUE<br>(FINSA)</th>
          <th>EJE ESTRATÉGICO (FINSA)</th>
          <th>AÑO OBJETIVO Y/O<br>FRECUENCIA</th>
          <th>PROGRESO 2023</th>
        </tr>
        <tr><td>
            Medio Ambiente
          </td><td>
            Gestión de riesgos
          </td><td>
            Responsabilidad y resiliencia
          </td><td>
            Medio ambiente
          </td><td>
            <b>Anualmente</b>
          </td><td style="text-align: left;">
            En 2023 nos adherimos al TCFD.
          </td>
        </tr>
      </table>
    </div>



    <div id="ods-12" class="odsdiv">
      <br><br>
      <img src="im/01/ods-15.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-1.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>PRINCIPIO DEL<br>PACTO GLOBAL</th>
          <th>TEMA<br>MATERIAL</th>
          <th>ENFOQUE<br>(FINSA)</th>
          <th>EJE ESTRATÉGICO (FINSA)</th>
          <th>AÑO OBJETIVO Y/O<br>FRECUENCIA</th>
          <th>PROGRESO 2023</th>
        </tr>
        <tr><td>
            Derechos humanos
          </td><td>
            Inclusión, Equidad, Diversidad y Derechos Humanos
          </td><td>
            Compromiso y cadena de valor
          </td><td>
            Talento y cultura corporativa
          </td><td>
            <b>Antes de 2026</b>
          </td><td style="text-align: left;">
            En diciembre 2023 llegamos a <b>28.1%.</b>
          </td>
        </tr>
      </table>
    </div>


  </div>
</div>


<style type="text/css">
  .tab1 { font-weight:500; text-align:right; padding-right:0.5em}
  .tab2 { font-weight:500; color:#09c9b6; }
  .tab3{width:12%; padding:0.5em;}
  .tab4{text-align:center}
  .tab5{font-weight:500; color:#00adef}
  .fachada{ width:32vw;position:absolute; bottom:-16vw;border-radius:50%; z-index:5 }
  @media(max-width:700px){
    .fachada{ width:70%;position:relative;margin:2em auto; bottom:2em; left:12%; z-index:5 }
  }
</style>

<div style="positon:relative;width:100vw; border-top:1px solid #f7f7f7; border-bottom:1px solid #f7f7f7; background-color:#f7f7f7;">
  <div style="width:80%; position:relative; margin:80px auto 60px auto; "  data-aos="fade-right" >
    <h3>Certificaciones</h3>
    <h1>LEED</h1>

    <div style="width:100; border-bottom:0px solid #00adef" class="flex1">
      <div class="w30">
        FINSA ofrece a sus clientes el servicio de construcción de edificios y seguimiento al proceso de certificación LEED, en donde los proyectos son llamados “Nuevas Construcciones”. 
      </div>
      <div class="w60">

        <div style="color:#00adef; margin:2em auto;">
        TOTAL DE PROYECTOS CONSTRUIDOS POR FINSA CON CERTIFICACIÓN LEED, DESDE 2010: 
        </div>

        
        <table>
          <tr>
            <td class="tab4">
              <span class="counter" style="font-size:3.2em">33</span>
            </td>
            <td class="tab5">
              EQUIVALENTES A UNA SUPERFICIE TOTAL certificada: 597,489.03 m<sup>3</sup>
            </td>
          </tr>

          <tr>
            <td class="tab4">
              <span class="counter" style="font-size:3.2em">10</span>
            </td>
            <td class="tab5">
              PROYECTOS “NUEVAS CONSTRUCCIONES”
            </td>
          </tr>

          <tr>
            <td class="tab4">
              <span class="counter" style="font-size:3.2em">12</span>
            </td>
            <td class="tab5">
              PROYECTOS “NÚCLEO Y ENVOLVENTE” 
            </td>
          </tr>

           <tr>
            <td class="tab4">
              <span class="counter" style="font-size:3.2em">11</span>
            </td>
            <td class="tab5">
              PROYECTOS “NÚCLEO Y ENVOLVENTE” PROGRAMA VOLUMEN DE LEED 3
            </td>
          </tr>
        </table>
        
<p><br></p>


        <p style="color:#00adef; font-size:1.2em" data-aos="fade-right" data-aos-duration="3000">
          NIVELES DE CERTIFICACIÓN OBTENIDOS: 
        </p>

       

        <table>
          <tr>
            <td class="tab3">
              <img src="im/leed-gold.png" style="width:100%">
            </td>
            <td class="tab4">
              <span class="counter" style="font-size:3.2em">17</span>
            </td>
            <td class="tab5">
              PROYECTOS NIVEL ORO
            </td>
          </tr>

          <tr>
            <td class="tab3">
              <img src="im/leed-silver.png" style="width:100%">
            </td>
            <td class="tab4">
              <span class="counter" style="font-size:3.2em">12</span>
            </td>
            <td class="tab5">
              PROYECTOS NIVEL PLATA
            </td>
          </tr>

          <tr>
            <td class="tab3">
              <img src="im/leed-certified.png" style="width:100%">
            </td>
            <td class="tab4">
              <span class="counter" style="font-size:3.2em">4</span>
            </td>
            <td class="tab5">
              PROYECTOS NIVEL CERTIFICADO
            </td>
          </tr>
        </table>

      </div>
    </div>

  </div>
</div>





<div style="width:100%; overflow:visible ;position:relative; background-color:#E9F2F9; border-top:1px solid #E9F2F9; border-bottom:1px solid #E9F2F9;" class="flex1">
  
    <div class="w60">
      <div style="width:80%; position:relative; margin:80px auto 60px auto; "  data-aos="fade-right" >
        <p style="color:#00adef; font-size:1.2em" data-aos="fade-right" data-aos-duration="3000">
          IMPACTOS POSITIVOS GENERADOS POR LA MAYORÍA DE LOS PROYECTOS CERTIFICADOS:
        </p>

        <div data-aos="fade-down" data-aos-duration="3000">
          <span class="counter" style="font-size:3em">9,288.62</span>
          <span style="font-size:2em"> Ton CO<sup>2</sup></span>
        </div>
        <span class="tab2">
          ENERGÍA MEDIDA EN EQUIVALENCIA DE TONELADAS DE CO<sup>2</sup>
        </span>

        <div data-aos="fade-down" data-aos-duration="1600" style="margin-top:30px">
          <span class="counter" style="font-size:3em">6,696.65</span>
          <span style="font-size:2em"> Ton CO<sup>2</sup></span>
        </div>
        <span class="tab2">
          RESIDUOS DE BASURA DESVIADOS
        </span>

        <div data-aos="fade-down" data-aos-duration="800" style="margin-top:30px">
          <span class="counter" style="font-size:3em">10'483,667.12</span>
          <span style="font-size:2em"> Gal</span>
        </div>
        <span class="tab2">
          DE AGUA AHORRADOS
        </span>
    </div>
  </div>
  <div class="w40" style="position:relative; overflow:visible;">
    <img data-aos="flip-down" src="im/01/fachada.jpg" class="fachada">
  </div>
</div>




<div style="width:100%; position:relative; background-color:#F4F8FC; border-top:1px solid #F4F8FC; border-bottom:1px solid #F4F8FC;" >
  <div style="width:80%; position:relative; margin:80px auto 60px auto; "  data-aos="fade-right" >
    <div class="w60">

    <p>
      <span style="color:#00adef">
        PROYECTOS EN PROCESO DE CERTIFICACIÓN LEED:
      </span>
    </p> 
        
        <table style="width:fit-content; max-width:600px;text-align:left">
          <tr>
            <td style="padding-right:1em">
              <b>
              / 11 PROYECTOS 
              </b>
            </td>
            <td class="tab2">
              PENDIENTES
            </td>
          </tr>
          <tr>
            <td style="padding-right:1em">
              <b>
              / 4 PROYECTOS
              </b>
            </td>
            <td class="tab2">
              “NUEVAS CONSTRUCCIONES” 
            </td>
          </tr>
          <tr>
            <td style="padding-right:1em">
              <b>
              / 7 PROYECTOS 
              </b>
            </td>
            <td class="tab2">
            “NÚCLEO Y ENVOLVENTE”<br>PROGRAMA VOLUMEN DE LEED VERSIÓN 4
            </td>
          </tr>
        </table>
          
        <p data-aos="fade-left" data-aos-duration="3000">
          <span class="counter" style="font-size:3em">298,911.14</span> 
          <span style="font-size:2em"> m<sup>2</sup></span>
        </p>

        <p style="color:#00adef; font-size:1.2em" data-aos="fade-right" data-aos-duration="3000">
          SUPERFICIE EN PROGRESO DE CERTIFICACIÓN
        </p>



    </div>
  </div>
</div>


        

HTML;



//$ocultar = 1;
$prev1 = "./";
$next1 = "impacto-ambiental";

require_once "footer.php";


?>