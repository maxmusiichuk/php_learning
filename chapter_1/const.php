<?php
define('first', 'name of constatnt', true);

define('SECOND', 'name of second const');

echo first, PHP_EOL;
//echo '<br>';
echo SECOND, PHP_EOL;

// list of all defined constant`s in php

get_defined_constants();
echo '<br>';
print_r(get_defined_constants());