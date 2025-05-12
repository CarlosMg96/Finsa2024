<?php
error_reporting(E_ALL);

$thispage = "letter-from-the-president";

require_once "en_header.php";


echo<<<HTML
<style type="text/css">
  .portadafoto { height:  50vw; width:100vw; background-image:url(im/carta/portada.jpg); background-position: bottom left; background-size: cover; position:relative; overflow:hidden}
  .portadacurved {height:  49vw; width:47vw; position:absolute;right:0;bottom:0;}
  .portadacurve {height:  49vw; width:26vw; position:absolute;right:30.4vw;bottom:0;}
  .portadapeople { width:27vw; position:absolute;left:15vw;bottom:0;}
  .portadainforme { width:20vw; position:absolute;right:9vw;top:23vw;}
  .foto2 { width:40%; border-radius:50%; position:absolute; right:0; bottom:0; }
  .toptext1 { position: relative; top:15vw; left:4vw; font-size:1.2vw; width:20vw }
  @media(max-width:700px){
    .foto2 { width:60%; border-radius:50%; position:relative; margin-left:20%;}
    .toptext1 {  font-size:1.2vh; width:70vw; top:10vw }
    .portadafoto { height:  80vw;}
    .diag1{display:none}
  }
</style>

<div style="width:100vw; height:60px; ">
</div>
<div class="portadafoto" data-aos="zoom-out">
  
  
  <div class="toptext1">
    <p >
      <h3 data-aos="fade-right" style="color:white">Letter from the President and</h3>
      <h1 data-aos="fade-up" style="color:white">Chief Executive Officer</h1>
    </p>
  </div>

  <a target="_new" href="pdf/IAS_Finsa_2023_ENG_LetterFromThePresident.pdf">
  <img src="im/download-letter-transp.svg" style="cursor:pointer; width:300px; max-width:80%; position:relative; top:15vw; left:4vw;" data-aos="flip-down">
  </a>

</div>

<div style="position:relative;width:100vw;  border-top:1px solid #E9F2F9; border-bottom:1px solid #E9F2F9; background-color:#E9F2F9;
">

  <img src="im/02/bottom-curve.png" style="position: absolute; bottom:0; left:0; width:50vw" data-aos="fade-up" >

  <div style="width:80%; position:relative; margin:80px auto 60px auto; border:0px solid orange " >
    <div class="w60" style=" color:#00adef" >
      In a global context characterized by continuous changes and challenges, we reaffirm our strong commitment to business ethics and sustainability. Our aim is to usher in positive change, instilling ethical principles in all aspects of our daily work and maintaining our commitment to the integration of ESG (Environmental, Social and Governance) criteria in all our operations. 
    </div>
  </div>

  <div style="width:80%; position:relative; margin:80px auto 60px auto; border:0px solid orange " class="flex1">
    <div class="w40 flex5">
      <p>
      Integrating an ethical community is an ongoing effort for which we rely on each member of FINSA to act as a model of trust and inspiration. We acknowledge that our reputation and responsibility are forged from every decision we make on a daily basis. By doing the right thing, we can join a virtuous circle of great benefits. We understand that this is the tangible way to demonstrate our values in a socially responsible commitment that is in line with best corporate governance practices in the global industrial real estate market. 
      </p>
    </div>
    <div class="w40 flex5">
      <img src="im/carta/foto-1.jpg" style="width:80%; border-radius:50%">
    </div>
  </div>

  <div style="width:80%; position:relative; margin:80px auto 60px auto; border:0px solid orange " class="flex1">
    <div class="w40 flex5">
      <p>
      In addition, the phenomenon of nearshoring has promoted ESG aspects in companies, breathing new life to the industrial real estate market and providing unique opportunities for the development of  manufacturing and global logistics spaces.
      </p>
    </div>
    <div class="w40">
      <img src="im/carta/foto-2.jpg" class="foto2" style="">
    </div>
  </div>
    
    <div style="width:100%; margin:40px auto" class="flex4" >
      <div class="diag1" style="position:relative; text-align:right; border:0px solid yellow;">
        <img src="im/diag1.svg" style="height:100%">
      </div>
      <div style="width:80%; padding-left:23px;color:#00adef; text-transform: uppercase; position:reative">
        Our industrial parks are positioned as strategic hubs that facilitate infrastructure to attract investment, considering not only productivity and profitability but also generating value through strategies and solutions to counteract climate change and reduce our carbon footprint. 
        <br>
      </div>
    </div>    
    
    <div style="width:80%; position:relative; margin:80px auto 60px auto; border:0px solid orange " class="flex1">
      <div class="w40 flex5">
      <img src="im/carta/foto-3.jpg" style="width:80%; border-radius:50%" data-aos="fade-down">
    </div>
      <div class="w40 flex5">
        <p data-aos="fade-right" data-aos-duration="400">
        We contribute to the mission of companies that have decarbonizing goals aimed at contributing to  Sustainable Development Goals, from the use of efficient and clean energy to the implementation of sustainable best practices. 
        </p>
        <p data-aos="fade-left" data-aos-duration="800">
          All this is possible thanks to the four strategic axes of our sustainability model: Talent and Corporate Culture, Environment, Ethics and Legality, as well as Community, with a focus on risk management, innovation, commitment and value chains, responsibility and resilience, as well as a sustainable business purpose. 
        </p>
        <p data-aos="fade-right" data-aos-duration="1200">
        During the year 2023 our sustainability practices successfully overcame challenges, strengthening the trust of our stakeholders. I deeply appreciate and thank  everyone at FINSA for their unwavering commitment to business ethics and sustainability, and for their determination to operate responsibly in an ever-changing world.
        </p>
        
        <p data-aos="fade-left" data-aos-duration="2000">
        <span style="color:#002855; font-weight:600;">Sergio Argüelles González</span>
        <br>
        <span style="font-size:0.8em">
        President of the Board and Chief Executive Officer
        </span>
        </p>
      </div>
    
  </div>


  </div>




HTML;


//$ocultar = 1;
$prev1 = "our-company";
$next1 = "social-impact";

require_once "en_footer.php";


?>