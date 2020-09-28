<?php

$i = 1;
while ($i<10){

    $k= func();

    if ($k == 4) continue; //перехід на наступну ітерацію
    if ($k == 5) break; //умова зупинки циклу

    echo $k;

}