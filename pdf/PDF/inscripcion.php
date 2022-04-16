<?php

//ocultar cualquier notificacion
error_reporting(0);

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$deporte = $_POST["deporte"];

require "../tcpdf_include.php";


//crear objeto
$pdf = new TCPDF();

$pdf->SetAuthor('Alberto Solis y Marvin Brenes');
$pdf->SetTitle('Programacion 3');

//definir propiedades del documento
$pdf->SetMargins(20, 20, 20);

//definir los margenes de la cabecera
$pdf->setHeaderMargin(1);

//margnes de pie
$pdf->setFooterMargin(10);

//definir el encabezado
$pdf->setHeaderData(
    "logo.png",
    10,
    "Comprobante de Compra",
    "The Movie DB"
);

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

$pdf->SetFont('helvetica', '', 11);

//crear pagina
$pdf->AddPage();
$html = "
<body>
<h1>Gracias por su compra</h1>

<h2>Pelicula</h2>

<h3>EL monto a pagar es de </h3>



<p>En The Movie DB nos esforzamos por usted</p>

</body>";




//escribir html en un pdf
$pdf->writeHTML($html);

$pdf->MultiCell(70, 50, $txt, 0, 'J', false, 1, 125, 30, true, 0, false, true, 0, 'T', false);

$pdf->SetFont('helvetica', '', 10);

$style = array(
  'border' => 2,
  'vpadding' => 'auto',
  'hpadding' => 'auto',
  'fgcolor' => array(0,0,0),
  'bgcolor' => false, 
  'module_width' => 1, 
  'module_height' => 1 
);

// QRCODE,L : QR-CODE Low error correction
$pdf->Text(20, 80, 'QRCODE L');
// Aqui se podria agregar el trailer de la pelicula
$pdf->write2DBarcode('https://www.instagram.com/floresycolores.cr/reels/', 'QRCODE,L', 20, 90, 50, 50, $style, 'N');



//mostrar el documento pdf I o D
$pdf->Output("Inscripcion-$cedula.pdf", "I");
