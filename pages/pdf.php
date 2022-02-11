<?php
require '../vendor/autoload.php';

use Knp\Snappy\Pdf;

// For example, in windows use the wkhtmltopdf executable file
$snappy = new Pdf('./logo.pdf');
$snappy->generateFromHtml('<h1>Bill</h1><p>You owe me money, dude.</p>');

// Download the streamed PDF
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="file.pdf"');
echo $snappy->getOutput('http://www.github.com');

//  header("Content-type: application/pdf"); 
//  header("Content-Disposition: attachment; filename=$filename"); 
//  header("Expires: 0"); 
//  header("Cache-Control: must-revalidate"); 
//  header("Pragma: public"); 
//  header("Content-Length: ".strlen($contents).""); echo $contents; 
 ?>