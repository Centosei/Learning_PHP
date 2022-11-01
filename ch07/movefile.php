<?php
if (!rename('testfile2.txt', 'file/testfile2.new'))
    echo "Could not rename file";
else echo "File successfully renamed to 'testfile2.new'\n";
