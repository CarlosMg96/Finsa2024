<?php
error_reporting(E_ALL);

$thispage = "carta-del-presidente";

require_once "header.php";


echo <<<HTML
<style type="text/css">
   .container{
        display: flex;
        justify-content: center;
        height: 100vh;
        background-color: #fff; 
    }
    .first-content{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #fff; 
    }
</style>

<div class="container">
  <div class="first-content" style="width:100vw; border-top:1px solid #E9F2F9; border-bottom:1px solid #E9F2F9; background-color:#fff;" data-aos="fade-right">
  <div style="display:flex; width:100vw; min-height:400px;">
    <!-- Mitad derecha con texto -->
    <div style="width:50vw; background:#e8f9ff; display:flex; align-items:center; padding-bottom: 10px;"> <!-- Espacio para la línea inferior -->
      <div style="width:80%; margin:auto;">
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
        <div style="height:3px; background-color:#1A2B49; margin-top: 20px;"></div> <!-- Línea azul abajo -->
      </div>
    </div>
    <!-- Mitad izquierda con imagen y corte diagonal -->
    <div style="
      width:50vw; 
      background: url('https://placehold.co/600x400') center center/cover no-repeat;
      clip-path: polygon(30% 0%, 100% 0, 100% 100%, 25% 100%);
      min-height:400px;
      ">
    </div>
  </div>
</div>
</div>

HTML;


//$ocultar = 1;
$prev1 = "nuestra-empresa";
$next1 = "impacto-social";

require_once "footer.php";


?>