<?php 
//echo phpinfo();die();

$img = $_SERVER['DOCUMENT_ROOT'] . 'imagick-test/svgtest.svg';

$imagick = new Imagick($img);

$imagick->setImageFormat('jpeg');// jpeg or pdf
$imagick->setImageResolution(300,300); // update dpi value
$imagick->setImageUnits(imagick::RESOLUTION_PIXELSPERINCH);

// JPEG
echo '<img src="data:image/jpeg;base64,'.base64_encode($imagick->getImageBlob()).'"/>';

// PDF
/*header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="pdftest.pdf"');

echo $imagick->getImagesBlob();*/

?>