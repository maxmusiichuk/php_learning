<?php
error_reporting(0);

$p = 'db'; //output of page from database
$p = 'file'; // output of page from HTML-file
$p = 'server'; // output page from server

//include configuration file
require "config.php";

//connect ot database
mysqli_connect($dbhost, $dbuser, $dbpassword,);
mysqli_select_db($dbname);

//template connection
require "template.php";

//template opening
$tpl->get_tpl('page.tpl');

//set variables for template
$tpl->set_value('TITLE', $title);
$tpl->set_value('DESCRIPTION', $description);
$tpl->set_value('INFO', $info);

//here will be menu
//$menu = "Soon here will be menu
//<br>Sub 1
//<br>Sub 2
//<br>Sub 3";

include "menu.php";

$tpl->set_value('MENU', $menu);

// variable 'p' is empty - need to output main page
if (isset($p)) {
    $page = "Main page";
    $tpl->set_value('PAGE', $page);
}

//start of template parsing
$tpl->tpl_parse();
//HTML output
echo $tpl->html;
