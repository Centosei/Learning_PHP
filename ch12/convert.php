<?php
$f = $c = '';

if (isset($_POST['f'])) $f = sanitizeString($_POST['f']);
if (isset($_POST['c'])) $c = sanitizeString($_POST['c']);

if (is_numeric($f))
{
    $c = intval((5/9) * ($f - 32));
    $out = "$f &deg;f equals $c &deg;c";
}
elseif (is_numeric($c))
{
    $f = intval((9/5) * $c + 32);
    $out = "$c &deg;c equals $f &deg;f";
}
else $out = "";

echo <<<_END
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Temperature Converter</title>
</head>
<body>
    <pre>
      Enter either Fahrenheit or Celsius and click on Convert

      <b>$out</b>
      <form action="" method='post'>
         Fahrenheit <input type="text" name="f" size="7">
            Celsius <input type="text" name="c" size="7">
                    <input type="submit" value="Convert">
      </form>
    </pre>
<br>
    <input type="url" name='site' list='links'> 

    <datalist id="links">
        <option label='Google' value="http://google.com"></option>
        <option label='Yahoo!' value="http://yahoo.com"></option>
        <option label='Bing'   value="http://bing.com"></option>
        <option label='Ask'    value="http://ask.com"></option>
    </datalist>
</body>
</html>
_END;

function sanitizeString($var)
{
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}
