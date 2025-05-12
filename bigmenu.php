<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


echo<<<HTML

<style type="text/css">
  .spacer1 { width:1.33em; display:inline-block; height:0.8em; }  
  .fourth {width:22%; margin-bottom:2em}
  .w17{width:17%}

  .mi {font-size:0.75em; width:90%; }
  .mi li {margin-bottom:.4em;}
  .cuartos { min-height:33em }
  @media(max-width:1000px){
      .mi { display:none }
      .cuartos { min-height:1em }
      .fourth {width:45%}
      .w17{width:80%; margin-left:10%; margin-bottom:10px}
  }
  @media(max-width:600px){
      .fourth {width:95%}
  }

/*
  @media(max-width:700px){
    .fourth {width:45%}
    .w17{width:80%; margin-left:10%}
    
  }
  @media(max-width:550px){
    .fourth {width:85%}
    
  }
*/
</style>


<div id="bigmenu" style="display:none;position:fixed;top:60px;right:0vh; z-index:50; width:100vw; height:94vh; background-color: rgba(0,40,85,0.9);">
  <div style="width:90%; margin-left:5%; margin-top:4vh; height:85vh; background-color:white; border-radius:0.4em; box-shadow: 8px 8px 10px -2px rgba(0,0,0,0.45);" class="flex1">

    <div style="width:96%; margin-left:2%;height:81vh; margin-top:3vh;position:relative;overflow-y:auto">

      <img onmouseup="$('#bigmenu').fadeOut();" src="im/x.svg" style="width:1.2em;float:right; cursor: pointer;">

      <h1>CONTENIDO</h1>

      <div style="width:100%;" class="flex1">
        <div class="w17">
          <a href="carta-del-presidente">
          <div style="color:#00adef;cursor:pointer; font-size:0.8em; margin-top:5vh;">
            CARTA DEL<br>PRESIDENTE<img src="im/arr-right-blue.svg" style="width:1em;margin-left:0.3em">
          </div>
          </a>
          <a href="./#descargas" onmouseup="$('#bigmenu').fadeOut();">
            <div style="color:#00adef;cursor:pointer; font-size:0.8em; margin-top:10px;">
              DESCARGAS<img src="im/arr-right-blue.svg" style="width:1em;margin-left:0.3em">
            </div>
          </a>
        </div>
        <div style="width:80%; margin-left:10%" class="flex1">

          <div class="fourth" >
            <div class="cuartos" style="width:100%; margin-top:5vh;background-color:#DDEBF2; border-radius:0.3em; ">
              <a href="nuestra-empresa">
              <img src="im/menuitem-1.png" 
              onmouseover="$(this).attr('src','im/menuitem-1-b.png');"
              onmouseout="$(this).attr('src','im/menuitem-1.png');"
              style="width:86%;margin-left:7%;margin-top:-5vh">
              </a>
              <ul class="mi">
                <li>Nuestro portafolio, nuestros productos y mercados atendidos
                </li><li>Misión
                </li><li>Visión
                </li><li>Compromiso Ambiental, Social y de Gobernanza (ASG)
                </li><li>Política Ambiental, Social y de Gobernanza (ASG)
                </li><li>Nuestra aportación a los Objetivos de Desarrollo Sostenible (ODS)
                </li><li>Certificaciones y distintivos
                </li>
              </ul>
              <br>
            </div>
            <a href="nuestra-empresa">
              <div style="color:#00adef;cursor:pointer; font-size:0.8em; margin-top:10px;">
              LEER CAPÍTULO<img src="im/arr-right-blue.svg" style="width:1em;margin-left:0.3em">
              </div>
            </a>
          </div>

          <div class="fourth" >
            <div class="cuartos" style="width:100%; margin-top:5vh;background-color:#E0F2F0; border-radius:0.3em;">
              <a href="impacto-ambiental">
                <img src="im/menuitem-2.png" 
                onmouseover="$(this).attr('src','im/menuitem-2-b.png');"
                onmouseout="$(this).attr('src','im/menuitem-2.png');"
                style="width:86%;margin-left:7%;margin-top:-5vh">
              </a>
              <ul class="mi">
                <li>Parques Sostenibles
                </li><li>Uso de energía y emisiones GEI
                </li><li>Uso de agua
                </li><li>Cambio climático y resiliencia
                </li>
              </ul>
              <br>
            </div>
            <a href="impacto-ambiental">
              <div style="color:#00adef;cursor:pointer; font-size:0.8em; margin-top:10px;">
              LEER CAPÍTULO<img src="im/arr-right-blue.svg" style="width:1em;margin-left:0.3em">
              </div>
            </a>
          </div>

          <div class="fourth" >
            <div class="cuartos" style="width:100%; margin-top:5vh;background-color:#DEEFF6; border-radius:0.3em;">
              <a href="impacto-social">
                <img src="im/menuitem-3.png" 
                onmouseover="$(this).attr('src','im/menuitem-3-b.png');"
                onmouseout="$(this).attr('src','im/menuitem-3.png');"
                style="width:86%;margin-left:7%;margin-top:-5vh">
              </a>
              <ul class="mi">
                <li>Capital Humano
                </li><li>Prestaciones
                </li><li>Salud y seguridad de nuestros colaboradores
                </li><li>Desarrollo profesional y laboral
                </li><li>Comunidad y Responsabilidad Social
                </li><li>Fundación FINSA
                </li>
              </ul>
              <br>
            </div>
            <a href="impacto-social">
              <div style="color:#00adef;cursor:pointer; font-size:0.8em; margin-top:10px;">
              LEER CAPÍTULO<img src="im/arr-right-blue.svg" style="width:1em;margin-left:0.3em">
              </div>
            </a>
          </div>

          <div class="fourth" >
            <div class="cuartos" style="width:100%; margin-top:5vh;background-color:#F8ECE5; border-radius:0.3em;">
              <a href="gobernanza">
              <img src="im/menuitem-4.png" 
              onmouseover="$(this).attr('src','im/menuitem-4-b.png');"
              onmouseout="$(this).attr('src','im/menuitem-4.png');"
              style="width:86%;margin-left:7%;margin-top:-5vh">
              </a>
              <ul class="mi">
                <li>Gobierno corporativo
                </li><li>Equipo directivo
                </li><li>Gestión de riesgos
                </li><li>Ciberseguridad
                </li><li>Cumplimiento normativo
                </li><li>Ética y Anticorrupción
                </li><li>Línea de denuncia
                </li><li>Los mejores proveedores
                </li><li>Índice de Desarrollo Industrial
                </li>
              </ul>
              <br>
            </div>
            <a href="gobernanza">
              <div style="color:#00adef;cursor:pointer; font-size:0.8em; margin-top:10px;">
              LEER CAPÍTULO<img src="im/arr-right-blue.svg" style="width:1em;margin-left:0.3em">
              </div>
            </a>
          </div>
          
        </div>
      </div>
    </div>

  </div>
</div>

HTML;



?>