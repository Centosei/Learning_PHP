<?php
if (!empty(($_POST['name']))) $name = $_POST['name'];
else $name = "(Not Entered)";

$flavor = '';
foreach ($_POST['ice'] as $cream) {
    $flavor .= $cream;
};

echo <<<_END
<html>
<head>
<title></title>
</head>
<body>
Your name is: $name<br>
<form method="post" action="formtest.php">
What is your name?
<input type="text" name="name">
<input type="submit" value="Submit Query">
</form>
<br>
<form method="post" action="calc.php"><pre>
    Loan Amount <input type="text" name="principal">
Number of Years <input type="text" name="years"    value="15">
  Interest Rate <input type="text" name="interest" value="3">
                <input type="submit">
</pre></form>
<br>
<p>"You selected: $flavor"</p>
<form method='post' action='formtest.php'>
   Vanilla <input type="checkbox" name="ice[]" value="Vanilla">
 Chocolate <input type="checkbox" name="ice[]" value="Chocolate">
Strawberry <input type="checkbox" name="ice[]" value="Strawberry">
<button>Submit</button></form>
</body>
</html>
_END;

include 'sanitize.php';
