<?php
printf("The result is: $%.2f", 123.42 / 12);
echo "\n";

printf("The result is $%15f\n", 123.43 / 12);
printf("The result is $%015f\n", 123.43 / 12);
printf("The result is $%15.2f\n", 123.43 / 12);
printf("The result is $%015.2f\n", 123.43 / 12);
printf("The result is $%'#15.2f\n", 123.43 / 12);
