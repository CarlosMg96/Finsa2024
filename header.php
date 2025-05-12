<?php

require_once "functions.php";

echo <<<HTML
<!DOCTYPE html>
<html lang="es">

<head>

  <meta http-equiv="expires" content="0" />
  <meta http-equiv="pragma" content="no-cache" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=no">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  

  <title>Finsa Informe Anual 2024</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="im/favicon.png?v=1" rel="icon" type="image/png"  />  
  <link href="im/favicon.png?v=1" rel="apple-touch-icon">

<!--
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>  
-->

<link rel="stylesheet" href="fonts/fonts.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
  <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />-->

  

  <style type="text/css">

    

    * { box-sizing: border-box; } 
    html, body {
      width:100%; height:100%;
       -webkit-appearance: none;        
    }


    body {
      font-family: 'ARS Maquette Pro', sans-serif;
      border:0;
      padding:0;
      margin:0;
      max-width:100%;
      //overflow-x:hidden;
      font-size:16px;
      //color:#4a5b6d;
      color:#000;
      font-weight:100;
    }
    html, body{
      width:100vw;height:100%;
    }
    * { font-family: 'ARS Maquette Pro', sans-serif;font-weight:100; }


/*  @media(max-width:600px){  body>div {overflow-x:hidden;}} */

    @media(max-width:840px){
      body{
        font-size:17px;  
      }
      
    }

    h1 {font-weight:300; font-size: 2.2em; color:#00adef; margin:0em 0em 0.4em 0em; text-transform:uppercase; }
    h3 { margin-block-end:-0.2em; font-size:1.3em; }
    .high1 { font-family: 'ARS Maquette Pro Light'; color: #00adef; font-size:26px; line-height:1.1em;}
    .blu1 { color:#00adef; font-weight:600; text-transform:uppercase; }
    @media(max-width:840px){
      h1 { font-size:1.6em; }
      .high1 { font-size:20px; }
    }

    b { font-weight:600; }

    div{ border:0px solid gold; }

    /* --------------------------------------------------- */

    

    svg, img { font-family: 'helvetica', sans-serif; }
    :root {
      --animate-duration: 1800ms;
      --animate-delay: 1.5s;
    }
    a { text-decoration:none; color:inherit; }
    
    .flex1{
      display: flex; flex-flow: row wrap; justify-content:space-between;
    }

    .flex2{
      display: flex; flex-flow: column wrap; justify-content:space-between;
    }

    .flex3{
      display: flex; flex-flow: row wrap; justify-content: flex-start;
    }

    .flex4{
      display: flex; flex-flow: row wrap; justify-content:center;
    }

    .flex5{
      display: flex; flex-flow: column wrap; justify-content:center;
    }
    .flex6{
      display: flex; flex-flow: column wrap; justify-content:flex-end;
    }
    
  [data-aos='rotate-round'] {
    transform: rotate(-360deg);
    transition-property: transform;
   }
   [data-aos='rotate-round'].aos-animate {
      transform: rotate(0deg);
   }

// clip-path: polygon(2% 0, 100% 0, 100% 100%, 0 100%); 

</style>



</head>
<body>
HTML;

require_once "bigmenu.php";

echo<<<HTML


<style type="text/css">
  .toplinks{
    color:#002855; text-align:center;margin:22px; font-size:0.6em; 
    text-align:center; line-height:10px;
  }
  .dash{ width:30px; height:5px; border-radius:3px; margin-left:calc(50% - 15px); margin-top:7px; }

  .dashwrapper { width:60px; height:5px;  margin-left:calc(50% - 30px); margin-top:7px; position:relative;}
  .dash1{ width:100%; height:1px; left:0px; position:absolute; top:2px;}
  .dash2{ width:30px; height:5px; border-radius:3px; left:calc(50% - 15px); position:absolute; top:0px; }
  @media(max-width:900px){
    .toplinks{display:none}
  }
</style>

  
    <div id="topM" class="flex4" style="top:0; width:100vw; height:60px; background-color: #F2F4F6;border-bottom:0px solid white; position:fixed;  z-index:20;">

      <a href="./">
      <img src="im/logo-finsa-bl.svg" style="position:absolute; width:160px; left:20px; top:10px; ">  
      </a>      

      <a href="nuestra-empresa">
      <div class="toplinks">
        NUESTRA EMPRESA        
        <br>

        <div class="dashwrapper" data-aos="flip-right" data-aos-duration="400">
          <div class="dash1" style="background-color: #0081c9;" data-aos="flip-right"></div>
          <div class="dash2" style="background-color: #0081c9;"></div>
        </div>

        <!--
        <div class="dash" style="background-color: #0081c9;" data-aos="fade-down" data-aos-duration="400"></div>
        -->



      </div>
      </a>
      <a href="impacto-ambiental">
      <div class="toplinks">IMPACTO AMBIENTAL
        <br>
        <div class="dashwrapper" data-aos="flip-right" data-aos-duration="800">
          <div class="dash1" style="background-color: #09c9b6;" data-aos="flip-right"></div>
          <div class="dash2" style="background-color: #09c9b6;"></div>
        </div>
      </div>
      </a>
      <a href="impacto-social">
      <div class="toplinks">IMPACTO SOCIAL
        <br>
        <div class="dashwrapper" data-aos="flip-right" data-aos-duration="1200">
          <div class="dash1" style="background-color: #00adef;" data-aos="flip-right"></div>
          <div class="dash2" style="background-color: #00adef;"></div>
        </div>

      </div>
      </a>
      <a href="gobernanza">
      <div class="toplinks">GOBERNANZA
        <br>
        <div class="dashwrapper" data-aos="flip-right" data-aos-duration="1600">
          <div class="dash1" style="background-color: #ff8f43;" data-aos="flip-right"></div>
          <div class="dash2" style="background-color: #ff8f43;"></div>
        </div>
      </div>
      </a>
      
      
HTML;



$gowhere = 'en';

if (!empty($thispage)){

  $Pages = array('nuestra-empresa'=>'our-company','impacto-ambiental'=>'environmental-impact','impacto-social'=>'social-impact','gobernanza'=>'governance','carta-del-presidente'=>'letter-from-the-president',
'our-company'=>'nuestra-empresa','environmental-impact'=>'impacto-ambiental','social-impact'=>'impacto-social','governance'=>'gobernanza','letter-from-the-president'=>'carta-del-presidente'  );

  if ( array_key_exists($thispage, $Pages) ){
    $gowhere = $Pages[$thispage];
  }

}


echo <<<HTML

      <div id="px" style="display:none;width:100px; color:silver; position:absolute; top:4px;right:0px; opacity:0.5; font-size:0.8em">999</div>

      <div style="position:absolute; right:10px;top:0px;width:100px;" class="flex1">
        <a href="./$gowhere"><div style=" height:100%; color:white; margin-top:18px">EN</div></a>
        <div style=" height:100%">
          <a onmouseup="reveal('bigmenu');"><img src="im/burger.svg" style="height:18px; margin:18px 20px; cursor:pointer;"></a>
        </div>
      </div>

    </div>




<div class='outer'>
  <div class='tab'>
    INFORME DE SOSTENIBILIDAD 2024
  </div>
</div>

    


<style type="text/css">

.outer{
  margin-top:55px;
  position:fixed;  
  z-index:20;
  width:100%;
}

.tab {
  position: relative;
  margin:0px auto;
  height:     40px;
  line-height: 40px;
  width: 30%; min-width:30em;
  text-align: center;  
  color: rgba(0, 40, 85, 0.4);
  text-transform: uppercase;
}
.tab:before,
.tab:after {
  position: absolute;
  content: '';
  top: 0px;
  height: 100%;
  width: 55%;
  background: transparent;
  border: 0px solid white;
  border-left-width: 3px;
  z-index: -1;
}
.tab:before {
  left: 0px;
  border-radius: 0px 0px 0px 7px;
  border-right: none;
  transform: skew(20deg);
  transform-origin: top left;
  background: #F2F4F6;
  border: 0px;
}
.tab:after {
  right: 0px;
  border-radius: 0px 0px 7px 0px;
  border-left: none;
  background: #F2F4F6;
  transform: skew(-20deg);
}

.outer{
  transition: all 0.7 s;
}




.slanted-edge {
  --p: 70px; /* control the shape (can be percentage) */
  height: 100px;
  width:50%;
  //clip-path: polygon(0 0,100% 0,calc(100% - var(--p)) 100%,var(--p) 100%);
  clip-path: polygon( 0 0,90% 0,100% 100%,0% 100%);
  border-radius:10px 10px 10px 10px;
  margin:100px auto;
  background: #C44D58;
}
  
   .w20 { width:20%; }
   .w25 { width:25%; }
   .w30 { width:30%; }
   .w35 { width:35%; }
   .w40 { width:40%; }
   .w45 { width:45%; }
   .w50 { width:50%; }
   .w55 { width:55%; }
   .w60 { width:60%; }
   .w65 { width:65%; }
   .w70 { width:70%; }
   .w75 { width:75%; }
   .w80 { width:80%; }
   .w85 { width:85%; }
   .w90 { width:90%; }
   .w20,.w25,.w30,.w35,.w40, .w45, .w50, .w55, .w60, .w65, .w70, .w75, .w80, .w85, .w90 { 
    position:relative;
   }
   @media(max-width:700px){
    .w20,.w25,.w30,.w35,.w40, .w45, .w50, .w55, .w60, .w65, .w70, .w75, .w80, .w85, .w90 { 
      width:100%;
    }
  
   }

   div { border:0px solid red; }
</style>

<input type="text" style="display:none; position:fixed; z-index:30; top:0.9em;right:2em; background-color:transparent; width:100px; color:cyan; opacity:0.4; font-size:1.4em" value="000" id="toptxt1">

<input type="text" style="display:none; position:fixed; z-index:30; top:0.5em;right:13em; background-color:transparent; width:100px; color:yellow;opacity:0.4" value="000" id="toptxt2">

<input type="text" style="display:none; position:fixed; z-index:30; top:0.5em;left:12vw; background-color:transparent; width:100px; color:orange;opacity:0.4" value="home" id="toptxt3">

HTML;



?>