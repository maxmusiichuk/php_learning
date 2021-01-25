<?php

$db_host='localhost';
$db_name='pet_project_db';
$db_user='user';
$db_pass='pass';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
$mysqli->set_charset("utf8mb4");

$result = $mysqli->query('SELECT * FROM `cats`');
while($row = $result->fetch_assoc())
{
    echo '<p>Запись name='.$row['title'].'. Текст: '.$row['txt']." Page id ".$row['id']." Page subID ".$row['root'].'</p>';
}

?>