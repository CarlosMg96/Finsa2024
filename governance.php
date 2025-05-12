<?php
error_reporting(E_ALL);

$thispage = "governance";

require_once "en_header.php";


echo<<<HTML
<style type="text/css">
  .portadafoto { height:  50vw; width:100vw; background-image:url(im/03/portada.jpg); background-position: bottom left; background-size: cover; position:relative; overflow:hidden}
  
    .portadacurved {height:  49vw; width:47vw; position:absolute;right:0;bottom:0;}
  .portadacurve {height:  49vw; width:26vw; position:absolute;right:30.4vw;bottom:0;}
  .portadapeople { width:27vw; position:absolute;left:15vw;bottom:0;}
  .portadainforme { width:20vw; position:absolute;right:9vw;top:23vw;}
  .trascender {position: relative; margin-left:0vw; margin-top:3vw; width:20vw}
  .toptext { position: relative; margin-top:5vw; margin-left:4vw; font-size:1.2vw; width:20vw }
  .descargar-capitulo {width:240px; position:relative; top:3vw; margin-left:4vw;}
  
  .foto3 {position:absolute;width:110%; border-radius:50%; right:-40%; bottom:-35%}
  .or60 { width:60vw; }

  

  @media(max-width:700px){
    
    .foto3 {position:relative;width:100%; border-radius:50%; left:0%; bottom:5%; top:5%;}
    .or60 { width:80vw; }
  }

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
  
  <img src="im/04/01-transcend.png"   class="trascender" style="" data-aos="fade-down">
  <div class="toptext">
    <p data-aos="fade-right">
      We work with integrity, in compliance with the law, and maintaining sustainable growth.
    </p>
  </div>

  <a target="_new" href="pdf/IAS_Finsa_2023_ENG_Cap4.pdf">
    <img src="im/download.svg" class="descargar-capitulo" style="" data-aos="flip-down">
  </a>

   <div class="header-text">

  <div data-aos="fade-right" style="position: absolute;right:10vw; top:15.7vw; font-size:14vw; font-weight: 600;">
  gover</div>
  <div data-aos="fade-up" style="position: absolute;   right:16vw; top:27.6vw; font-size:14vw; font-weight: 600;">
  nance</div>
    </div>
  
</div>



<div style="positon:relative;width:100vw; border-top:1px solid #E9F2F9; border-bottom:1px solid #E9F2F9; background-color:#E9F2F9;">

  <div style="width:70%; position:relative; margin:80px auto 60px auto; text-align:center">
    <h3>Corporate</h3>
    <h1>GOVERNANCE</h1>
    <p><br><br></p>
    <p data-aos="fade-up">
      The Board of Directors is the highest governing body. It is authorized to make decisions that ensure FINSA’s proper operations, it also establishes strategic, financial, environmental and social goals, and assesses the organization’s annual performance.
    </p>
  </div>

</div>

<style type="text/css">
  .or  {  list-style: none; margin-left: 0; padding-left: 0;  }
  .or  li {  padding-left: 1em;  text-indent: -0.8em; margin-bottom:0.5em;}
  .or  li:before { content: "/"; padding-right: 3px;  color:#ff8f43; font-weight:800;}
 .eqdir {width:70vw;}
 @media(max-width:700px){
  .eqdir {width:90vw;}
 }
</style>


<div style="width:100vw; background-color:#fff; border-top:1px solid white; border-bottom:1px solid #F7F7F7;">
  <div style="width:100vw; background-color:#ff8f43; position: absolute; height:30vh">
  </div>
  <div  class="eqdir" data-aos="flip-right" style=" margin:8vw auto 0vw auto; background-color:#fff; padding:3em 4em; box-shadow: 8px 8px 10px -2px rgba(0,0,0,0.35);" class="flex1">
      <div class="w40">
        <h3>Board of</h3>
        <h1>DIRECTORS</h1>
        <p>
          Our management team consists of professionals with extensive knowledge, experience and a track record in real estate, construction and industrial development. The Board of Directors has delegated to the executive directors the responsibility of analyzing market trends in order to contribute to the company’s sustainable development.
        </p>
      </div>
      <div class="w40">
        
        <p>It is intregrated by:</p>
        <p>
<ul class="or">        
  <li>
    President and Chief Executive Officer - CEO
  </li>
  <li>
    Finance & Administration Vice Presidency
  </li>
  <li>
    New Business Development Vice Presidency
  </li>
  <li>
    Technical Vice Presidency
  </li>
  <li>
    Human Capital & Sustainable Development Vice Presidency
  </li>
  <li>
    Legal Vice Presidency
  </li>
  <li>
    Strategy, Image and Corporate Communication Vice Presidency
  </li>
</ul>

 
        </p>
      </div>

  </div>
  
</div>

<div style="position:relative;width:100vw;  border-top:1px solid transparent; border-bottom:1px solid #fff; background-color:transparent;
">

  <img src="im/00/whitecurve.svg" style="width:30vw; top:0px; right:0px; position:absolute; border:0px solid purple" data-aos="fade-down" >  
  <div style="width:80%; margin:30px auto;" class="flex1">
    <div class="w30">
      <div>
      <h3>Risk</h3>
      <h1>MANAGEMENT</h1>
      </div>
      <p></p>
      <p data-aos="fade-right">
        During 2023, we incorporated the risk management policy and applied the relevant methodology to conduct a strategic, operational, compliance and financial risks analysis. Additionally, we created a Risk Committee as a supporting intermediate body for the Board of Directors.
      </p>
      <p></p>
      <h1>CIBERSECURITY</h1>
      <p data-aos="fade-left">
      We conduct a security risk analysis to determine potential threats in order to be prepared for any cyber-attack and breach attempts in our information technology systems. 
      </p >
      <p data-aos="fade-right">
A series of critical controls allows us to define security measures that preserve the confidentiality, integrity and availability of our operating infrastructure, processes and applications. 
      </p>
    </div>
    <div class="w55">
      <img src="im/03/circle-01.jpg" style="width:80%; border-radius:50%" data-aos="fade-up">
    </div>
  </div>
</div>



<div style="positon:relative;width:100vw; min-height:70vh; border-top:1px solid #F7F7F7; border-bottom:1px solid #F7F7F7; background-color:#F7F7F7;"  >
  
    <div style="width:100%; height:100%; min-height:70vh; " class="flex1">

      <div style="width:30%; height:100%; min-height:70vh; ; border:0px solid purple" class="flex5">
        <img data-aos="fade-right" src="im/03/foto-2.jpg" style="position:relative;width:120%; margin:auto; margin-left:-20%; border-radius:50%">
      </div>

      <div style="width:70%;" class="flex5">
        <img src="im/01/curva.png" style="height:70vh; position:absolute">
        <div style="width:70%; margin:auto;">
          <h3>Regulatory</h3>
          <h1 style="text-transform:uppercase;" data-aos="fade-up" >Compliance</h1>
          <p data-aos="fade-left">
          Our legal department is responsible for reviewing all mandatory requirements  in legal, tax, environmental, labor and contractual matters.
          </p>
          <p data-aos="fade-left" data-aos-duration="2500">
          In addition, we have defined a series of internal policies to comply with  applicable legislation which contain specific guidelines that are mandatory for our collaborators and business partners. 
          </p>
        </div>
      </div>
    </div>

</div>




<div style="positon:relative;width:100vw; border-top:1px solid #E9F2F9; border-bottom:1px solid #E9F2F9; background-color:#E9F2F9;">

  <div style="width:70%; position:relative; margin:80px auto 60px auto; ">
    <p data-aos="fade-right">
      <h3>Ethics and</h3>
      <h1>ANTICORRUPTION</h1>
    </p>
    <p><br></p>
    <p data-aos="fade-up">
      In order to continue with the Plan to Strengthen a Legal Culture, in 2023 we reviewed, updated and redesigned our Code of Ethics and Conduct.
      </p>
      <p data-aos="fade-down">
      Our Code of Ethics and Conduct contains a section to explain how we identify and manage all risks regarding corruption, bribery and fraud, as well as an example of a situation involving non-compliance with FINSA's guidelines.
    </p>
  </div>

</div>






<div style="positon:relative;width:100vw; border-top:1px solid #fff; border-bottom:1px solid #fff; background-color:#fff;">
  
  <div style="width:70%; position:relative; margin:80px auto 40px auto; ">
    <div data-aos="fade-right">
      
      <h1>HOTLINE</h1>
      
    </div>

  </div>

  <div style="width:70%; position:relative; margin:0px auto 60px auto; " class="flex1">
    <div class="w60">
    
    
    <p data-aos="fade-up">
      At the end of 2023 we launched our new whistleblower hotline, through which employees can share their concerns and report any irregularities in the company, such as inappropriate behavior, non-compliance with policies or the Code of Ethics and Conduct, harassment, conflicts of interest, discrimination, and acts of corruption and bribery, among others.
      </p>
    
    </div>


    <div style="margin-bottom:40px" class="w30 flex4" >
        <div style="position:relative; text-align:right; border:0px solid yellow;">
          <img src="im/diag1.svg" style="height:100%">
        </div>
        <div style="width:90%; padding-left:23px;color:#00adef; text-transform: uppercase; position:reative">
          In 2023, 28 complaints were received through the complaints line, which we followed up 100%
          <br>
        </div>
      </div>

<!--
    <div class="w30">
      <p data-aos="fade-left" style="color:#00adef; text-transform: uppercase; ">
      En 2023, se recibieron 28 denuncias a través de la línea de denuncias a las cuales dimos seguimiento al 100%
      </p>
    </div>
-->

  </div>

</div>



<div style="width:100vw; background-color:#f7f7f7; border-top:1px solid #f7f7f7; border-bottom:1px solid #F7F7F7;">
  <div style="width:100vw; background-color:#ff8f43; position: absolute; height:30vh">
  </div>
  <div  data-aos="flip-right" style=" margin:8vw auto 12vw auto; background-color:#fff; padding:3em 4em; box-shadow: 8px 8px 10px -2px rgba(0,0,0,0.35);" class="flex1 or60">
      <div class="w40">
        <p data-aos="fade-left" style="color:#00adef; text-transform: uppercase; ">
          <b>The best suppliers</b>
        </p>
        
        <p>
        During the "Proveedores Destacados [Outstanding Suppliers]" event, FINSA awards its best suppliers, those who have worked with excellence and the highest quality standards.
        </p>
        <p>
        This year, 16 supplier companies were awarded in each of the categories evaluated during the year, including the "Supplier in Development", which allows us to promote small and medium-sized companies that are part of our supply chain.  
        </p>
      </div>
      <div class="w40" style="position:relative">
        <img src="im/03/foto-3.jpg" class="foto3" style="z-index:20;">
      </div>

  </div>
  
</div>

<style type="text/css">
  .minif{ width:15vw; border-radius:50%; position:absolute; top:-5vw;left:8vw; }
  @media(max-width:700px){
    .minif{ width:50vw; border-radius:50%; position:relative; top:5vw;left:20vw; }
  }
</style>

<div style="width:100vw; position:relative; background-color:#f7f7f7; border-top:1px solid #f7f7f7; border-bottom:1px solid #F7F7F7;">
  <img src="im/03/foto-4.jpg" data-aos="fade-down" class="minif">
  <div style="width:80vw; position: relative; margin:80px auto; text-align: center;">
    
    <div style="margin-top:10vw" data-aos="fade-right">
    <h3>Industrial</h3>
    <h1>Development Index</h1>
    </div>
    <p data-aos="fade-up">
    This year we created our first Industrial Development Index (IDI) with the purpose of evaluating the level of industrial growth in all the states of the country to identify which have the best infrastructure in order to capitalize on development opportunities and establish strategies to work on those states at an early-stage process.   
    </p>

  </div>
</div>



HTML;


//$ocultar = 1;
$prev1 = "social-impact";
$next1 = "./en";

require_once "en_footer.php";


?>