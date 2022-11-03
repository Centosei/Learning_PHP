<?php
echo hash('ripemd128', 'saltstringmypassword') . "\n";
echo password_hash("mypassword", PASSWORD_DEFAULT) . "\n";
echo password_hash("mypassword", PASSWORD_BCRYPT) . "\n";
echo "\n";

$hash = password_hash("mypassword", PASSWORD_DEFAULT);
if (password_verify("mypassword", $hash))
    echo "Valid\n";

