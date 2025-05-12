<?php
error_reporting(E_ALL);

$thispage = "our-company";

require_once "en_header.php";


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
    our</div>
      <div data-aos="fade-right" style="position: absolute;   right:11.8vw; top:5.2vw; font-size:12vw; font-weight: 600;">
    com</div>
      <div data-aos="fade-up" style="position: absolute;   right:13vw; top:13.4vw; font-size:12vw; font-weight: 600;">
    pa</div>
      <div data-aos="fade-left" style="position: absolute; right:10.7vw; top:21.4vw; font-size:12vw; font-weight: 600;">
    ny</div>
  </div>

  <img src="im/01/01-transcend.png" class="trascender" style="" data-aos="fade-down">
  <div class="toptext">
    <p data-aos="fade-right">
      Our ongoing goal is to transcend beyond our operational activities to create both social and economic benefits for all our stakeholders.

    </p>
  </div>

  <a target="_new" href="pdf/IAS_Finsa_2023_ENG_Cap1.pdf">
  <img src="im/download.svg?v=2" class="descargar-capitulo" style="" data-aos="flip-down">
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
        
        The uninterrupted and comprehensive work we have performed for 46 years has consolidated FINSA as one of the most important industrial real estate development companies in Mexico. 
        <br><br>
At FINSA we design, build, manage and operate industrial parks in Mexico with an innovative, sustainable approach and the highest international standards.

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
        The properties we manage and/or lease are distributed in four regions of the country: Northeast, Northwest, Bajío and West, and Central Mexico, totaling 3.2 million square meters throughout the 17 states where we have a presence. 
      </p>
      <p><br></p>
      <p data-aos="fade-up">
        Designed with the appropriate conditions to offer access and mobility, our industrial parks facilitate the logistics and manufacturing requirements of our customers with the aim of contributing to the improvement of their processes, marketing and optimization of their resources.
      </p>
    </div>
    
  </div>

  

</div>



<div style="positon:relative;width:100vw; border-top:1px solid #fff; border-bottom:1px solid #fff; background-color:#fff;"  >
  
    <div style="width:100%" class="flex1">
      <div style="width:50%">
        <div style="width:80%; margin:80px auto 00px auto;" data-aos="fade-right">
          <h3>Our portfolio, products and</h3>
          <h1>MARKETS SERVED</h1>
        </div>
      </div>
      <div style="width:50%; text-align:right">
        <img src="im/00/whitecurve.svg" style="width:70%" data-aos="fade-down">
      </div>
    </div>
    <div style="width:80%; margin:20px auto 20px auto;" class="flex1">
      <div class="w40">
        <p data-aos="fade-right">We cover four zones of the country with space rental and sales services, with integral maintenance of industrial parks and property portfolio management. 
 </p>
      </div>
      <div class="w50">
        <p data-aos="fade-left">The automotive, electronics, logistics, aerospace, medical, metal-mechanical, food and beverage, and packaging industries, among many others, are part of our portfolio of domestic and international clients who have found our offer to be the best investment option.</p>
      </div>
    </div>

<style type="text/css">
  .regions{  position: absolute; bottom:0; right:0;width:60%; margin-bottom:10%; transition:all 1s ease-out; }  
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
          SELECT REGION TO FIND OUT MORE
          </span>
          <div style="width:100%; margin-left:-1em; margin-top:0.6em;" class="flex1">

            <div id="r6" style="color:#3abdb0; width:130px; cursor:pointer" class="flex4">
              <div class="box" style="background-color: #3abdb0;"></div>NORTHWEST
            </div>

            <div id="r5" style="color:#f78e47; width:130px; cursor:pointer" class="flex4">
              <div class="box" style="background-color: #f78e47;"></div>NORTHEAST
            </div>

            <div id="r8" style="color:#65666a; width:200px; cursor:pointer" class="flex4">
              <div class="box" style="background-color: #65666a;"></div>BAJIO AND WEST
            </div>

            <div id="r4" style="color:#2dabe2; width:130px; cursor:pointer" class="flex4">
              <div class="box" style="background-color: #2dabe2;"></div>CENTRAL 
            </div>

            
          </div>
        </div>
        <img class="regions" id="detalle" src="im/01/m-northwest.png" data-aos="flip-right" data-aos-duration="400">
      </div>
    </div>


</div>
<style type="text/css">
  .cls-4, .cls-5, .cls-6, .cls-8 { cursor:pointer; opacity:0.5;} 
  .cls-4:hove, .cls-5:hover, .cls-6:hover, .cls-8:hover { opacity:0.5; } 
</style>
<script type="text/javascript">

  $('.cls-4, #r4').mouseover(function(){
    $('.regions').attr('src','im/01/m-central.png');
    $('.cls-4, .cls-5, .cls-6, .cls-8').css('opacity','0.5');
    $('.cls-4').css('opacity','1');
  });

  $('.cls-5, #r5').mouseover(function(){
    $('.regions').attr('src','im/01/m-northeast.png');
    $('.cls-4, .cls-5, .cls-6, .cls-8').css('opacity','0.5');
    $('.cls-5').css('opacity','1');
  });

  $('.cls-6, #r6').mouseover(function(){
    $('.regions').attr('src','im/01/m-northwest.png');
    $('.cls-4, .cls-5, .cls-6, .cls-8').css('opacity','0.5');
    $('.cls-6').css('opacity','1');
  });

  $('.cls-8, #r8').mouseover(function(){
    $('.regions').attr('src','im/01/m-bajio-west.png');
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
        <h1>MISSION</h1>
        <p>
          To maintain leadership in the industrial real estate sector by providing innovative and effective solutions with a sustainable approach. 
        </p>
        <p>
          We create long-term value for our customers and high levels of profitability for our shareholders and are backed by multiple successful operations.
        </p>
     </div>
     <div class="w45 vis" data-aos="flip-right" style="text-align:center; background-color:#fff; padding:3em 2em; box-shadow: 8px 8px 10px -2px rgba(0,0,0,0.35);">
      <h1>VISION</h1>
      <p>
        To be recognized as leaders in Mexican industrial real estate development and to be known for our innovation, social responsibility, sustainability and credibility. 
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
      <h3>Environmental, Social and Governance (ESG)</h3>
      <h1 style="text-transform:uppercase;" data-aos="fade-up" >Commitment</h1>
      <p data-aos="fade-right" >
        Our commitment to operate in a responsible and sustainable manner is reflected in our daily actions, focusing on labor welfare, environmental care, community development, respecting human rights and complying with applicable laws and regulations.
        </p>
        <p data-aos="fade-left" >
As a company, every year we face new global challenges in environmental, social and governance issues, which is why our Model is based on four strategic pillars. 
      </p>
      <div style="width:90%; margin:60px auto 80px auto" class="flex1">
        <img class="ics" src="im/01/ic-01-en.png" data-aos="flip-right" >
        <img class="ics" src="im/01/ic-02-en.png" data-aos="flip-right" >
        <img class="ics" src="im/01/ic-03-en.png" data-aos="flip-right" >
        <img class="ics" src="im/01/ic-04-en.png" data-aos="flip-right" >
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
          <h3>Environmental, Social and Governance (ESG)</h3>
          <h1 style="text-transform:uppercase;" data-aos="fade-up" >Policy</h1>
          <p>
          All of FINSA's actions are supported by our Environmental, Social and Governance Policy, which was updated in october of this year and is published on our corporate intranet. 
          </p>
          <p>
          This document details the most relevant aspects for our company and the criteria to be followed in order to generate social, environmental and economic value while reducing our operational impacts.
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
      <h3>Our contribution to the</h3>
      <h1>Sustainable Development Goals (SDGs)</h1>
      <a target="_new" href="pdf/IAS_Finsa_2023_ENG_SDG.pdf">
      <br><img src="im/01/sdgs-contribution.svg" class="desc-ap">
      </a>
    </div>
    <div class="w60">
      <div style="width:100%; height:40vh; overflow:auto;">

        <div class="obj" onmouseup="openODS('01')">
          <ul class="bl"><li>
              Reduce energy and Scope 1 and 2 GHG consumption by <b>20% compared to the 2022 baseline</b>.
              <br><img src="im/read-more.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('02')">
          <ul class="bl"><li>
              Renewable energy for all common areas of the Industrial Parks.
              <br><img src="im/read-more.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('03')">
          <ul class="bl"><li>
              <b>Net Zero Carbon</b>, aligned to SBTi.
              <br><img src="im/read-more.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('04')">
          <ul class="bl"><li>
              Reduce water consumption in our operations by <b>20% compared to the 2022 baseline</b>.
              <br><img src="im/read-more.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('05')">
          <ul class="bl"><li>
              Preventing <b>50%</b> of waste generated in our operations from ending up in landfills (instead: recycle or reuse).
              <br><img src="im/read-more.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('06')">
          <ul class="bl"><li>
              Improve our community outreach programs with more volunteer hours (5%).
              <br>
                * Ensure continuity and, if possible, increase the number of scholarships granted.
              <br><img src="im/read-more.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('07')">
          <ul class="bl"><li>
              Train and raise awareness of ESG issues (including environmental, ethics, anti-corruption and Diversity, Equity, Inclusion and Belonging (DEIB) topics) among all our employees on an annual basis.
              <br><img src="im/read-more.svg" class="leer-mas">
          </li></ul>
        </div>
 
        <div class="obj" onmouseup="openODS('08')">
          <ul class="bl"><li>
              Train and raise awareness of ESG issues among our tenants.
              <br><img src="im/read-more.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('09')">
          <ul class="bl"><li>
              Obtain green certifications in new own constructions as of 2024.
              <br><img src="im/read-more.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('10')">
          <ul class="bl"><li>
              Achieve 20-30% of green operation certification in our gross profitable area (GRA).
              <br><img src="im/read-more.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('11')">
          <ul class="bl"><li>
              Identifying and addressing climate-related risks and financial implications, in line with TCFD.
              <br><img src="im/read-more.svg" class="leer-mas">
          </li></ul>
        </div>

        <div class="obj" onmouseup="openODS('12')">
          <ul class="bl"><li>
              Increase the percentage of women in executive positions (35%).
              <br><img src="im/read-more.svg" class="leer-mas">
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
  .hid32 {width:30%}
  .hid57 {width:60%}
  .hid17 {width:12%}
  .hid43 {width:60%}

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
    <h3>Certifications and</h3>
    <h1>DISTINCTIONS</h1>

    <div class="flex1 w90">
      <div style="width:25%" class="flex5">
        <img src="im/01/logo-1.png" class="clogo">
      </div>
      <div style="width:70%" class="flex5">
        <div style="width:100%; margin:2em 0em; line-height: 1.4em;">
          <span onmouseup="reveal('hidden1')" class="blu1" style="cursor:pointer">ENVIRONMENTAL QUALITY<img src="im/arr-right-blue.svg" style="width:1em;margin-left:0.3em"></span>
          <br>In 2023 we received the Environmental Quality renewal certificates for the following industrial parks:
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
          <span class="blu1">SOCIALLY RESPONSIBLE COMPANY (ESR) DISTINCTION</span>
          <br>In 2023 for the tenth time we obtained the ESR Distinction granted by the Mexican Center for Philanthropy (Cemefi).
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
          <span onmouseup="reveal('hidden2')" class="blu1" style="cursor:pointer">AMPIP DISTINCTIONS<img src="im/arr-right-blue.svg" style="width:1em;margin-left:0.3em"></span>
          <br>In 2023 FINSA received three awards from the Mexican Association of Private Industrial Parks (AMPIP):
        </div>
      </div>
    </div>

    <div id="hidden2" style="width:100%; margin-top:1.4em; margin-bottom:2em;display:none;" class="flex4">
        <div class="hid17">
        </div>
        <img src="im/01/ampip.png" class="hid43">
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


    <span style="font-weight:600"><span style="color:#00adef; font-weight:800">/</span> RELEVANT SDG</span>

    <div id="ods-01" class="odsdiv">
      <br><br>
      <img src="im/01/ods-7-en.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-9-en.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>GLOBAL<br>PACT PRINCIPLE</th>
          <th>MATERIAL<br>TOPICS</th>
          <th>APPROACH<br>(FINSA)</th>
          <th>STRATEGIC AXIS (FINSA)</th>
          <th>TARGET YEAR<br>AND/OR<br>FREQUENCY</th>
          <th>PROGRESS FOR 2023</th>
        </tr>
        <tr><td>
            Environment
          </td><td>
            Green Energy and Climate Change
          </td><td>
            Sustainable Business
          </td><td>
            Environment
          </td><td>
            <b>2029</b>
          </td><td style="text-align: left;">
            In 2023, we will decrease gasoline consumption by 18.17% compared to 2022
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-02" class="odsdiv">
      <br><br>
      <img src="im/01/ods-7-en.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-9-en.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>GLOBAL<br>PACT PRINCIPLE</th>
          <th>MATERIAL<br>TOPICS</th>
          <th>APPROACH<br>(FINSA)</th>
          <th>STRATEGIC AXIS (FINSA)</th>
          <th>TARGET YEAR<br>AND/OR<br>FREQUENCY</th>
          <th>PROGRESS FOR 2023</th>
        </tr>
        <tr><td>
            Environment
          </td><td>
            Green Energy
          </td><td>
            Sustainable Business
          </td><td>
            Environment
          </td><td>
            <b>2032</b>
          </td><td style="text-align: left;">
            Solar panels for common areas of the FINSA Aguascalientes Industrial Park.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-03" class="odsdiv">
      <br><br>
      <img src="im/01/ods-7-en.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-9-en.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>GLOBAL<br>PACT PRINCIPLE</th>
          <th>MATERIAL<br>TOPICS</th>
          <th>APPROACH<br>(FINSA)</th>
          <th>STRATEGIC AXIS (FINSA)</th>
          <th>TARGET YEAR<br>AND/OR<br>FREQUENCY</th>
          <th>PROGRESS FOR 2023</th>
        </tr>
        <tr><td>
            Environment
          </td><td>
            Green Energy and Climate Change
          </td><td>
            Sustainable Business
          </td><td>
            Environment
          </td><td>
            <b>2050</b>
          </td><td style="text-align: left;">
            The process will begin in 2024.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-04" class="odsdiv">
      <br><br>
      <img src="im/01/ods-6-en.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
       <tr>
          <th>GLOBAL<br>PACT PRINCIPLE</th>
          <th>MATERIAL<br>TOPICS</th>
          <th>APPROACH<br>(FINSA)</th>
          <th>STRATEGIC AXIS (FINSA)</th>
          <th>TARGET YEAR<br>AND/OR<br>FREQUENCY</th>
          <th>PROGRESS FOR 2023</th>
        </tr>
        <tr><td>
            Environment
          </td><td>
            Water
          </td><td>
            Sustainable Business
          </td><td>
            Environment
          </td><td>
            <b>2030</b>
          </td><td style="text-align: left;">
            Promotion of best practices to reduce consumption.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-05" class="odsdiv" >
      <br><br>
      <img src="im/01/ods-11-en.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>GLOBAL<br>PACT PRINCIPLE</th>
          <th>MATERIAL<br>TOPICS</th>
          <th>APPROACH<br>(FINSA)</th>
          <th>STRATEGIC AXIS (FINSA)</th>
          <th>TARGET YEAR<br>AND/OR<br>FREQUENCY</th>
          <th>PROGRESS FOR 2023</th>
        </tr>
        <tr><td>
           Environment
          </td><td>
            Waste management
          </td><td>
            Sustainable Business
          </td><td>
            Environment
          </td><td>
            <b>2030</b>
          </td><td style="text-align: left;">
            Change of garbage can model for urban solid waste collection. Options are being evaluated.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-06" class="odsdiv" >
      <br><br>
      <img src="im/01/ods-1-en.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-4-en.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>GLOBAL<br>PACT PRINCIPLE</th>
          <th>MATERIAL<br>TOPICS</th>
          <th>APPROACH<br>(FINSA)</th>
          <th>STRATEGIC AXIS (FINSA)</th>
          <th>TARGET YEAR<br>AND/OR<br>FREQUENCY</th>
          <th>PROGRESS FOR 2023</th>
        </tr>
        <tr><td>
            Human rights
          </td><td>
            Community Outreach
          </td><td>
            Commitment and value chain
          </td><td>
            Community
          </td><td>
            <b>Annually</b>
          </td><td style="text-align: left;">
            A social responsibility and sustainability coordinator position was created in 2023.
            <br><br>
            All social projects are integrating data.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-07" class="odsdiv" >
      <br><br>
      <img src="im/01/ods-13-en.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-16-en.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>GLOBAL<br>PACT PRINCIPLE</th>
          <th>MATERIAL<br>TOPICS</th>
          <th>APPROACH<br>(FINSA)</th>
          <th>STRATEGIC AXIS (FINSA)</th>
          <th>TARGET YEAR<br>AND/OR<br>FREQUENCY</th>
          <th>PROGRESS FOR 2023</th>
        </tr>
        <tr><td>
            Environment<br>Human Rights<br>Labor Rights<br>Anti-corruption
          </td><td>
            Courses and Training
          </td><td>
            Commitment and value chain
          </td><td>
            Ethics, legality and anti-corruption
          </td><td>
            <b>Annually</b>
          </td><td style="text-align: left;">
            Conferences on ethics, inclusion, and environmental- related issues were held on 2023.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-08" class="odsdiv">
      <br><br>
      <img src="im/01/ods-13-en.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-16-en.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>GLOBAL<br>PACT PRINCIPLE</th>
          <th>MATERIAL<br>TOPICS</th>
          <th>APPROACH<br>(FINSA)</th>
          <th>STRATEGIC AXIS (FINSA)</th>
          <th>TARGET YEAR<br>AND/OR<br>FREQUENCY</th>
          <th>PROGRESS FOR 2023</th>
        </tr>
        <tr><td>
            Environment<br>Human Rights<br>Labor Rights<br>Anti-corruption
          </td><td>
            Courses and Training
          </td><td>
            Commitment and value chain
          </td><td>
            Talent and Corporate Culture
          </td><td>
            <b>Annually</b>
          </td><td style="text-align: left;">
            We intend to post ESG information on social media this 2024.
          </td>
        </tr>
      </table>
    </div>


   <div id="ods-09" class="odsdiv" >
      <br><br>
      <img src="im/01/ods-11-en.png" style="width:100px; margin-right:10px;">
      
      <br><br>
      <table>
        <tr>
          <th>GLOBAL<br>PACT PRINCIPLE</th>
          <th>MATERIAL<br>TOPICS</th>
          <th>APPROACH<br>(FINSA)</th>
          <th>STRATEGIC AXIS (FINSA)</th>
          <th>TARGET YEAR<br>AND/OR<br>FREQUENCY</th>
          <th>PROGRESS FOR 2023</th>
        </tr>
        <tr><td>
            Environment
          </td><td>
            Industrial Parks and Sustainable Buildings
          </td><td>
            Innovation
          </td><td>
            Environment
          </td><td>
            <b>Starting on 2024</b>
          </td><td style="text-align: left;">
            8 of our own projects to be LEED certified in the coming months for the period 2023-2024.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-10" class="odsdiv">
      <br><br>
      <img src="im/01/ods-11-en.png" style="width:100px; margin-right:10px;">
      
      <br><br>
      <table>
        <tr>
          <th>GLOBAL<br>PACT PRINCIPLE</th>
          <th>MATERIAL<br>TOPICS</th>
          <th>APPROACH<br>(FINSA)</th>
          <th>STRATEGIC AXIS (FINSA)</th>
          <th>TARGET YEAR<br>AND/OR<br>FREQUENCY</th>
          <th>PROGRESS FOR 2023</th>
        </tr>
        <tr><td>
            Environment
          </td><td>
            Industrial Parks and Sustainable Buildings
          </td><td>
            Innovation
          </td><td>
            Environment
          </td><td>
            <b>Starting on 2024</b>
          </td><td style="text-align: left;">
            We are currently assessing other green certifications options for the vessels in our portfolios.
          </td>
        </tr>
      </table>
    </div>


    <div id="ods-11" class="odsdiv">
      <br><br>
      <img src="im/01/ods-13-en.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-1-en.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>GLOBAL<br>PACT PRINCIPLE</th>
          <th>MATERIAL<br>TOPICS</th>
          <th>APPROACH<br>(FINSA)</th>
          <th>STRATEGIC AXIS (FINSA)</th>
          <th>TARGET YEAR<br>AND/OR<br>FREQUENCY</th>
          <th>PROGRESS FOR 2023</th>
        </tr>
        <tr><td>
            Environment
          </td><td>
            Risk management
          </td><td>
            Responsibility and resilience
          </td><td>
            Environment
          </td><td>
            <b>Annually</b>
          </td><td style="text-align: left;">
            We adhered to the TCFD in 2023.
          </td>
        </tr>
      </table>
    </div>



    <div id="ods-12" class="odsdiv">
      <br><br>
      <img src="im/01/ods-15-en.png" style="width:100px; margin-right:10px;">
      <img src="im/01/ods-1-en.png" style="width:100px; margin-right:10px;">
      <br><br>
      <table>
        <tr>
          <th>GLOBAL<br>PACT PRINCIPLE</th>
          <th>MATERIAL<br>TOPICS</th>
          <th>APPROACH<br>(FINSA)</th>
          <th>STRATEGIC AXIS (FINSA)</th>
          <th>TARGET YEAR<br>AND/OR<br>FREQUENCY</th>
          <th>PROGRESS FOR 2023</th>
        </tr>
        <tr><td>
            Human rights
          </td><td>
            Inclusion, Equity, Diversity and Human Rights
          </td><td>
            Commitment and value chain
          </td><td>
            Talent and Corporate Culture
          </td><td>
            <b>By 2026</b>
          </td><td style="text-align: left;">
            We reached <b>28.1%</b> by December 2023
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
    <h3>LEED</h3>
    <h1>Certifications</h1>

    <div style="width:100; border-bottom:0px solid #00adef" class="flex1">
      <div class="w30">
        FINSA also offers its clients services related to LEED certification building construction and follow-up: these projects are called "New Construction".
      </div>
      <div class="w60">

        <div style="color:#00adef; margin:2em auto;">
        TOTAL NUMBER OF PROJECTS BUILT BY FINSA WITH LEED CERTIFICATION SINCE 2010:
        </div>

        
        <table>
          <tr>
            <td class="tab4">
              <span class="counter" style="font-size:3.2em">33</span>
            </td>
            <td class="tab5">
              EQUIVALENT TO A TOTAL CERTIFIED AREA OF: 597,489.03 m<sup>3</sup>
            </td>
          </tr>

          <tr>
            <td class="tab4">
              <span class="counter" style="font-size:3.2em">10</span>
            </td>
            <td class="tab5">
               “NEW CONSTRUCTION” PROJECTS
            </td>
          </tr>

          <tr>
            <td class="tab4">
              <span class="counter" style="font-size:3.2em">12</span>
            </td>
            <td class="tab5">
              “CORE AND SHELL” PROJECTS
            </td>
          </tr>

           <tr>
            <td class="tab4">
              <span class="counter" style="font-size:3.2em">11</span>
            </td>
            <td class="tab5">
              “CORE AND SHELL” PROJECTS LEED VOLUME 3 PROGRAM
            </td>
          </tr>
        </table>
        
<p><br></p>


        <p style="color:#00adef; font-size:1.2em" data-aos="fade-right" data-aos-duration="3000">
          CERTIFICATION LEVELS OBTAINED: 
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
              GOLD LEVEL PROJECTS
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
              SILVER LEVEL PROJECTS
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
              CERTIFICATE LEVEL PROJECTS
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
          POSITIVE IMPACTS GENERATED BY MOST OF THE CERTIFIED PROJECTS:
        </p>

        <div data-aos="fade-down" data-aos-duration="3000">
          <span class="counter" style="font-size:3em">9,288.62</span>
          <span style="font-size:2em"> Ton CO<sup>2</sup></span>
        </div>
        <span class="tab2">
          ENERGY MEASURED IN EQUIVALENCE OF TONS OF  CO<sup>2</sup>
        </span>

        <div data-aos="fade-down" data-aos-duration="1600" style="margin-top:30px">
          <span class="counter" style="font-size:3em">6,696.65</span>
          <span style="font-size:2em"> Ton CO<sup>2</sup></span>
        </div>
        <span class="tab2">
          DIVERTED TRASH WASTE
        </span>

        <div data-aos="fade-down" data-aos-duration="800" style="margin-top:30px">
          <span class="counter" style="font-size:3em">10'483,667.12</span>
          <span style="font-size:2em"> Gal</span>
        </div>
        <span class="tab2">
          GALLONS OF WATER SAVED
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
        PROJECTS IN PROCESS OF LEED CERTIFICATION:
      </span>
    </p> 
        
        <table style="width:fit-content; max-width:600px;text-align:left">
          <tr>
            <td style="padding-right:1em">
              <b>
              / 11 PENDING 
              </b>
            </td>
            <td class="tab2">
              PROJECTS
            </td>
          </tr>
          <tr>
            <td style="padding-right:1em">
              <b>
              / 4 "NEW CONSTRUCTION"
              </b>
            </td>
            <td class="tab2">
              PROJECTS
            </td>
          </tr>
          <tr>
            <td style="padding-right:1em">
              <b>
              / 7 “CORE AND SHELL” LEED VOLUME PROGRAM VERSION 4 
              </b>
            </td>
            <td class="tab2">
            PROJECTS 
            </td>
          </tr>
        </table>
          
        <p data-aos="fade-left" data-aos-duration="3000">
          <span class="counter" style="font-size:3em">298,911.14</span> 
          <span style="font-size:2em"> sq. m.</span>
        </p>

        <p style="color:#00adef; font-size:1.2em" data-aos="fade-right" data-aos-duration="3000">
          AREA IN PROCESS OF CERTIFICATION
        </p>



    </div>
  </div>
</div>


        

HTML;



//$ocultar = 1;
$prev1 = "./";
$next1 = "environmental-impact";

require_once "en_footer.php";


?>