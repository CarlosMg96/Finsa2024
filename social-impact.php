<?php
error_reporting(E_ALL);

$thispage = "social-impact";

require_once "en_header.php";


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
  
  <img src="im/03/01-transcend.png" class="trascender" style="" data-aos="fade-down">
  <div class="toptext">
    <p data-aos="fade-right">
      At FINSA we provide our collaborators with the best opportunities for professional and personal development, fostering the development of the communities where we operate.
    </p>
  </div>

  <a target="_new" href="pdf/IAS_Finsa_2023_ENG_Cap3.pdf">
  <img src="im/download.svg?v=1" class="descargar-capitulo" style="" data-aos="flip-down">
  </a>

   <div class="header-text">

  <div data-aos="fade-down" style="position: absolute; right:11vw; top:33vw; font-size:6vw; font-weight: 600;">
  impact</div>
  <div data-aos="fade-right" style="position: absolute; right:11.8vw; top:13.2vw; font-size:12vw; font-weight: 600;">
  so</div>
  <div data-aos="fade-up" style="position: absolute;   right:8vw; top:22.4vw; font-size:12vw; font-weight: 600;">
  cial</div>
  </div>

</div>
  


<div style="position:relative;width:100vw;  border-top:1px solid transparent; border-bottom:1px solid #f7f7f7; background-color:#f7f7f7;
">

  <div style="width:80%; margin:30px auto;">
      
      <h3>Human</h3>
      <h1>CAPITAL</h1>
      
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
        One of the strongest pillars of our company is our human capital, made up of the knowledge, experience, skills and talent of 707 men and women who collaborate on a daily basis to ensure that FINSA operates successfully and maintains its position in the market.
      </p>
      
    </div>
    <div class="w55" style="position:relative">
      <div class="divcap">
        <span style="font-size:3em" class="counter">707</span>
        <br>
        <span class="blu1">employees</span>
        <br><br>
        <span style="font-size:3em" class="counter">89</span>
        <br>
        <span class="blu1">new hires in 2023</span>
      </div>
    </div>
  </div>

  <div class="w35 hm" style=" position:relative;" class="flex1">
    <img src="im/04/men.png" style="width:60%" data-aos="flip-right">
    <img src="im/04/women.png" style="width:33%" data-aos="flip-left">
  </div>
</div>



<div style="position:relative;width:100vw;  border-top:1px solid transparent; border-bottom:1px solid #fff; background-color:white;
">

  <img src="im/00/whitecurve.svg" style="width:30vw; top:0px; right:0px; position:absolute; border:0px solid purple" data-aos="fade-down" >  
  <div style="width:80%; margin:30px auto;" class="flex1">
    <div class="w30">
      <div>
      <h1 data-aos="fade-down">BENEFITS</h1>
      </div>
      <p></p>
      <p data-aos="fade-right">
        We want our employees to discover that FINSA is the best place to work and to grow professionally, so we have designed a package of benefits that provide them with opportunities for personal and family development and contribute to improving their quality of life.
      </p>
      
    </div>
    <div class="w55">
      
    </div>
    <img data-aos="fade-up" src="im/04/en_icons.png" class="icns" style="margin:20px auto;">
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
      <h3>Occupational</h3>
      <h1>HEALTH AND SAFETY</h1>
      <p>
        We are concerned about offering the best safety and hygiene conditions in our facilities, as a way of protecting and caring for the health of our employees, which is why this year we organized the First Health Week, its objective was to promote the wellness and health of all employees of the FINSA Santa Catarina industrial park and corporate offices.
      </p>
    </div>
  </div>
  <div style="width:80%; margin:30px auto;" class="flex1">
    <div class="w65">
      <h3>Professional and carreer</h3>
      <h1>DEVELOPMENT</h1>
      <p>
        Promoting the development and professional growth of all our employees is a commitment we made to them when they joined our team. Each year we invite our employees to participate in the courses, workshops and talks focused on the development of competencies and skills that we offer as part of our training program.

      </p>

      <div style="width:100%; margin-bottom:40px" class="flex4" >
      <div style="position:relative; text-align:right; border:0px solid yellow;">
        <img src="im/diag1.svg" style="height:100%">
      </div>
      <div style="width:90%; padding-left:23px;color:#00adef; text-transform: uppercase; position:reative">
        More than 12 courses and one diploma course were given to FINSA employees in 2023, totaling 2,768 hours of training.
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
          <h3>Community and</h3>
          <h1 style="text-transform:uppercase;" data-aos="fade-up" >SOCIAL RESPONSIBILITY</h1>
          <p>
          In 2023, we participated in 15 programs that helped social and environmental causes, supporting and/or collaborating with more than 30 institutions, projects or organizations, seeking to comply with the commitments of our Environmental, Social and Governance (ESG) Policy, Human Rights Policy, our Code of Ethics and Conduct and the United Nations Global Compact.
          </p>
          <p>
During 2023, our actions will benefit more than 8,000 people as part of our commitment and social responsibility.
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
      <h3>FINSA</h3>
      <h1>FOUNDATION</h1>
    </div>
    <div class="w70">
      For 14 years, FINSA Foundation has been promoting the education of children and young people through a scholarship program for students with high academic performance who live in adverse economic situations.
      <p>
In 2023, thanks to the funds raised and our partnerships with institutions, 409 scholarships were awarded at all school levels, from preschool to university- a 100% increase compared to the previous year. The 164 boys and 245 girls benefited reside in the states of Coahuila, Nuevo León, Puebla and Tamaulipas.
      </p>
    </div>
  </div>

  <div style="width:80%; margin:10px auto 100px auto;" class="flex1">
    <div class="w70">
        <div style="width:98%; background-color:white; padding:20px; border-radius:8px; box-shadow: 8px 8px 10px -2px rgba(0,0,0,0.35);">
          <span class="blu1">BBVA FOUNDATION PARTNERSHIP</span>
          <br>
          <p data-aos="fade-down">
          In November 2023, FINSA Foundation and BBVA Foundation signed an agreement to jointly allocate $1,300,000,000 pesos per year to provide scholarships to university students. 
          </p>
          <p data-aos="fade-up">
            This partnership will benefit 31 students who started university degrees in different institutions in Ciudad Victoria, Matamoros, Nuevo Laredo, Reynosa, Saltillo and Puebla. 
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
$prev1 = "environmental-impact";
$next1 = "governance";

require_once "en_footer.php";


?>