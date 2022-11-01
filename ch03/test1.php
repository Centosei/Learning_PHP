<?php

$username = "Fred Smith";
echo $username;
echo "<br/>";
$current_user = $username;
echo $current_user;
echo "<br/>";

$y = 0;
if ($y-- == 0) echo $y;

$author = "Steve Ballmer";

echo "<p>Developers\tdevelopers\tdevelopers\tdevelopers!

- $author</p>";

echo "Debugging is twice as hard as writing the code in the first place.
Therefore, if you write the code as cleverly as possible, you are,
by definition, not smart enough to debug it.

- $author.";

echo "\n\n" . __LINE__ . "\n";

echo <<<_END
Debugging is twice as hard as writing the code in the first place.
Therefore, if you write the code as cleverly as possible, you are,
by definition, not smart enough to debug it.

- $author.
_END;
var_dump(__FILE__);

function daysAfter($timestamp, $days)
{
    $theDay = $timestamp + ($days * 24 * 60 * 60);
    return date("l F jS Y", $theDay);
};

echo "<br>" . daysAfter(time(), 6) . "<br>";


function staticNumber()
{
    //
    static $static_number = 5;
    $still_number = 5;
    // increment
    $static_number += 1;
    $still_number += 1;
    // tell me who you are
    echo "I'm so static: $static_number<br>";
    echo "I am who I am: $still_number<br>";
}

for ($i = 1; $i < 10; $i++) {
    staticNumber();
}
