
# UnicQR

Create amazing QR Codes



### Full example

```
<?php

require_once('UnicQR.php');

$data = 'https://example.com/';

$options = [
    'color'    => '#121212',
    'type'     => 'rect', # cgibrid, circle, rect
    'capacity' => '3',    # 0, 1, 2, 3,
    'size'     => 250,
    'logo'     => 'logo.svg',
];

$qr = new UnicQR();

$svg = $qr->generate($data, $options);

file_put_contents('qr.svg', $svg);

?>

<img src="qr.svg" width="150px">
```

### Options
By increasing the capacity, the pixel density increases and the readability of the code is better.
<br/>
The logo must be in svg format. Use absolute path.
If you embed qr in a pdf, make sure it supports svg. Was tested with mPDF and noticed a problem with using gradient in logo.
<br/>
Use size to set width & height of svg in px.
<br/>
Try all of types of QR style and use what you like.
<br/>
```
$options = [
    'color'    => '#121212',
    'type'     => 'rect', # cgibrid, circle, rect
    'capacity' => '3',    # 0, 1, 2, 3,
    'size'     => 250,    # width & height in px
    'logo'     => 'logo.svg',
];
```

### You can use SVG code or SVG file

```
echo $svg;

file_put_contents('qr.svg', $svg);
```
