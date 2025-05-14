<?php
error_reporting(E_ALL);

$thispage = "informes-anteriores";

require_once "header.php";


echo <<<HTML
<style type="text/css">
    .container{
        display: flex;
        justify-content: center;
        height: 100vh;
        background-color: #fff; 
    }
    .card{
        background-color: #162B54;
        color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s;
        margin-top: 100px;
        margin-bottom: 20px;
        width: 90%;
    }
    .card-header h4{
        margin: 0;
        font-size: 24px;
    }

    .divider{
        width: 100%;
        height: 2px;
        background-color: #fff;
        margin: 20px 0;
    }

    .card-content {
        font-family: sans-serif;
        margin-bottom: 20px;
    }

    .year-selector {
        display: flex;
        gap: 2em;
        font-size: 20px;
        font-weight: 500;
        justify-content: center;
        margin-bottom: 16px;
    }

    .year-selector h4 {
        color: #7F97B2;
        cursor: pointer;
        transition: color 0.3s;
    }

    .year-selector h4.active {
        color: #ffffff;
        font-weight: 700;
    }

    .year-selector h4:hover {
        color: #ffffff;
        font-weight: 700;
    }

    .download-link {
        display: none;
        text-align: center;
    }

    .download-link.active {
        display: block;
    }

    .image-download {
        width: 650px;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s;
    }

    .image-download:hover {
        transform: scale(1.05);
    }

    @media screen and (max-width: 768px) {
        .container {
            height: auto;
            padding: 20px;
        }
        .card {
            width: 100%;
        }
        .image-download {
            width: 100%;
            max-width: 300px;
        }
    }

</style>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>INFORMES ANTERIORES</h4>
        </div>
        <div class="divider"></div>
        <div class="card-content">
            <div class="year-selector">
                <h4 data-year="2023">2023</h4>
                <h4 data-year="2022">2022</h4>
            </div>

            <div>
                <a id="link-2023" class="download-link" href="pdf/IAS_Finsa_2023_programado.pdf">
                    <img src="im/descargas-foto.jpg" class="image-download">
                </a>
                <img src="im/arr-dwn.svg" alt="" height="50px" width="50px" style="margin: 0 auto; display: block;">
                <a id="link-2022" class="download-link" href="pdf/IAS_Finsa_2022_programado.pdf">
                    <img src="im/2024/Portada-IS-Finsa-2024.png" class="image-download">
                </a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.querySelectorAll('.year-selector h4').forEach(item => {
        item.addEventListener('click', function() {
            document.querySelectorAll('.year-selector h4').forEach(year => year.classList.remove('active'));

            item.classList.add('active');

            document.querySelectorAll('.download-link').forEach(link => link.classList.remove('active'));

            const year = item.getAttribute('data-year');
            const downloadLink = document.getElementById('link-' + year);
            downloadLink.classList.add('active');
        });
    });

    document.querySelector('[data-year="2023"]').click();
</script>

HTML;



//$ocultar = 1;
$prev1 = "impacto-social";
$next1 = "./";

require_once "footer.php";
?>