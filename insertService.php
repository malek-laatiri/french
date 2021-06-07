<!DOCTYPE HTML>

<html>
    <head>
        <style type="text/css">
            .bodyBody {
                margin: 10px;
                font-size: 1.50em;
            }
            .divHeader {
                text-align: right;
                border: 1px solid;
            }
            .divReturnAddress {
                text-align: left;
                float: right;
            }
            .divSubject {
                clear: both;
                font-weight: bold;
                padding-top: 80px;
            }
            .divAdios {
                float: right;
                padding-top: 50px;
            }
        </style>
    </head>
    <body class="bodyBody">
        <div class="divReturnAddress">
            <?php echo  $_POST['compagnie'];?><br/>
            <?php echo  $_POST['departementFrom'];?><br/>
            <?php echo  $_POST['directeur'];?> <br/>    
            <br/>
            <?php echo  $_POST['dateNote'];?>
        </div>

        <div class="divSubject">
            Objet:  <?php echo  $_POST['demande'];?>
        </div>

        <div class="divContents">
           

            <p>
                <?php echo  $_POST['content'];?>
            </p>
        </div>

        <div class="divAdios">
            <?php echo  $_POST['Informe'];?> <br/>
            <!-- Space for signature. -->
            <br/>
            <br/>
            <br/>
            <?php echo  $_POST['mr'];?> <br/>
            <?php echo  $_POST['departementTo'];?> <br/>
            <?php echo "<img src='" . $_POST['hidden_data'] . "'>";?>
        </div>
    </body>
</html>

<?php
require_once ('vendor/dompdf/dompdf/autoload.inc.php');
include 'conn.php';
require 'vendor/autoload.php';
use Dompdf\Dompdf;

$upload_dir = "uploads/";
$img = $_POST['hidden_data'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $upload_dir . mktime() . ".png";
$success = file_put_contents($file, $data);





