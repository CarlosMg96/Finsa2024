<?php
error_reporting(E_ALL);

$thispage = "carta-del-presidente";

require_once "header.php";


echo<<<HTML
<style type="text/css">
  .portadafoto { height:  50vw; width:100vw; background-image:url(im/carta/portada.jpg); background-position: bottom left; background-size: cover; position:relative; overflow:hidden}
  .portadacurved {height:  49vw; width:47vw; position:absolute;right:0;bottom:0;}
  .portadacurve {height:  49vw; width:26vw; position:absolute;right:30.4vw;bottom:0;}
  .portadapeople { width:27vw; position:absolute;left:15vw;bottom:0;}
  .portadainforme { width:20vw; position:absolute;right:9vw;top:23vw;}
  .foto2 { width:40%; border-radius:50%; position:absolute; right:0; bottom:0; }
  .toptext1 { position: relative; top:15vw; left:4vw; font-size:1.2vw; width:20vw }
  @media(max-width:700px){
    .foto2 { width:60%; border-radius:50%; position:relative; margin-left:20%;}
    .toptext1 {  font-size:1.2vh; width:40vw; top:10vw }
    .portadafoto { height:  80vw;}
    .diag1{display:none}
  }
</style>

<div style="width:100vw; height:60px; ">
</div>
<div class="portadafoto" data-aos="zoom-out">
  
  
  <div class="toptext1">
    <p >
      <h3 data-aos="fade-right" style="color:white">Carta del Presidente y</h3>
      <h1 data-aos="fade-up" style="color:white">DIRECTOR GENERAL</h1>
    </p>
  </div>

  <a target="_new" href="pdf/IAS_Finsa_2023_CartaPresidente.pdf">
  <img src="im/carta/descarga-carta.svg" style="cursor:pointer; width:300px; max-width:80%; position:relative; top:15vw; left:4vw;" data-aos="flip-down">
  </a>

</div>

<div style="position:relative;width:100vw;  border-top:1px solid #E9F2F9; border-bottom:1px solid #E9F2F9; background-color:#E9F2F9;
">

  <img src="im/02/bottom-curve.png" style="position: absolute; bottom:0; left:0; width:50vw" data-aos="fade-up" >

  <div style="width:80%; position:relative; margin:80px auto 60px auto; border:0px solid orange " >
    <div class="w60" style=" color:#00adef" >
      En un contexto global caracterizado por continuos cambios y desafíos, reafirmamos nuestro sólido compromiso con la ética y la sostenibilidad empresarial. Buscamos ser agentes de cambio con un impacto positivo, infundiendo principios éticos en todos los aspectos de nuestra labor diaria y manteniendo nuestro compromiso con la integración de criterios ASG (Ambientales, Sociales y de Gobernanza) en todas nuestras operaciones. 
    </div>
  </div>

  <div style="width:80%; position:relative; margin:80px auto 60px auto; border:0px solid orange " class="flex1">
    <div class="w40 flex5">
      <p>
      Integrar una comunidad ética es un esfuerzo constante, para ello confiamos en que cada miembro de FINSA sea una fuente de confianza e inspiración. Reconocemos que nuestra reputación y responsabilidad se forjan a partir de cada decisión tomada diariamente, y al hacerlo de manera adecuada, nos situamos en un círculo virtuoso de grandes beneficios. Entendemos que esta es la forma tangible de demostrar nuestros valores en un compromiso socialmente responsable, en concordancia con las mejores prácticas de gobierno corporativo en el mercado inmobiliario industrial global. 
      </p>
    </div>
    <div class="w40 flex5">
      <img src="im/carta/foto-1.jpg" style="width:80%; border-radius:50%">
    </div>
  </div>

  <div style="width:80%; position:relative; margin:80px auto 60px auto; border:0px solid orange " class="flex1">
    <div class="w40 flex5">
      <p>
      Adicionalmente, el fenómeno de la relocalización de empresas o “nearshoring” ha promovido los aspectos ASG en las empresas, generando dinamismo en el mercado inmobiliario industrial y proporcionando oportunidades únicas para el desarrollo de espacios destinados a la manufactura y la logística global. 
      </p>
    </div>
    <div class="w40">
      <img src="im/carta/foto-2.jpg" class="foto2" style="">
    </div>
  </div>
    
    <div style="width:100%; margin:40px auto" class="flex4" >
      <div class="diag1" style="position:relative; text-align:right; border:0px solid yellow;">
        <img src="im/diag1.svg" style="height:100%">
      </div>
      <div style="width:80%; padding-left:23px;color:#00adef; text-transform: uppercase; position:reative">
        Nuestros parques industriales se posicionan como ejes estratégicos que facilitan la infraestructura para atraer inversiones, considerando no solo la productividad y rentabilidad, sino también el propósito de generar valor a través de estrategias y soluciones para contrarrestar el cambio climático y reducir nuestra huella de carbono.
        <br>
      </div>
    </div>    
    
    <div style="width:80%; position:relative; margin:80px auto 60px auto; border:0px solid orange " class="flex1">
      <div class="w40 flex5">
      <img src="im/carta/foto-3.jpg" style="width:80%; border-radius:50%" data-aos="fade-down">
    </div>
      <div class="w40 flex5">
        <p data-aos="fade-right" data-aos-duration="400">
        Contribuimos con la misión de las empresas que han establecido el objetivo de descarbonizarse para contribuir a los Objetivos de Desarrollo Sostenible, desde el uso de energías eficientes y limpias hasta la implementación de las mejores prácticas sostenibles.
        </p>
        <p data-aos="fade-left" data-aos-duration="800">
          Todo esto es posible gracias a los cuatro ejes estratégicos de nuestro modelo de sostenibilidad: Talento y Cultura Corporativa, Medio Ambiente, Ética y Legalidad, así como la Comunidad, con un enfoque en la gestión de riesgos, innovación, compromiso y cadena de valor, la responsabilidad y resiliencia, así como el sentido sostenible del negocio. 
        </p>
        <p data-aos="fade-right" data-aos-duration="1200">
        Durante el año 2023, nuestras prácticas de sostenibilidad superaron con éxito los desafíos, fortaleciendo la confianza de nuestros grupos de interés. Expreso mi reconocimiento y agradecimiento a todos los integrantes de FINSA por su firme compromiso con la ética y la sostenibilidad empresarial, y por su determinación para operar de manera responsable en un mundo en constante transformación.
        </p>
        
        <p data-aos="fade-left" data-aos-duration="2000">
        <span style="color:#002855; font-weight:600;">Sergio Argüelles González</span>
        <br>
        <span style="font-size:0.8em">
        Presidente del Consejo de Administración y Director General
        </span>
        </p>
      </div>
    
  </div>


  </div>




HTML;


//$ocultar = 1;
$prev1 = "nuestra-empresa";
$next1 = "impacto-social";

require_once "footer.php";


?>