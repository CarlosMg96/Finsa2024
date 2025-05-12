<?php

$uri = $_SERVER['REQUEST_URI'];

//$uri = str_replace("en_/","en_",$uri);
//$uri = str_replace("en/","en",$uri);
$uri = str_replace("/","",$uri);
$uri = str_replace("finsa2023","",$uri);

$uri0='';

if ( strpos($uri, '?')){
  list($uri0,$uri1) = explode('?',$uri);
//  $uri=$uri0;
}



$descargar = "";
if(empty($ocultar)){
  $descargar = "<a href='pdf/IAS_Finsa_2023_programado.pdf'><img src='im/descargar.svg' style='cursor:pointer; width:250px; position:fixed;right:1em; bottom:1em; filter: drop-shadow(0 0px 3px rgba(0,0,0,0.3));''></a>";
}

if (!empty($next1)){

echo<<<HTML

<div id="descargas" style="display:inline-block; width:100%; font-size:0.7em; padding:0.6em 0.8em 0.3em 0.8em;background-color: #172b54;color:white;">
  <a href="$prev1">
    <img src="im/arr-left-wh.svg" style="height:20px; vertical-align: middle;"> ANTERIOR
  </a>
  
  <a href="$next1" style="float:right;">
    SIGUIENTE <img src="im/arr-right-wh.svg" style="height:20px;  vertical-align: middle; ">
  </a>
</div>

<style type="text/css">

  .w48 { width:48% }
  .descarga-el-informe{ width:240px; margin-top:0.8vw }
  .descargas {font-size:1.1vw}
  .df1 { width:85%; margin:5px 0px 0px 15%; }

  

  @media(max-width:700px){
    .descarga-el-informe{ margin-top:3vw; margin:10px auto; }
    .descargas { font-size:1em; text-align:center }
    .df1 { width:80%; margin:5px 10% 80px 10%; }
    .halfcircle {display:none;}
  }
</style>

<div style="positon:relative;width:100vw;  border-top:1px solid #fff; border-bottom:1px solid #fff; background-color:#fff;"  >
  
        <div style="width:80%; margin:80px auto 0px auto;" >
          <h1 data-aos="fade-right">DESCARGAS</h1>
        </div>

          <div style="" class="flex1 df1">
            <div class="w50 flex5">
              <img src="im/descargas-foto.jpg" style="width:85%; margin:auto; position:relative;
              box-shadow: 8px 8px 10px -2px rgba(0,0,0,0.35);" data-aos="fade-down">
            </div>
            <div class="w50 flex1">
              <div class="w50 descargas" >
                <a href='pdf/IAS_Finsa_2023_programado.pdf'>
                <img src="im/descarga-el-informe.svg" class="descarga-el-informe" data-aos="flip-down">
                </a>
                <p>
                  <b>DESCARGA POR SECCIONES</b>
                  <br>
                </p>

                <a target="_new" href="pdf/IAS_Finsa_2023_Capitulo-1.pdf">
                <p>                  
                  CAPÍTULO 1
                  <br><b>
                  <span style="color:#00adef; font-weight:700">/ </span>
                  Nuestra empresa 
                  </b>
                  <img src="im/arr-dwn.svg" style="width:1.2vw">
                </p>
                </a>

                <a target="_new" href="pdf/IAS_Finsa_2023_Capitulo-2.pdf">
                <p>
                  CAPÍTULO 2
                  <br><b>
                  <span style="color:#00adef; font-weight:700">/ </span>
                  Impacto ambiental
                  </b>
                  <img src="im/arr-dwn.svg" style="width:1.2vw">
                </p>
                </a>

                <a target="_new" href="pdf/IAS_Finsa_2023_Capitulo-3.pdf">
                <p>
                  CAPÍTULO 3
                  <br><b>
                  <span style="color:#00adef; font-weight:700">/ </span>
                  Impacto social 
                  </b>
                  <img src="im/arr-dwn.svg" style="width:1.2vw">
                </p>
                </a>

                <a target="_new" href="pdf/IAS_Finsa_2023_Capitulo-4.pdf">
                <p>
                  CAPÍTULO 4
                  <br><b>
                  <span style="color:#ff8f43; font-weight:700">/ </span>
                  Gobernanza 
                  </b>
                  <img src="im/arr-dwn.svg" style="width:1.2vw">
                </p>
                </a>

                <p><br></p>


                <a target="_new" href="pdf/IAS_Finsa_2023_AcercaDe.pdf">
                <p>
                  <span style="color:#00adef; font-weight:700">/ </span>
                  Acerca de este informe
                  <img src="im/arr-dwn.svg" style="width:1.2vw">
                </p>
                </a>

                <a target="_new" href="pdf/IAS_Finsa_2023_Indice-GRI-SASB.pdf">
                <p>
                  <span style="color:#00adef; font-weight:700">/ </span>
                  Índice GRI e Índice SASB
                  <img src="im/arr-dwn.svg" style="width:1.2vw">
                </p>
                </a>

                
              </div>
              <div class="halfcircle" style="width:37%; text-align: right; ">
                <img src="im/halfcircle.svg" style="position: relative; width:100%">
              </div>
            </div>
          </div>
        
    
</div>

HTML;


}

echo<<<HTML

<style type="text/css">
  

  @media(max-width:700px){
    
  }
</style>

$descargar




<!--
<script src="js/select.js"></script>  

box-sizing: content-box; 
-->
<div style="width:100%; font-size:0.8em; color:#4C5C6E; background-color:#EDF1F4; border:1px solid transparent;">
  <div class="flex1" style="width:96%;margin:2em auto; border:1px solid transparent;" >
    <div style="width:32%">
      <a href="https://generadorestudio.com">
      Diseño: generadorestudio.com 
      <img src="im/generador.svg" style="width:1em; vertical-align:middle; margin-left:0.3em; margin-bottom: 0.2em;">
      </a>
    </div>
    <div style="width:32%; text-align: center;">
      © 2024 Finsa<sup>&reg;</sup>
    </div>
    <div style="width:32%">
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


?>