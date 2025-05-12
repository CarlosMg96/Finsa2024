<?php
error_reporting(E_ALL);

require_once "header.php";


echo<<<HTML
<style type="text/css">
  .portadafoto { height:  47vw; width:100vw; background-image:url(im/00/portada-foto.jpg); background-position: bottom left; background-size: cover; position:relative; overflow:hidden}
  .portadacurved {height:  49vw; width:47vw; position:absolute;right:0;bottom:0;}
  .portadacurve {height:  49vw; width:26vw; position:absolute;right:30.4vw;bottom:0;}
  .portadapeople { width:27vw; position:absolute;left:15vw;bottom:0;}
  .portadainforme { width:20vw; position:absolute;right:9vw;top:23vw;}
  @media(max-width:700px){
    .portadafoto { height:112vw}
    .portadapeople {width:55vw;left:5vw;}
    .portadainforme { width:55vw; }
    .portadacurved , .portadacurve { height:112vw; }
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
  <div data-aos="fade-down" style="position: absolute; color:white; left:11vw; top:2vw; font-size:6vw; font-weight: 600;">
  Siguiendo</div>
  <div data-aos="fade-right" style="position: absolute; color:white; left:22.8vw; top:7.3vw; font-size:4.9vw; font-weight: 600;">
  la ruta de la</div>
  <div data-aos="fade-up" style="position: absolute; color:white; left:21vw; top:10.5vw; font-size:8vw; font-weight: 600;">
  sostenibilidad</div>

</div>

<style type="text/css">
  .diagtxt { padding-left:14px; width:80%; padding-left:14px;}
  @media(max-width:700px){
    .diagtxt { padding-left:27px;}
  }
</style>

<div style="positon:relative;width:100vw; border-top:1px solid #E9F2F9; border-bottom:1px solid #E9F2F9; background-color:#E9F2F9;">
  <div style="width:80%; margin:80px auto 20px auto;" class="flex1">
    <div class="w70 flex5">
      
      <p data-aos="fade-down">
        <img data-aos="fade-left" src="im/logo-finsa-bl.svg" style="width:170px; margin-bottom:1em"><br>
        En FINSA somos más que un líder en la construcción de parques industriales de clase mundial, nuestro compromiso va más allá de la eficiencia operativa; trabajamos bajo un modelo de sostenibilidad integrada al negocio que contempla nuestra relación con la comunidad, el desarrollo del talento y el respeto por el planeta que habitamos, al tiempo que generamos valor para la industria.
      </p>
    </div>
    <div class="w20">
      <img src="im/00/circle-photo-1.jpg" style="width:80%; border-radius:50%" data-aos="flip-right" />
    </div>
  </div>

  <div style="width:80%; position:relative; margin:0px auto 80px auto; " class="flex1">
    <div class="w30"></div>
    <div class="w70 flex4" >

      <div style="position:relative; text-align:right; border:0px solid yellow;">
        <img src="im/diag1.svg" style="height:100%">
      </div>
      <div class="diagtxt" style="color:#00adef; text-transform: uppercase; position:reative">
        
        En FINSA <b>vamos más allá de la responsabilidad</b>, nuestro enfoque está en la sostenibilidad y resiliencia para continuar creciendo con México, en línea con los retos globales.
        <br>
      </div>
    </div>
  </div>
</div>



<div style="positon:relative;width:100vw; border-top:1px solid #fff; border-bottom:1px solid #fff; background-color:#fff;"  >
  
    <div style="width:100%" class="flex1">
      <div style="width:50%">
        <div style="width:80%; margin:80px auto 20px auto;" data-aos="fade-right">
        <h3>Carta del presidente y</h3>
        <h1>DIRECTOR GENERAL</h1>
      </div>
      </div>
      <div style="width:50%; text-align:right">
        <img src="im/00/whitecurve.svg" style="width:70%" data-aos="fade-down">
      </div>
    </div>
    <div style="width:80%; margin:20px auto 80px auto;" class="flex1">
      <div class="w20"></div>
      <div class="w70">
        <p>Nuestros parques industriales se posicionan como ejes estratégicos de transformación dentro nuestro camino hacia la descarbonización, la integración de criterios ASG nos ha permitido fortalecer los cuatro ejes de nuestro modelo de sostenibilidad; Talento y Cultura Corporativa, Medio Ambiente, Ética y Legalidad, y Comunidad. Esto nos ha permitido disminuir los riesgos emergentes y maximizar nuestro compromiso a lo largo de nuestra cadena de valor, para así, lograr la resiliencia y sostenibilidad de nuestro negocio. </p>
        <a href="carta-del-presidente">
        <p><img src="im/leer-mas.svg" style="width:80px" data-aos="fade-down"></p>
        </a>
        <br>
        
        <a href="pdf/IAS_Finsa_2023_CartaPresidente.pdf">
        <img src="im/00/descargar-la-carta.svg" style="width:240px" data-aos="flip-down">
        </a>
      </div>
    </div>

</div>

<style type="text/css">
  .numbers1 { width:24% }
  .numT { color:white; border-collapse: collapse;}
  .bignum { font-size:5vw; }
  .smalltext {font-size:0.9vw;text-transform:uppercase; }
  #mainnumbers { min-height:50vw;  }
  .fen { width:14vw }
  @media(max-width:700px){
    .numbers1 { width:49%;  }
    #mainnumbers { min-height:110vw;  }
    .numT td { font-size:1em }
    .bn { font-size:3em }
    .fen { width:34vw }
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
  .cont{width:24%; position:relative;}
  .ilinks{position:relative;width:100%;cursor:pointer;}
  /* transform: rotate3d(0.2,0.8,0,50deg);
  .ilinks:hover { transform: rotate3d(0.2,0.8,0,0deg);}
  */
  @media(max-width:700px){
    .cont{width:44%; margin-bottom:1em}
  }
</style>

<div style="positon:relative;width:100vw; border-top:1px solid #F7F7F7; border-bottom:1px solid #F7F7F7; background-color:#F7F7F7;"  >
  
        <div style="width:80%; margin:80px auto;" >
          <h1 data-aos="fade-right">CONTENIDO</h1>
          <div style="width:100%" class="flex1">
            
            <div data-aos="flip-left" data-aos-duration="400" class="cont">
              <img onmouseup="document.location.href='nuestra-empresa';" 
              onmouseover="$(this).attr('src','im/00/contenido-1-b.png');"
              onmouseout="$(this).attr('src','im/00/contenido-1.png');"
              src="im/00/contenido-1.png" class="ilinks" >
            <!-- -->
            </div>

            <div data-aos="flip-left" data-aos-duration="800" class="cont">
              <img onmouseup="document.location.href='impacto-ambiental';" 
              onmouseover="$(this).attr('src','im/00/contenido-2-b.png');"
              onmouseout="$(this).attr('src','im/00/contenido-2.png');"
              src="im/00/contenido-2.png" class="ilinks" >
            </div>
            
            <div data-aos="flip-left" data-aos-duration="1200" class="cont">
              <img onmouseup="document.location.href='impacto-social';" 
              onmouseover="$(this).attr('src','im/00/contenido-3-b.png');"
              onmouseout="$(this).attr('src','im/00/contenido-3.png');"
              src="im/00/contenido-3.png" class="ilinks" >
            </div>
            
            <div data-aos="flip-left" data-aos-duration="1600" class="cont">
              <img onmouseup="document.location.href='gobernanza';" 
              onmouseover="$(this).attr('src','im/00/contenido-4-b.png');"
              onmouseout="$(this).attr('src','im/00/contenido-4.png');"
              src="im/00/contenido-4.png" class="ilinks" >
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