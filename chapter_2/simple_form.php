
<?php

if (!isset($_GET['send'])){
    echo join('', file('hello.php'));
    die();
}
echo $_GET['username'];