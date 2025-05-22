<?php

require_once('UnicQR.php');

$data = 'https://example.com/';

$options = [
    'color'    => '#121212',
    'type'     => 'rect', # cgibrid, circle, rect
    'capacity' => '3', # 0, 1, 2, 3,
    'size' => 250 # width & height in px
    // 'logo'     => 'logo.svg',
];

$qr = new UnicQR();

$svg = $qr->generate($data, $options);

file_put_contents('qr.svg', $svg);

// echo $svg;

?>

<img src="qr.svg" width="150px">
