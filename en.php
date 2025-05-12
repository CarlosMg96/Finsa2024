<?php
error_reporting(E_ALL);

require_once "en_header.php";


echo<<<HTML
<style type="text/css">
  .portadafoto { height:  47vw; width:100vw; background-image:url(im/00/portada-foto.jpg); background-position: bottom left; background-size: cover; position:relative; overflow:hidden}
  .portadacurved {height:  49vw; width:47vw; position:absolute;right:0;bottom:0;}
  .portadacurve {height:  49vw; width:26vw; position:absolute;right:30.4vw;bottom:0;}
  .portadapeople { width:27vw; position:absolute;left:15vw;bottom:0;}
  .portadainforme { width:20vw; position:absolute;right:9vw;top:23vw; font-size:1.1em; font-weight:100; color:white}
  @media(max-width:700px){
    .portadafoto { height:112vw}
    .portadapeople {width:55vw;left:5vw;}
    .portadainforme { width:55vw; font-size:0.9em}
    .portadacurved , .portadacurve { height:112vw; }
  }
</style>

<div style="width:100vw; height:60px; ">
</div>
<div class="portadafoto">
  <img src="im/00/portada-curved.png" class="portadacurved" data-aos="fade-left" />
  <img src="im/00/portada-curve.png" class="portadacurve" data-aos="fade-left" />
  <img src="im/00/portada-people.png" class="portadapeople" data-aos="fade-right" />
  <div  class="portadainforme"> SUSTAINABILITY REPORT<br><span style="font-size:2.2em; font-weight:600; color:#0281C9">2023</span></div>
  <div style="width:78.5%; height:1px; background-color:white; position: absolute; right:0px; top:20.8vw;"></div>
  <div data-aos="fade-down" style="position: absolute; color:white; left:11vw; top:2vw; font-size:6vw; font-weight: 600;">
  Following</div>
  <div data-aos="fade-right" style="position: absolute; color:white; left:22.8vw; top:7.3vw; font-size:4.9vw; font-weight: 600;">
  the road to</div>
  <div data-aos="fade-up" style="position: absolute; color:white; left:21vw; top:10.5vw; font-size:8vw; font-weight: 600;">
  sustainability</div>

</div>

<style type="text/css">
  .diagtxt { padding-left:14px; width:80%; padding-left:14px;}
  @media(max-width:700px){
    .diagtxt { padding-left:27px;}
  }
</style>

<div style="positon:relative;width:100vw; border-top:1px solid #E9F2F9; border-bottom:1px solid #E9F2F9; background-color:#E9F2F9;">
  <div style="width:80%; margin:80px auto 20px auto;" class="flex1">
    <div class="w70 flex5">
      
      <p data-aos="fade-down">
        <img data-aos="fade-left" src="im/logo-finsa-bl.svg" style="width:170px; margin-bottom:1em"><br>
        At FINSA we are leaders in the construction of world-class industrial parks but our commitment goes beyond operational efficiency, we work under a business-integrated sustainability model that contemplates our relationship with the community, the development of talent, and respect for the planet we inhabit while generating value for the industry.
      </p>
    </div>
    <div class="w20">
      <img src="im/00/circle-photo-1.jpg" style="width:80%; border-radius:50%" data-aos="flip-right" />
    </div>
  </div>

  <div style="width:80%; position:relative; margin:0px auto 80px auto; " class="flex1">
    <div class="w30"></div>
    <div class="w70 flex4" >

      <div style="position:relative; text-align:right; border:0px solid yellow;">
        <img src="im/diag1.svg" style="height:100%">
      </div>
      <div class="diagtxt" style="color:#00adef; text-transform: uppercase; position:reative">
        
        At FINSA <b>WE GO BEYOND RESPONSIBILITY</b>, OUR FOCUS IS ON SUSTAINABILITY AND RESILIENCE TO CONTINUE GROWING WITH MEXICO IN LINE WITH GLOBAL CHALLENGES.
        <br>
      </div>
    </div>
  </div>
</div>



<div style="positon:relative;width:100vw; border-top:1px solid #fff; border-bottom:1px solid #fff; background-color:#fff;"  >
  
    <div style="width:100%" class="flex1">
      <div style="width:50%">
        <div style="width:80%; margin:80px auto 20px auto;" data-aos="fade-right">
        <h3>Letter from the President and</h3>
        <h1>CHIEF EXECUTIVE OFFICE</h1>
      </div>
      </div>
      <div style="width:50%; text-align:right">
        <img src="im/00/whitecurve.svg" style="width:70%" data-aos="fade-down">
      </div>
    </div>
    <div style="width:80%; margin:20px auto 80px auto;" class="flex1">
      <div class="w20"></div>
      <div class="w70">
        <p>Our industrial parks are positioned as strategic axes of transformation within our path towards decarbonization. The integration of ESG criteria has allowed us to strengthen the four axes of our sustainability model; Talent and Corporate Culture, Environment, Ethics and Legality, and Community. This has allowed us to reduce emerging risks and maximize our commitment throughout our value chain, in order to achieve the resilience and sustainability of our business.</p>
        <a href="letter-from-the-president">
        <p><img src="im/read-more.svg" style="width:80px" data-aos="fade-down"></p>
        </a>
        <br>
        
        <a href="pdf/IAS_Finsa_2023_ENG_LetterFromThePresident.pdf">
        <img src="im/download-letter.svg" style="width:240px" data-aos="flip-down">
        </a>
      </div>
    </div>

</div>

<style type="text/css">
  .numbers1 { width:24% }
  .numT { color:white; border-collapse: collapse;}
  .bignum { font-size:5vw; }
  .smalltext {font-size:0.9vw;text-transform:uppercase; }
  #mainnumbers { min-height:50vw;  }
  .fen { width:14vw }
  @media(max-width:700px){
    .numbers1 { width:49%;  }
    #mainnumbers { min-height:110vw;  }
    .numT td { font-size:1em }
    .bn { font-size:3em }
    .fen { width:34vw }
  }
</style>

<div id="mainnumbers" style="width:100vw; background-image: url(im/00/fondo-numbers.jpg); background-size: cover;border-top:1px solid white;border-bottom:1px solid white;" >

  <div style="width:80%; margin:5vw auto;">
    <img src="im/00/finsa-in-numbers.svg" class="fen" data-aos="fade-down" />

    <div class="flex1 w65" style="margin-top:5vw;">

      <div class="numbers1" data-aos="fade-down" data-aos-duration="400">
        <table class="numT">
          <tr>
          <td rowspan=2>
            <img src="im/whitediag.svg" style="height:100%">
          </td>
          <td class="bignum">+ <span class="counter bn">70</span></td>
          </tr>
          <tr>
            <td class="smalltext">
              locations <br>in Mexico
            </td>
          </tr>
        </table>
      </div>

      <div class="numbers1" data-aos="fade-down" data-aos-duration="800">
        <table class="numT">
          <tr>
          <td rowspan=2>
            <img src="im/whitediag.svg" style="height:100%">
          </td>
          <td class="bignum"><span class="counter bn">46</span></td>
          </tr>
          <tr>
            <td class="smalltext">
              years of<br>experience
            </td>
          </tr>
        </table>
      </div>

      <div class="numbers1" data-aos="fade-down" data-aos-duration="1200">
        <table class="numT">
          <tr>
          <td rowspan=2>
            <img src="im/whitediag.svg" style="height:100%">
          </td>
          <td class="bignum"><span class="counter bn">21</span></td>
          </tr>
          <tr>
            <td class="smalltext">
              Industrial<br>parks
            </td>
          </tr>
        </table>
      </div>

      <div class="numbers1" data-aos="fade-down" data-aos-duration="1600">
        <table class="numT">
          <tr>
          <td rowspan=2>
            <img src="im/whitediag.svg" style="height:100%">
          </td>
          <td class="bignum"><span class="counter bn">99</span>%</td>
          </tr>
          <tr>
            <td class="smalltext">
              occupancy
            </td>
          </tr>
        </table>
      </div>

    </div><!-- 67 -->

     <div class="flex1 w40" style=" margin-top:5vw;">

      <div class="numbers1" data-aos="fade-down" data-aos-duration="400">
        <table class="numT">
          <tr>
          <td rowspan=2>
            <img src="im/whitediag.svg" style="height:100%">
          </td>
          <td class="bignum"><span class="counter bn">3.2</span><span style="font-size:3vw">MILL</span></td>
          </tr>
          <tr>
            <td class="smalltext">
              sq. m. managed
            </td>
          </tr>
        </table>
      </div>

      <div class="numbers1" data-aos="fade-down" data-aos-duration="800">
        <table class="numT">
          <tr>
          <td rowspan=2>
            <img src="im/whitediag.svg" style="height:100%">
          </td>
          <td class="bignum"><span class="counter bn">12</span><span style="font-size:3vw">MILL</span></td>
          </tr>
          <tr>
            <td class="smalltext">
              sq. m. developed
            </td>
          </tr>
        </table>
      </div>

    </div><!-- 40 -->

  </div><!-- 80 -->
</div>

<style type="text/css">
  .cont{width:24%; position:relative;}
  .ilinks{position:relative;width:100%;cursor:pointer;}
  /* transform: rotate3d(0.2,0.8,0,50deg);
  .ilinks:hover { transform: rotate3d(0.2,0.8,0,0deg);}
  */
  @media(max-width:700px){
    .cont{width:44%; margin-bottom:1em}
  }
</style>

<div style="positon:relative;width:100vw; border-top:1px solid #F7F7F7; border-bottom:1px solid #F7F7F7; background-color:#F7F7F7;"  >
  
        <div style="width:80%; margin:80px auto;" >
          <h1 data-aos="fade-right">CONTENT</h1>
          <div style="width:100%" class="flex1">
            
            <div data-aos="flip-left" data-aos-duration="400" class="cont">
              <img onmouseup="document.location.href='our-company';" 
              onmouseover="$(this).attr('src','im/00/content-1-b.png');"
              onmouseout="$(this).attr('src','im/00/content-1.png');"
              src="im/00/content-1.png" class="ilinks" >
            <!-- -->
            </div>

            <div data-aos="flip-left" data-aos-duration="800" class="cont">
              <img onmouseup="document.location.href='environmental-impact';" 
              onmouseover="$(this).attr('src','im/00/content-2-b.png');"
              onmouseout="$(this).attr('src','im/00/content-2.png');"
              src="im/00/content-2.png" class="ilinks" >
            </div>
            
            <div data-aos="flip-left" data-aos-duration="1200" class="cont">
              <img onmouseup="document.location.href='social-impact';" 
              onmouseover="$(this).attr('src','im/00/content-3-b.png');"
              onmouseout="$(this).attr('src','im/00/content-3.png');"
              src="im/00/content-3.png" class="ilinks" >
            </div>
            
            <div data-aos="flip-left" data-aos-duration="1600" class="cont">
              <img onmouseup="document.location.href='governance';" 
              onmouseover="$(this).attr('src','im/00/content-4-b.png');"
              onmouseout="$(this).attr('src','im/00/content-4.png');"
              src="im/00/content-4.png" class="ilinks" >
            </div>
            
          </div>
        </div>
    
</div>
HTML;


//$ocultar = 1;
$prev1 = "gobernance";
$next1 = "our-company";

require_once "en_footer.php";


?>