
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
    'capacity' => '3', # 0, 1, 2, 3
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
<br/>
Try all of types of QR style and use what you like.
<br/>
```
$options = [
    'color'    => '#121212',
    'type'     => 'rect', # cgibrid, circle, rect
    'capacity' => '3', # 0, 1, 2, 3
    'logo'     => 'logo.svg',
];
```

### You can use SVG code or SVG file

```
echo $svg;

file_put_contents('qr.svg', $svg);
```
