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
echo "compagnie ";
echo  $_POST['compagnie'];
echo "<br>";
echo "departementFrom ";

echo  $_POST['departementFrom'];
echo "<br>";

echo "directeur ";

echo  $_POST['directeur'];
echo "<br>";

echo "Informe ";

echo  $_POST['Informe'];
echo "<br>";

echo "mr ";

echo  $_POST['mr'];
echo "<br>";

echo "demande ";

echo  $_POST['demande'];
echo "<br>";

echo "fonction ";

echo  $_POST['fonction'];
echo "<br>";

echo "rappel ";

echo  $_POST['rappel'];
echo "<br>";

echo "departementTo ";

echo  $_POST['departementTo'];
echo "<br>";

echo "content ";

echo  $_POST['content'];
echo "<br>";

echo "signature ";

echo "<img src='" . $file . "'>";
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();
ob_end_clean();
// Output the generated PDF to Browser
$dompdf->stream();