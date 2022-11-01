<?php
$paper = array('Copier', 'Inkjet', 'Laser', 'Photo');
$j = 0;

foreach ($paper as $item) {
    echo "$j: $item\n";
    ++$j;
}

$paper = array(
    'copier' => 'Copier & Multipurpose',
    'inkjet' => 'Inkjet Printer',
    'laser'  => 'Laser Printer',
    'photo'  => 'Photographic Paper',
);

foreach ($paper as $item => $description) {
    echo "$item: $description\n";
}
