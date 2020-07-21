<?php
// hard link
$a = 100;
//$link_on_a = &$a;

//echo $link_on_a;
//echo ' ';

//$link_on_a = 5;

//echo $a;

//soft link

$soft_link = "a";

echo $$soft_link;
echo ' ';
echo $soft_link;
$$soft_link = 5;
echo ' ';
echo $a;