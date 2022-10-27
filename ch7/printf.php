<?php
printf("There are %d items iin your basket", 3);
echo "\n";

printf("There are %b items iin your basket", 3);
echo "\n";

printf("There are %o items iin your basket", 123);
echo "\n";

printf("There are %x items iin your basket", 123);
echo "\n";

printf("There are %X items iin your basket", 123);
echo "\n";

printf("My name is %s. I'm %d years old, which is  %X in hexadecimal", 'Simon', 33, 33);
echo "\n";

printf("<span style='color:#%X%X%X'>Hell</span>", 65, 127, 245);
echo "\n";

$r = 50;
$g = 120;
$b = 200;

printf("<span style='color:#%X%X%X'>Hell</span>", $r - 20, $g - 30, $b + 50);
echo "\n";
