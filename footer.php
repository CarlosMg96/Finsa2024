<?php

$uri = $_SERVER['REQUEST_URI'];

// $uri = str_replace("en_/","en_",$uri);
// $uri = str_replace("en/","en",$uri);
$uri = str_replace('/', '', $uri);
$uri = str_replace('finsa2023', '', $uri);

$uri0 = '';

if (strpos($uri, '?')) {
  list($uri0, $uri1) = explode('?', $uri);
  //  $uri=$uri0;
}

$descargar = '';
if (empty($ocultar)) {
  $descargar = "<a href='pdf/IAS_Finsa_2023_programado.pdf'><img src='im/descargar.svg' style='cursor:pointer; width:250px; position:fixed;right:1em; bottom:em; filter: drop-shadow(0 0px 3px rgba(0,0,0,0.3));''></a>";
}

if (!empty($next1)) {
  echo <<<HTML

<!-- <div id="descargas" style="display:inline-block; width:100%; font-size:0.7em; padding:0.6em 0.8em 0.3em 0.8em;background-color: #172b54;color:white;">
  <a href="$prev1">
    <img src="im/arr-left-wh.svg" style="height:20px; vertical-align: middle;"> ANTERIOR
  </a>
  
  <a href="$next1" style="float:right;">
    SIGUIENTE <img src="im/arr-right-wh.svg" style="height:20px;  vertical-align: middle; ">
  </a>
</div> -->

<style type="text/css">

  .w48 { width:48% }
  .descarga-el-informe{ width:240px; margin-top:0.8vw }
  .descargas {font-size:1.1vw}
  .df1 { width:85%; margin:5px 0px 0px 10%; }

  

  @media(max-width:700px){
    .descarga-el-informe{ margin-top:3vw; margin:10px auto; }
    .descargas { font-size:1em; text-align:center }
    .df1 { width:80%; margin:5px 10% 80px 10%; }
    .halfcircle {display:none;}
  }
</style>

<div style="positon:relative;width:100vw;  border-top:1px solid #fff; border-bottom:1px solid #fff; background-color:#F2F4F6;"  >
  
        <div style="width:80%; margin:80px auto 0px auto;" >
          <h1 style="color:#000;" data-aos="fade-right">Descargas</h1>
          <p style="font-size:1.2em; color:#4C5C6E;" data-aos="fade-right">Explora más de nuestro Informe Anual de Sostenibilidad 2024 o descarga por separado las secciones en PDF.</p>
        </div>

          <div style="" class="flex1 df1">
            
            <div class="w50 flex1">
              <div class="w60 descargas" >
         
                </p>
                <div style="margin-top: 20px;">
                  <ol style="list-style: none; padding-left: 0;" data-aos="fade-down">
                    <li>
                      <a target="_new" href="pdf/IAS_Finsa_2023_Presidente.pdf" 
                        style="display: flex; align-items: center; justify-content: space-between; padding: 10px; text-decoration: none; color:#4C5C6E;">
                        <span style="flex: 1;">Carta del Presidente y Director General</span>
                        <img src="im/arr-dwn.svg" style="width:1.2vw; filter: brightness(0.4);">
                      </a>
                    </li>
                    
                    <li>
                      <a target="_new" href="pdf/IAS_Finsa_2023_Capitulo-1.pdf" 
                        style="display: flex; align-items: center; justify-content: space-between; padding: 10px; text-decoration: none; color:#4C5C6E;">
                        <div style="display: flex; align-items: center; flex: 1;">
                          <span style="font: 800 2em Arial; -webkit-text-fill-color: transparent; -webkit-text-stroke: 1px; width: 50px; display: inline-block;">01</span>
                          <span>Sobre Finsa</span>
                        </div>
                        <img src="im/arr-dwn.svg" style="width:1.2vw; filter: brightness(0.4);">
                      </a>
                    </li>

                    <li>
                      <a target="_new" href="pdf/IAS_Finsa_2023_Capitulo-2.pdf" 
                        style="display: flex; align-items: center; justify-content: space-between; padding: 10px; text-decoration: none; color:green;">
                        <div style="display: flex; align-items: center; flex: 1;">
                          <span style="font: 800 2em Arial; -webkit-text-fill-color: transparent; -webkit-text-stroke: 1px; width: 50px; display: inline-block;">02</span>
                          <span>Medio Ambiente</span>
                        </div>
                        <img src="im/arr-dwn.svg" style="width:1.2vw; filter: brightness(0.4);">
                      </a>
                    </li>

                    <li>
                      <a target="_new" href="pdf/IAS_Finsa_2023_Capitulo-3.pdf" 
                        style="display: flex; align-items: center; justify-content: space-between; padding: 10px; text-decoration: none; color:#009add;">
                        <div style="display: flex; align-items: center; flex: 1;">
                          <span style="font: 800 2em Arial; -webkit-text-fill-color: transparent; -webkit-text-stroke: 1px; width: 50px; display: inline-block;">03</span>
                          <span>Talento, cultura corporativa y comunidad</span>
                        </div>
                        <img src="im/arr-dwn.svg" style="width:1.2vw; filter: brightness(0.4);">
                      </a>
                    </li>

                    <li>
                      <a target="_new" href="pdf/IAS_Finsa_2023_Capitulo-4.pdf" 
                        style="display: flex; align-items: center; justify-content: space-between; padding: 10px; text-decoration: none; color:orange;">
                        <div style="display: flex; align-items: center; flex: 1;">
                          <span style="font: 800 2em Arial; -webkit-text-fill-color: transparent; -webkit-text-stroke: 1px; width: 50px; display: inline-block;">04</span>
                          <span>Gobernanza</span>
                        </div>
                        <img src="im/arr-dwn.svg" style="width:1.2vw; filter: brightness(0.4);">
                      </a>
                    </li>

                    <li>
                      <a target="_new" href="pdf/IAS_Finsa_2023_AcercaDe.pdf" 
                        style="display: flex; align-items: center; justify-content: space-between; padding: 10px; text-decoration: none; color:#4C5C6E;">
                        <span style="flex: 1;">Acerca de este informe</span>
                        <img src="im/arr-dwn.svg" style="width:1.2vw; filter: brightness(0.4);">
                      </a>
                    </li>

                    <li>
                      <a target="_new" href="pdf/IAS_Finsa_2023_Indice-GRI-SASB.pdf" 
                        style="display: flex; align-items: center; justify-content: space-between; padding: 10px; text-decoration: none; color:#4C5C6E;">
                        <span style="flex: 1;">Índice GRI / Índice SASB</span>
                        <img src="im/arr-dwn.svg" style="width:1.2vw; filter: brightness(0.4);">
                      </a>
                    </li>
                  </ol>

                </div>
       
              </div>
            </div>
<div class="w50 flex5" style="display: flex;flex-direction: row-reverse;justify-content: space-evenly;align-items: center;flex-wrap: wrap;align-content: flex-start;">
  <div style="display: flex; justify-content: center; width: 100%; margin-bottom: 20px;">
    <a href='pdf/IAS_Finsa_2023_programado.pdf' download style="margin-right: 20px; text-decoration: none; color: #007bff; transition: color 0.3s ease;">
      <span style="font-size: 2.2em; font-weight: 600; letter-spacing: -0.05em; display: inline-block; position: relative; padding-bottom: 5px;" data-aos="fade-down">
        2023
        <span style="position: absolute; bottom: 0; left: 0; width: 100%; height: 2px; background-color: #007bff; transform: scaleX(0); transform-origin: left; transition: transform 0.3s ease;"></span>
      </span>
    </a>
    <a href='pdf/IAS_Finsa_2023_programado.pdf' download style="text-decoration: none; color: #007bff; transition: color 0.3s ease;">
      <span style="font-size: 2.2em; font-weight: 600; letter-spacing: -0.05em; display: inline-block; position: relative; padding-bottom: 5px;" data-aos="fade-down">
        2022
        <span style="position: absolute; bottom: 0; left: 0; width: 100%; height: 2px; background-color: #007bff; transform: scaleX(0); transform-origin: left; transition: transform 0.3s ease;"></span>
      </span>
    </a>
  </div>
  <img src="im/2024/Portada-IS-Finsa-2024.png" style="width:85%; margin:auto; position:relative; box-shadow: 8px 8px 10px -2px rgba(0,0,0,0.35);" data-aos="fade-down">
</div>
            
          </div>
        
    
</div>

HTML;
}

echo <<<HTML

<style type="text/css">
  

  @media(max-width:700px){
    
  }
</style>

$descargar




<!--
<script src="js/select.js"></script>  

box-sizing: content-box; 
-->
<div style="width:100%; font-size:0.8em; color:#fff; background-color:#011f4d; border:1px solid transparent;">
  <div class="flex1" style="width:96%;margin:2em auto; border:1px solid transparent;" >
    <div style="width:32%">
    <div style="font-weight:bold;">© 2024 FINSA</div>

    </div>

<div style="display:flex; align-items:center; justify-content:center; gap:2em; flex-wrap:wrap;">
    <img src="im/finsa-logo.svg" alt="FINSA" style="height:2em; vertical-align:middle;">
    <div>/ CONTACTO: info@finsa.net</div>
  </div>
  </div>
</div>

  
  

     <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>  
     
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/counterup2/2.0.2/index.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script type="text/javascript">

  $(function(){



    AOSinit();
    
  var counterUp = window.counterUp["default"]; // import counterUp from "counterup2"
  var counters = $(".counter");
    
      /* Start counting, do this on DOM ready or with Waypoints. */
    counters.each(function (ignore, counter) {
      var waypoint = new Waypoint( {
        element: $(this),
        handler: function() { 
          counterUp(counter, {
            duration: 2200,
            delay: 16
          }); 
          this.destroy();
        },
        offset: 'bottom-in-view',
      } );
    });
    
  });


  function AOSinit(){

    console.log('Aos init...');

        AOS.init({
      // Global settings:
      disable: 0, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
      startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
      initClassName: 'aos-init', // class applied after initialization
      animatedClassName: 'aos-animate', // class applied on animation
      useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
      disableMutationObserver: false, // disables automatic mutations' detections (advanced)
      debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
      throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
      
      // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
      offset: 160, // offset (in px) from the original trigger point
      delay: 500, // values from 0 to 3000, with step 50ms
      duration: 1900, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      mirror: true, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });

  }


  function reveal(who) {
      var st = $('#'+who).css('display');
      if (st == 'none') {
          $('#'+who).fadeIn();
      } else {
          $('#'+who).fadeOut();
      }
  }

    px();

    $(window).resize(function(){
      px();
    });
  
    function px() {
      var ww = window.innerWidth;
      $('#toptxt1').val(ww);

    }

/*
$(function(){
 $('body').fadeTo(2000,1);

});


  $.ajax({
    url : 'cart.php',
    type : 'POST',
    dataType:'html',
    success : function(data) {   
      $('#floatingIn').html(data);    
        setTimeout( function () { 
          openCart();
        }, 300);       
    }, error : function(request,error){
        alert("Request: "+JSON.stringify(request));
    }
  }); // ajax 
*/

$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    var oy = scroll; oy=oy/170;
    
});



  function scrollIt(who1){
                 
    $('html, body').animate({scrollTop: $('#'+who1).offset().top }, 

      {
        duration: 2000,
        specialEasing: {
          width: "linear",
          height: "easeOutBounce"
        } 
      }

    ); 
  }

    
    var ww = window.innerWidth;      
    $('#toptxt3').val(ww);

    $(window).resize(function(){            
      var ww = window.innerWidth;      
      $('#toptxt3').val(ww);
    });
  


</script>
</body>
</html>
HTML;
