<?php

$action = isset($_POST['action']) ? $_POST['action'] : 'index'; //стара версія запису

$action = $_POST['action'] ?? 'index';// нова версія запису

