<?php
//response must send in xml
header('ContentType: text/xml');

//XML-header
print('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');

//creating element <response>
print ('<response>');

//get our param
$name = $_GET['name'];

//if empty asking for input
if (trim($name) == '') {
    print ('Please input your name!');
} else {
    print (htmlentities($name).', welcome!');
}

//close <response>
print ('</response>');