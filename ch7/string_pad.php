<?php
$h = 'Rasmus';

printf("[%s]\n",       $h);
printf("[%12s]\n",     $h);
printf("[%-12s]\n",    $h);
printf("[%012s]\n",    $h);
printf("[%'#12s]\n\n", $h);

$d = 'Rasmus Lerdorf';

printf("[%12.8s]\n",     $d);
printf("[%-12.12s]\n",   $d);
printf("[%-'@12.10s]\n", $d);

$hexstring = sprintf("%X%X%X", 65, 127, 245);
echo $hexstring . "\n";
