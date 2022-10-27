<?php
echo time();
echo "\n";

echo mktime(0, 0, 0, 12, 1, 2022);
echo "\n";

echo date("l F jS, Y - g:ia", time() + 9 * 60 * 60);
echo "\n";

echo date("d/n/Y - H:i:s", time() + 9 * 60 * 60);
echo "\n";

echo date(DATE_ATOM) . "\n";
echo date(DATE_COOKIE) . "\n";
echo date(DATE_RSS) . "\n";
echo date(DATE_W3C) . "\n";

$month = 2;
$day = 29;
$year = 2024;

if (checkdate($month, $day, $year)) echo "Date is valid\n";
else echo "Date is invalid\n";
