<html>
<head>
    <title>Page One</title>
</head>
<body>

<?php
echo "<h1>Output of text</h1>";
?>

<?php
$a = 10001;
$b = true;

if ($a == true) echo 'Variable $a - true';
echo '<br/>';

if ($a == $b) echo '$a = $b';
echo "\n".gettype($b);

?>
</body>
</html>
