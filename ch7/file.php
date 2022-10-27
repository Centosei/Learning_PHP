<?php
if (file_exists('date_time.tzt')) echo "File exists\n";
else echo "File doesn't exist\n";

$fh = fopen("testfile.txt", 'w') or die("Failed to create file");

$text = <<<_END
Line 1
Line 2
Line 3
_END;

$text2 = <<<_END
Line 4
Line 5
Line 6
_END;

fwrite($fh, $text) or die("Could not write to file");
fclose($fh);
echo "File 'testfile.txt' written successfully\n";

if (file_exists("testfile.txt")) {
    $filepath = "/Users/rikiwatanabe/Documents/Centosei/Web_Developing_Stuff/Learning_PHP/ch7/testfile.txt";
    $fh = fopen("testfile.txt", 'r');
    $fc = fread($fh, filesize($filepath));
    fclose($fh);
}
$fc = $fc . "\n" . $text2;
echo $fc;
