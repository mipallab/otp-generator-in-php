<?php

if(file_exists(__DIR__ . "/app/functions.php")) {
    require_once __DIR__ . "/app/functions.php";
} else {
    echo "file not linked. functions.php";
}
