<?php
//operations for variables
$x = 1;
$y = pi();
$a = ($x * 2) / 100;

echo `$x` . gettype($x);
echo "<br>" . `$y` . gettype($y);
echo "<br>" . `$a` . gettype($a);

if (isset($x)) echo 'Variable $x exist '.'<br>';

unset($x);
if (isset($x)==false) echo'Variable $x don`t exist any more'.'<br>';
echo gettype($x);