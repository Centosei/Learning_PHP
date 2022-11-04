<?php
$n = preg_match("/cats/i", "Cats are crazy. I like cats.", $match);
echo "$n Matches: $match[0]";
echo "\n";

$n = preg_match_all("/cats/i", "Cats are strange. I like cats.", $match);
echo "$n Matches: ";
for ($j = 0; $j < $n; ++$j) echo $match[0][$j]." ";
echo "\n";
echo "\n";

echo preg_replace("/cats/i", "dogs", "Cats are strange. I like cats.");
echo "\n";
