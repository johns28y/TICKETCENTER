<?php
/*
Users will navigate through Ticket Center starting from the Home Page. 
On home page I am creating two images. Let's call them by name. 
Image A will be a Ticket Stub or Whole Ticket Image with the text BUY above the image. This ticket will be linked to TicketIndex.php
Image B will be a Dollar Sign Image with the text SELL above the icon. This ticket will be linked to Composer.php
*/
$image = imagecreatetruecolor(120, 20);
$text_color = imagecoloralllocate($image, 200, 100, 98);
imagestring($image, 1, 5, 5, 'Buy', $text_color);
header('Content-Type:image/jpeg');
imagejpeg($image);
imagedestroy($image);
?>