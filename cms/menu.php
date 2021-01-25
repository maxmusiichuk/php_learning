<?php
//$menu = 0;

$q = "select * from cats where root=-1";
$r = mysqli_query($q);

$is_ext_menu = 0; // dont show menu

if ($p === "showpage") {

    //finding a number of showing page
    $qur = "select * from pages where id=$id";
    $res = @mysqli_query($qur);
    $row = @mysqli_fetch_array($res);

    //number of row
    $number = $row[cat];
    //need to expand menu - we show it on page
    $is_ext_menu = 1;
    //if var $sub = 1, we get - subcategory
    $sub = 0;
    //check, is it subcategory
    $qur2 = "select * from cats where id=$number";

    $res2 = mysqli_query($qur2);
    $row2 = mysqli_fetch_array($res2);

    //get value of root field and explore it
    $root = $row2[root];

    if ($root > -1) {
        $orig = $number;
        $number = $root;
        $sub = 1;
    }
}

while ($row = mysqli_fetch_array($r)) {
    $menu = $menu . "<p><a href=index.php?p=show&id=$row[id]>$row[title]</a>";

    if ($is_ext_menu == 1) {

        if ($row[id] == $number) {

            if ($sub == 1) {

                $qur3 = "select * from cats where id=$orig";
                $res3 = mysqli_query($qur3);

                $row3 = mysqli_fetch_array($res3);

                $menu = $menu . "<br>&nbsp;&nbsp;<a href=index.php?p=show&id=$row[id]>$row3[title]</a>";

            }

            if ($sub == 1) {
                $number = $orig;
            }

            $qur = "select * from pages where cat=$number";
            $res = mysqli_query($qur);
            while ($row = mysqli_fetch_array($res)){
                $menu = $menu . "<br>&nbsp;&nbsp;&nbsp;<a href=index.php?p=show&id=$row[id]>$row[header]</a>";
            }

        }

    }

}