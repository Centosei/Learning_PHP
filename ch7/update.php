<?php
$fh = fopen("testfile.txt", 'r+') or die("Failed to open file\n");
$text = fgets($fh);

if (flock($fh, LOCK_EX)) {
    fseek($fh, 0, SEEK_END);
    fwrite($fh, "\n$text") or die("Could not write to file\n");
    flock($fh, LOCK_UN);
}

fclose($fh);
echo "File 'testfile.txt' successfully updated\n";
