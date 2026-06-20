<?php

try {
    $db = mysqli_connect("localhost", "root", "", "batch71");
} 
catch (\Throwable $th) {
    echo $th->getMessage();
}
