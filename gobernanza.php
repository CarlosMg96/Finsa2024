<?php
error_reporting(E_ALL);

$thispage = "gobernanza";

require_once "header.php";


echo<<<HTML
<style type="text/css">
  .portadafoto { height:  50vw; width:100vw; background-image:url(im/03/portada.jpg); background-position: bottom left; background-size: cover; position:relative; overflow:hidden}
  
    .portadacurved {height:  49vw; width:47vw; position:absolute;right:0;bottom:0;}
  .portadacurve {height:  49vw; width:26vw; position:absolute;right:30.4vw;bottom:0;}
  .portadapeople { width:27vw; position:absolute;left:15vw;bottom:0;}
  .portadainforme { width:20vw; position:absolute;right:9vw;top:23vw;}
  .trascender {position: relative; margin-left:0vw; margin-top:3vw; width:20vw}
  .toptext { position: relative; margin-top:5vw; margin-left:4vw; font-size:1.2vw; width:20vw }
  .descargar-capitulo {width:240px; position:relative; top:3vw; margin-left:4vw;}
  
  .foto3 {position:absolute;width:110%; border-radius:50%; right:-40%; bottom:-35%}
  .or60 { width:60vw; }

  

  @media(max-width:700px){
    
    .foto3 {position:relative;width:100%; border-radius:50%; left:0%; bottom:5%; top:5%;}
    .or60 { width:80vw; }
  }

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
  
  <img src="im/03/01-trascender.png"   class="trascender" style="" data-aos="fade-down">
  <div class="toptext">
    <p data-aos="fade-right">
      Trabajamos de forma íntegra, en cumplimiento con la legislación, manteniendo un crecimiento sostenible.
    </p>
  </div>

  <a target="_new" href="pdf/IAS_Finsa_2023_Capitulo-4.pdf">
    <img src="im/descarga-capitulo.svg" class="descargar-capitulo" style="" data-aos="flip-down">
  </a>

   <div class="header-text">

  <div data-aos="fade-right" style="position: absolute;right:10vw; top:15.7vw; font-size:14vw; font-weight: 600;">
  gober</div>
  <div data-aos="fade-up" style="position: absolute;   right:16vw; top:27.6vw; font-size:14vw; font-weight: 600;">
  nanza</div>
    </div>
  
</div>



<div style="positon:relative;width:100vw; border-top:1px solid #E9F2F9; border-bottom:1px solid #E9F2F9; background-color:#E9F2F9;">

  <div style="width:70%; position:relative; margin:80px auto 60px auto; text-align:center">
    <h3>Gobierno</h3>
    <h1>CORPORATIVO</h1>
    <p><br><br></p>
    <p data-aos="fade-up">
      El Consejo de Administración es el máximo órgano de gobierno, el cual tiene la facultad de tomar decisiones para asegurar el buen funcionamiento de FINSA, de establecer los objetivos estratégicos, financieros, ambientales y sociales, así como de evaluar el desempeño anual de la organización.
    </p>
  </div>

</div>

<style type="text/css">
  .or  {  list-style: none; margin-left: 0; padding-left: 0;  }
  .or  li {  padding-left: 1em;  text-indent: -0.8em; margin-bottom:0.5em;}
  .or  li:before { content: "/"; padding-right: 3px;  color:#ff8f43; font-weight:800;}
 .eqdir {width:70vw;}
 @media(max-width:700px){
  .eqdir {width:90vw;}
 }
</style>


<div style="width:100vw; background-color:#fff; border-top:1px solid white; border-bottom:1px solid #F7F7F7;">
  <div style="width:100vw; background-color:#ff8f43; position: absolute; height:30vh">
  </div>
  <div  class="eqdir" data-aos="flip-right" style=" margin:8vw auto 0vw auto; background-color:#fff; padding:3em 4em; box-shadow: 8px 8px 10px -2px rgba(0,0,0,0.35);" class="flex1">
      <div class="w40">
        <h3>Equipo</h3>
        <h1>DIRECTIVO</h1>
        <p>
          Nuestro equipo directivo está conformado por profesionales con un amplio conocimiento, experiencia y una trayectoria en el sector inmobiliario, de la construcción y desarrollo industrial. El Consejo de Administración ha delegado en los directores ejecutivos la responsabilidad de analizar las tendencias del mercado, para contribuir al desarrollo sostenible de la compañía.
        </p>
      </div>
      <div class="w40">
        
        <p>Se integra por:</p>
        <p>
<ul class="or">        
  <li>
    Dirección General
  </li>
  <li>
    Vicepresidencia de Finanzas y Administración
  </li>
  <li>
    Vicepresidencia Técnica
  </li>
  <li>
    Vicepresidencia de Desarrollo de Nuevos Negocios y Relaciones Públicas
  </li>
  <li>
    Vicepresidencia Jurídica
  </li>
  <li>
    Vicepresidencia de Capital Humano y Desarrollo Sostenible
  </li>
  <li>
    Vicepresidencia de Estrategia, Imagen y Comunicación Corporativa
  </li>
</ul>

 
        </p>
      </div>

  </div>
  
</div>

<div style="position:relative;width:100vw;  border-top:1px solid transparent; border-bottom:1px solid #fff; background-color:transparent;
">

  <img src="im/00/whitecurve.svg" style="width:30vw; top:0px; right:0px; position:absolute; border:0px solid purple" data-aos="fade-down" >  
  <div style="width:80%; margin:30px auto;" class="flex1">
    <div class="w30">
      <div>
      <h3>Gestión de</h3>
      <h1>RIESGOS</h1>
      </div>
      <p></p>
      <p data-aos="fade-right">
        Durante 2023, incorporamos la Política de Gestión de Riegos, y aplicando la metodología correspondiente, realizamos un análisis para identificar los riesgos estratégicos, operativos, de cumplimiento, y financieros, conformándose además el Comité de Riesgos como órgano intermedio de apoyo al Consejo de Administración.
      </p>
      <p></p>
      <h1>CIBERSEGURIDAD</h1>
      <p data-aos="fade-left">
      En  FINSA ejecutamos un análisis de riesgos de seguridad, para determinar las amenazas que podemos sufrir y estar preparados para los ciberataques y la intromisión a nuestros sistemas de tecnologías de información.
      </p >
      <p data-aos="fade-right">
Contamos con una serie de controles críticos que nos permiten definir medidas de seguridad para preservar la confidencialidad, integridad y disponibilidad de la infraestructura, los procesos y las aplicaciones con las que operamos.
      </p>
    </div>
    <div class="w55">
      <img src="im/03/circle-01.jpg" style="width:80%; border-radius:50%" data-aos="fade-up">
    </div>
  </div>
</div>



<div style="positon:relative;width:100vw; min-height:70vh; border-top:1px solid #F7F7F7; border-bottom:1px solid #F7F7F7; background-color:#F7F7F7;"  >
  
    <div style="width:100%; height:100%; min-height:70vh; " class="flex1">

      <div style="width:30%; height:100%; min-height:70vh; ; border:0px solid purple" class="flex5">
        <img data-aos="fade-right" src="im/03/foto-2.jpg" style="position:relative;width:120%; margin:auto; margin-left:-20%; border-radius:50%">
      </div>

      <div style="width:70%;" class="flex5">
        <img src="im/01/curva.png" style="height:70vh; position:absolute">
        <div style="width:70%; margin:auto;">
          <h3>Cumplimiento</h3>
          <h1 style="text-transform:uppercase;" data-aos="fade-up" >Normativo</h1>
          <p data-aos="fade-left">
          Contamos con un departamento legal que es responsable de revisar todos los requerimientos que debemos cumplir en los temas legales, fiscales, ambientales, laborales y contractuales. 
          </p>
          <p data-aos="fade-left" data-aos-duration="2500">
Además, hemos definido una serie de políticas internas para cumplir con la legislación que nos compete y que contienen lineamientos específicos que cada colaborador y socio de negocio debe cumplir.
          </p>
        </div>
      </div>
    </div>

</div>




<div style="positon:relative;width:100vw; border-top:1px solid #E9F2F9; border-bottom:1px solid #E9F2F9; background-color:#E9F2F9;">

  <div style="width:70%; position:relative; margin:80px auto 60px auto; ">
    <p data-aos="fade-right">
      <h3>Ética y</h3>
      <h1>ANTICORRUPCIÓN</h1>
    </p>
    <p><br></p>
    <p data-aos="fade-up">
      Para continuar con el Plan de Fortalecimiento de la Cultura de la Legalidad, en 2023 revisamos, actualizamos y rediseñamos nuestro Código de Ética y Conducta.
      </p>
      <p data-aos="fade-down">
Nuestro Código de Ética y Conducta contiene una sección para explicar cómo identificamos y gestionamos todos los riesgos relacionados con la corrupción, el soborno y el fraude, así como un ejemplo sobre una situación que implica incumplir con los lineamientos de FINSA.
    </p>
  </div>

</div>






<div style="positon:relative;width:100vw; border-top:1px solid #fff; border-bottom:1px solid #fff; background-color:#fff;">
  
  <div style="width:70%; position:relative; margin:80px auto 40px auto; ">
    <div data-aos="fade-right">
      <h3>Línea de</h3>
      <h1>DENUNCIA</h1>
      
    </div>

  </div>

  <div style="width:70%; position:relative; margin:0px auto 60px auto; " class="flex1">
    <div class="w60">
    
    
    <p data-aos="fade-up">
      A finales de 2023 lanzamos nuestra nueva línea de denuncia, por medio de la cual los colaboradores pueden compartir sus inquietudes e informar cualquier irregularidad presentada en la empresa, como conductas inapropiadas, incumplimientos a las políticas y al Código de Ética y Conducta, acoso, conflictos de interés, discriminación y actos de corrupción y soborno, entre otros.
      </p>
    
    </div>


    <div style="margin-bottom:40px" class="w30 flex4" >
        <div style="position:relative; text-align:right; border:0px solid yellow;">
          <img src="im/diag1.svg" style="height:100%">
        </div>
        <div style="width:90%; padding-left:23px;color:#00adef; text-transform: uppercase; position:reative">
          En 2023, se recibieron 28 denuncias a través de la línea de denuncias a las cuales dimos seguimiento al 100%
          <br>
        </div>
      </div>

<!--
    <div class="w30">
      <p data-aos="fade-left" style="color:#00adef; text-transform: uppercase; ">
      En 2023, se recibieron 28 denuncias a través de la línea de denuncias a las cuales dimos seguimiento al 100%
      </p>
    </div>
-->

  </div>

</div>



<div style="width:100vw; background-color:#f7f7f7; border-top:1px solid #f7f7f7; border-bottom:1px solid #F7F7F7;">
  <div style="width:100vw; background-color:#ff8f43; position: absolute; height:30vh">
  </div>
  <div  data-aos="flip-right" style=" margin:8vw auto 12vw auto; background-color:#fff; padding:3em 4em; box-shadow: 8px 8px 10px -2px rgba(0,0,0,0.35);" class="flex1 or60">
      <div class="w40">
        <p data-aos="fade-left" style="color:#00adef; text-transform: uppercase; ">
          <b>los mejores proveedores</b>
        </p>
        
        <p>
        “Proveedores Destacados” es el nombre del evento donde FINSA premia a sus mejores proveedores, aquellos que han trabajado con excelencia y con los más altos estándares de calidad.
        </p>
        <p>
Este año se reconocieron a 16 empresas proveedoras, pertenecientes a cada una de las categorías que evaluamos durante el año, entre las que destaca “Proveedor en Desarrollo”, que permite impulsar a las pequeñas y medianas empresas, que forman parte de nuestra cadena de proveeduría.
        </p>
      </div>
      <div class="w40" style="position:relative">
        <img src="im/03/foto-3.jpg" class="foto3" style="z-index:20;">
      </div>

  </div>
  
</div>

<style type="text/css">
  .minif{ width:15vw; border-radius:50%; position:absolute; top:-5vw;left:8vw; }
  @media(max-width:700px){
    .minif{ width:50vw; border-radius:50%; position:relative; top:5vw;left:20vw; }
  }
</style>

<div style="width:100vw; position:relative; background-color:#f7f7f7; border-top:1px solid #f7f7f7; border-bottom:1px solid #F7F7F7;">
  <img src="im/03/foto-4.jpg" data-aos="fade-down" class="minif">
  <div style="width:80vw; position: relative; margin:80px auto; text-align: center;">
    
    <div style="margin-top:10vw" data-aos="fade-right">
    <h3>Índice de</h3>
    <h1>Desarrollo Industrial</h1>
    </div>
    <p data-aos="fade-up">
    En 2023 creamos nuestro Primer Índice de Desarrollo Industrial (IDI), cuyo objetivo es evaluar el nivel de crecimiento industrial de todos los estados del País e identificar cuáles cuentan con una mejor infraestructura para capitalizar las oportunidades de desarrollo y establecer estrategias para trabajar con aquellas que están iniciando el proceso.  
    </p>

  </div>
</div>






HTML;


//$ocultar = 1;
$prev1 = "impacto-social";
$next1 = "./";

require_once "footer.php";


?>