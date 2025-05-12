<?php
error_reporting(E_ALL);

$thispage = "impacto-social";

require_once "header.php";


echo<<<HTML
<style type="text/css">
  .portadafoto { height:  50vw; width:100vw; background-image:url(im/04/portada.jpg); background-position: bottom left; background-size: cover; position:relative; overflow:hidden}
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
  
  <img src="im/04/01-trascender.png" class="trascender" style="" data-aos="fade-down">
  <div class="toptext">
    <p data-aos="fade-right">
      En FINSA, proporcionamos a nuestros colaboradores las mejores oportunidades de desarrollo profesional y personal, fomentando el desarrollo de las comunidades donde operamos.
    </p>
  </div>

  <a target="_new" href="pdf/IAS_Finsa_2023_Capitulo-3.pdf">
  <img src="im/descarga-capitulo.svg?v=1" class="descargar-capitulo" style="" data-aos="flip-down">
  </a>

   <div class="header-text">

  <div data-aos="fade-down" style="position: absolute; right:11vw; top:10vw; font-size:6vw; font-weight: 600;">
  impacto</div>
  <div data-aos="fade-right" style="position: absolute; right:11.8vw; top:12.2vw; font-size:12vw; font-weight: 600;">
  so</div>
  <div data-aos="fade-up" style="position: absolute;   right:8vw; top:22.4vw; font-size:12vw; font-weight: 600;">
  cial</div>
  </div>

</div>
  


<div style="position:relative;width:100vw;  border-top:1px solid transparent; border-bottom:1px solid #f7f7f7; background-color:#f7f7f7;
">

  <div style="width:80%; margin:30px auto;">
      
      <h3>Capital</h3>
      <h1>HUMANO</h1>
      
  </div>

<style type="text/css">
  .divcap { position:absolute; bottom:0; }
  .hm{margin:40px auto 80px auto; width:34%}
  .icns {width:80%; }
  @media(max-width:700px){
    .divcap { position:relative;}
    .hm{width:74%}
    .icns {width:99%; }
  }
</style>

  <div style="width:80%; margin:30px auto;" class="flex1">
    <div class="w30">
      
      <p></p>
      <p data-aos="fade-right">
        Uno de los pilares más fuertes de nuestra empresa lo constituye nuestro capital humano, integrado por los conocimientos, la experiencia, las habilidades y el talento de 707 hombres y mujeres, quienes día a día colaboran para que FINSA opere de forma exitosa y mantenga su posicionamiento en el mercado.
      </p>
      
    </div>
    <div class="w55" style="position:relative">
      <div class="divcap">
        <span style="font-size:3em" class="counter">707</span>
        <br>
        <span class="blu1">colaboradores</span>
        <br><br>
        <span style="font-size:3em" class="counter">89</span>
        <br>
        <span class="blu1">nuevas contrataciones en 2023</span>
      </div>
    </div>
  </div>

  <div class="w35 hm" style=" position:relative;" class="flex1">
    <img src="im/04/hombres.png" style="width:60%" data-aos="flip-right">
    <img src="im/04/mujeres.png" style="width:33%" data-aos="flip-left">
  </div>
</div>



<div style="position:relative;width:100vw;  border-top:1px solid transparent; border-bottom:1px solid #fff; background-color:white;
">

  <img src="im/00/whitecurve.svg" style="width:30vw; top:0px; right:0px; position:absolute; border:0px solid purple" data-aos="fade-down" >  
  <div style="width:80%; margin:30px auto;" class="flex1">
    <div class="w30">
      <div>
      <h1 data-aos="fade-down">PRESTACIONES</h1>
      </div>
      <p></p>
      <p data-aos="fade-right">
        Queremos que nuestros colaboradores encuentren en FINSA el mejor lugar para trabajar y puedan crecer profesionalmente, por lo que hemos diseñado un paquete de prestaciones y beneficios, que les generen oportunidades de desarrollo personal y familiar y contribuir a mejorar su calidad de vida.
      </p>
      
    </div>
    <div class="w55">
      
    </div>
    <img data-aos="fade-up" src="im/04/icons.png" class="icns" style="margin:20px auto;">
  </div>
</div>


<div style="position:relative;width:100vw;  border-top:1px solid transparent; border-bottom:1px solid #E9F2F9; background-color:#E9F2F9;
">

  <img src="im/whitecurve-2.png" style="width:30vw; top:0px; left:0px; position:absolute; border:0px solid purple" data-aos="fade-down" >  
  <div style="width:80%; margin:30px auto;" class="flex1">
    <div class="w40">
      <br>
    </div>
    <div class="w50">
      <h3>Salud y seguridad de</h3>
      <h1>NUESTROS COLABORADORES</h1>
      <p>
        Nos preocupamos por ofrecer las mejores condiciones de seguridad e higiene en nuestras instalaciones, como una forma de proteger y cuidar la salud de nuestros colaboradores, por lo que este año organizamos la Primera Semana de la Salud cuyo objetivo fue promover el bienestar y la salud de todos los colaboradores del parque industrial FINSA Santa Catarina y de las oficinas corporativas.
      </p>
    </div>
  </div>
  <div style="width:80%; margin:30px auto;" class="flex1">
    <div class="w65">
      <h3>Desarrollo</h3>
      <h1>PROFESIONAL Y LABORAL</h1>
      <p>
        Promover el desarrollo y crecimiento profesional de todos nuestros colaboradores es un compromiso que adquirimos con ellos cuando se integraron a nuestro equipo laboral. Cada año los invitamos a participar en los cursos, talleres y pláticas enfocadas en el desarrollo de competencias y habilidades, que ofrecemos como parte de nuestro programa de capacitación.
      </p>

      <div style="width:100%; margin-bottom:40px" class="flex4" >
      <div style="position:relative; text-align:right; border:0px solid yellow;">
        <img src="im/diag1.svg" style="height:100%">
      </div>
      <div style="width:90%; padding-left:23px;color:#00adef; text-transform: uppercase; position:reative">
        En 2023 se impartieron más de 12 cursos y un diplomado a colaboradores de FINSA, sumando 2 mil 768 horas de capacitación.
        <br>
      </div>
    </div>


    </div>



    <div class="w30 flex5">
        <img src="im/04/foto-1.jpg" style="width:90%; border-radius:50%">
    </div>
  </div>
</div>



<div  style="positon:relative;width:100vw; min-height:70vh; border-top:1px solid #fff; border-bottom:1px solid #fff; background-color:#fff;"  >
  
    <div style="width:100%; height:100%; min-height:70vh; margin-top:4em " class="flex1">

      <div class="w40" style=" height:100%; min-height:70vh; text-align:center; border:0px solid purple" class="flex5">
        <img src="im/04/foto-2.jpg" style="position:relative;width:80%; margin:auto; border-radius:50%">
      </div>

      <div class="w60" style="" class="flex5">
        <img src="im/01/curva.png" style="height:100%; position:absolute">
        <div style="width:70%; margin:auto;">
          <h3>Comunidad y</h3>
          <h1 style="text-transform:uppercase;" data-aos="fade-up" >Responsabilidad Social</h1>
          <p>
          En 2023, participamos en 15 programas que ayudaron a causas sociales y ambientales, apoyando y/o colaborando con más de 30 instituciones, proyectos u organismos, buscando cumplir con los compromisos de nuestra Política Ambiental, Social y Gobernanza (ASG), la Política de Derechos Humanos, nuestro Código de Ética y Conducta y del Pacto Mundial de las Naciones Unidas.
          </p>
          <p>
Durante 2023, beneficiamos a más de 8 mil personas, con las distintas acciones que realizamos como parte de nuestro compromiso y responsabilidad social.
<br><br>
          </p>
        </div>
      </div>
    </div>

</div>






<div style="position:relative;width:100vw;  border-top:1px solid transparent; border-bottom:1px solid #F7F7F7; background-color:#F7F7F7;
">

  <img src="im/whitecurve-3.png" style="width:50vw; bottom:0px; right:0px; position:absolute; border:0px solid purple" data-aos="fade-down" >  
  <div style="width:80%; margin:80px auto 10px auto;" class="flex1">
    <div class="w25">
      <h3>Fundación</h3>
      <h1>FINSA</h1>
    </div>
    <div class="w70">
      Desde hace 14 años, Fundación FINSA impulsa la educación de niños y jóvenes a través de un programa de becas a estudiantes con alto rendimiento académico, que viven en situaciones económicas adversas.
      <p>
En 2023, gracias a los fondos recaudados y a las alianzas con instituciones, se otorgaron 409 becas en todos los niveles escolares, desde preescolar hasta universidad, lo que significó un incremento del 100 por ciento, comparado con el año anterior. Los niños y jóvenes beneficiados, 164 hombres y 245 mujeres, residen en los estados de Coahuila, Nuevo León, Puebla y Tamaulipas.
      </p>
    </div>
  </div>

  <div style="width:80%; margin:10px auto 100px auto;" class="flex1">
    <div class="w70">
        <div style="width:98%; background-color:white; padding:20px; border-radius:8px; box-shadow: 8px 8px 10px -2px rgba(0,0,0,0.35);">
          <span class="blu1">Alianza con Fundación BBVA</span>
          <br>
          <p data-aos="fade-down">
          En noviembre de 2023 Fundación FINSA y Fundación BBVA firmaron un convenio para destinar en conjunto $1 millón 300 mil pesos anuales para brindar becas a estudiantes universitarios. 
          </p>
          <p data-aos="fade-up">
            Por medio de esta alianza se beneficiarán durante la carrera universitaria 31 estudiantes, que iniciaron sus estudios en distintas instituciones de Ciudad Victoria, Matamoros, Nuevo Laredo, Reynosa, Saltillo y Puebla.
          </p>
          <div style="width:90%; margin:40px auto 12px" class="flex1">
            <img src="im/04/fundacion-finsa.png" style="width:35%" data-aos="flip-right">
            <img src="im/04/fundacion-bbva.png" style="width:35%" data-aos="flip-left">
          </div>
        </div>
    </div>
    <div class="w25">
    </div>
  </div>

</div>

HTML;


//$ocultar = 1;
$prev1 = "impacto-ambiental";
$next1 = "gobernanza";

require_once "footer.php";


?>