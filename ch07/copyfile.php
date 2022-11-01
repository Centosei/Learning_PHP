<?php
copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
echo "File successfully coppied to 'testfile2.txt'\n";
