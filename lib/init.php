<?php

include "config.php";
include "db.php";

//inițializare bază de date

db_init();

//preluare rută

$ruta = isset($_GET['pg']) ? $_GET['pg']:'';
