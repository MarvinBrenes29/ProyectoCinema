<?php

session_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "C:\\wamp64\\www\\ProyectoCinema\\phpmailer\\Exception.php";
require "C:\\wamp64\\www\\ProyectoCinema\\phpmailer\\PHPMailer.php";
require "C:\\wamp64\\www\\ProyectoCinema\\phpmailer\\SMTP.php";




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

<h2>".$_SESSION['nombrePelicula']."</h2>

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
// $pdf->Output("Inscripcion-$cedula.pdf", "I");

// $pdf->Output("Cliente-Compra.pdf", "F");

// $pdf->Output("./descargas/Cliente-Compra.pdf", "F");

$filelocation = "C:\\wamp64\\www\\ProyectoCinema\\pdf\\PDF\\descargas";

$fileNL = $filelocation."\\"."Cliente-Compra.pdf";

// $fileNL = $filelocation."\\".$filename;

$pdf->Output($fileNL, 'F');

// -------------------------------------------------------------------------------------------------------------------

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                    
    $mail->isSMTP();                                       
    $mail->Host       = 'smtp.gmail.com';          
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'themovie.db.cinema@gmail.com';                     //SMTP username
    $mail->Password   = 'kw252342.567h';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('themovie.db.cinema@gmail.com', 'The MovieDB');
    $mail->addAddress('cordoba.solis16@gmail.com', 'Joe User');     //Add a recipient

    //Attachments
    $mail->addAttachment('./descargas/Cliente-Compra.pdf');         //Add attachments

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Comprobante de pago The MovieDB';
    $mail->Body    = 'Encuentre <b>adjunto</b> el comprobante de su compra con nosotros.';

    $mail->send();
    echo 'EL correo se envio correctamente';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


header('location: index.php');