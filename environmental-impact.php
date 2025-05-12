<?php
error_reporting(E_ALL);

$thispage = "environmental-impact";

require_once "en_header.php";


echo<<<HTML
<style type="text/css">
  .portadafoto { height:  50vw; width:100vw; background-image:url(im/02/portada.jpg); background-position: bottom left; background-size: cover; position:relative; overflow:hidden}
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
  
  <img src="im/02/02-transcend.png"  class="trascender" style="" data-aos="fade-down">
  <div class="toptext">
    <p data-aos="fade-right">
      Beyond promoting an environmental culture, we have made preserving natural resources our responsibility and an intrinsic part of our daily lives
    </p>
  </div>

  <a target="_new" href="pdf/IAS_Finsa_2023_ENG_Cap2.pdf">
    <img src="im/download.svg?v=1" class="descargar-capitulo" style="" data-aos="flip-down">
  </a>

  <div class="header-text">
    <div data-aos="fade-down" style="position: absolute; right:7vw; top:36.2vw; font-size:5vw; font-weight: 600;">
    impact</div>
    <div data-aos="fade-right" style="position: absolute; right:11.8vw; top:1.7vw; font-size:12vw; font-weight: 600;">
    envi</div>
    <div data-aos="fade-up" style="position: absolute;   right:7.7vw; top:8.8vw; font-size:12vw; font-weight: 600;">
    ron</div>
    <div data-aos="fade-up" style="position: absolute;   right:3.6vw; top:15.8vw; font-size:12vw; font-weight: 600;">
    men</div>
    <div data-aos="fade-left" style="position: absolute; right:18.2vw; top:25vw; font-size:12vw; font-weight: 600;">
    tal</div>
  </div>
</div>

<div style="position:relative;width:100vw;  border-top:1px solid #F7F7F7; border-bottom:1px solid #F7F7F7; background-color:#F7F7F7;
">

  <img src="im/00/whitecurve.svg" style="width:30vw; top:0px; right:0px; position:absolute; border:0px solid purple" data-aos="fade-down" >  

  <img src="im/02/foto-1.png" class="foto1png" data-aos="float-left" />  

  <div style="width:100%; position:relative; margin:80px auto 60px auto; border:0px solid orange " class="flex1">

    <div class="w60 flex4" >
      <div class="diag1" style="position:relative; text-align:right; border:0px solid yellow;">
        <img src="im/diag1.svg" style="height:100%">
      </div>
      <div class="w80" style="width:80%; padding-left:23px;color:#00adef; text-transform: uppercase; position:reative">
        As a sustainable company, at FINSA we are committed to collaborating in the mitigation of climate change and the conservation of natural resources. We know that our activities generate impacts that can put ecosystems at risk, so we have taken a series of measures and undertaken various actions to avoid and reduce them.
        <br>
      </div>
    </div>
    
    
    
  </div>


<style>
  .pq40 { width:40% }
  .foto1png {width:30%; position:absolute; right:0px; bottom:0px}
  @media(max-width:700px){
    .pq40 { width:70%; margin-left:10%; margin-bottom:170px }
    .foto1png {width:50%;}
    .w10 {display:none}
  }
</style>

  <div style="width:100%; margin:20px auto 0px auto; " class="flex1">

    <div class="w10">
    </div>
    <div class="pq40 flex5" style="border:0px solid pink">
      
      <div data-aos="fade-down">
        <h3>Sustainable</h3>
        <h1>PARKS</h1>
      </div>
      
      <p data-aos="fade-up">
        Our portfolio is made up of industrial parks that comply with sustainable standards in all their operations, as well as with the guidelines established in our ESG Policy, controlling water and energy consumption, waste generated and greenhouse gas emissions.
      </p>
    </div>
    <div class="w40">
    <br>&nbsp;
    </div>

  </div>

  

</div>




<div style="positon:relative;width:100vw; border-top:1px solid #fff; border-bottom:1px solid #fff; background-color:#fff;"  >
  <div style="positon:relative;width:80%; margin:80px auto" class=flex1>
    <div class="w35">
      <p style="color:#00adef; text-transform:uppercase; font-weight:600">RENEWABLE ENERGY</p>
      FINSA Aguascalientes Industrial Park has taken a significant step towards sustainability and innovation by installing solar panels in its facilities. This initiative not only demonstrates FINSA's commitment to the environment and carbon footprint reduction, but also sets an important precedent in the integration of renewable energies within our operations.
    </div>

    <div class="w35">
      <p style="color:#00adef; text-transform:uppercase; font-weight:600">LED Lamps powered by solar panels</p>
      FINSA Querétaro II Industrial Park has solar powered LED lamps on its roads. The installed system consists of a total of 46 LED lighting fixtures, each with a capacity of 80W. 92 solar panels were installed for this system, with two panels allocated per lamp. Each has a capacity of 135W, designed to maximize the efficiency of converting solar energy into electricity even under varying sunlight conditions.
    </div>

  </div>
</div>


<div style="positon:relative;width:100vw; border-top:1px solid #F5FBFE; border-bottom:1px solid #F5FBFE; background-color:#F5FBFE;"  >
  
    <div style="width:100%" class="flex1">
      <div class="w50">
        <div style="width:80%; margin:80px auto 20px auto;" data-aos="fade-right">
          <h3>Energy use and</h3>
          <h1>GHG EMISSIONS</h1>
        </div>
      </div>
      <div style="width:50%; text-align:right">
        <br>
      </div>
    </div>

    <div style="width:80%; margin:20px auto 20px auto;" class="flex1">
      <div class="w35">
        <p data-aos="fade-right">
          One of the most important material resources for our operations is energy, which we obtain from electricity and fuel.
        </p>
      </div>
      <div class="w50">
        <p data-aos="fade-down">
          <img src="im/02/table-1.png" style="width:100%">
        </p>
      </div>
    </div>

    <div style="width:80%; margin:20px auto 20px auto;" class="flex1">
      <div class="w35">
        <p>
          <p style="color:#00adef; text-transform:uppercase; font-weight:600">EMISSIONS</p>
        </p>
        <p data-aos="fade-up">
        FINSA's total greenhouse gas emissions increased by 4.51 percent from 2022 to 2023. This increase can be attributed to several key factors, ranging from operational expansion to the use of fossil fuel-based energies.</p>
      </div>
      <div class="w50">
        <p data-aos="fade-left">
          <img src="im/02/table-2.png" style="width:100%">
        </p>
      </div>
    </div>




<div style="position:relative;width:100vw; border-top:1px solid #fff; border-bottom:1px solid #fff; background-color:#fff;"  >

  <img src="im/02/bottom-curve.png" style="position: absolute; bottom:0; left:0; width:50vw">

  <div style="positon:relative;width:80%; margin:80px auto" class=flex1>
    <div class="w25">
      <img src="im/02/circles.jpg" style="width:100%; mix-blend-mode: multiply;" data-aos="fade-right">
    </div>
    <div class="w70" data-aos="fade-left">
      <h3>Water</h3>
      <h1>USE</h1>
      <p>
      Water is a vital resource for human beings. At FINSA, water is one of the most important input, which is why we continuously monitor and address any contingency related to water consumption and supply.
      </p>
      <p>
We have treatment plants operate under biological processes of pollutant degradation based on the sanitary services provided by FINSA in some of its parks. Most treatment systems consist of activated sludge technology, with a recent migration to MBBR (Moving Bed Biofilm Reactor) technology.
      </p>
      <p>
        <span class="counter" style="font-size:2.8em">457,360.60</span> <span style="font-size:1.4em">m<sup>3</sup></span>
        <br>
        <span style="color:#09c9b6; font-weight:600;">
          VOLUME TREATED IN 2023
        </span>
      </p>
      <br>
      <p>
        <img src="im/02/water-table.png" style="width:100%" data-aos="fade-up">
      </p>
    </div>
  </div>
</div>

</div>

<style type="text/css">
  .icns { display:block; } .icnsm { display:none; }
  @media(max-width:700px){
    .icns { display:none; } .icnsm { display:block; }
  }
</style>


<div style="positon:relative;width:100vw; border-top:1px solid #EBF9F7; border-bottom:1px solid #EBF9F7; background-color:#EBF9F7;"  >
  <div style="positon:relative;width:80%; margin:80px auto">
    <h3>Climate change and </h3>
    <h1>RESILIENCE</h1>
  </div>
  <div style="positon:relative;width:80%; margin:80px auto" class=flex1>
    <div class="w65">
      Measuring climate-related financial disclosures is critical for companies. The guidelines established by the Task Force on Climate-Related Financial Disclosures (TCFD) provide a sound framework for assessing, disclosing and managing the financial risks and opportunities arising from climate change.
      <br><br>
    </div>
    <div class="w30">
      <img src="im/02/tcfd-2.png" style="width:100%">
    </div>
  </div>
  <div style="positon:relative;width:80%; margin:80px auto">
    <p style="color:#00adef; text-transform:uppercase; font-weight:600; text-align:center">
    We report our progress in the four pillars of TCFD:
    </p>
    <p></p>
    <p style="text-align:center">
      <img class="icns" src="im/02/en_icons.png" data-aos="fade-up" style="width:80%; margin:50px auto">
      <img class="icnsm" src="im/02/en_icons-mobile.png" data-aos="fade-up" style="width:80%; margin:50px auto">
    </p>
  </div>
</div>



HTML;


//$ocultar = 1;
$prev1 = "our-company";
$next1 = "social-impact";

require_once "en_footer.php";


?>