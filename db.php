<?php

    $globalIp = "192.168.0.3";

    $mysql = new mysqli(
        "localhost",
        "root",
        "",
        "greenhouse"
    );

    if ($mysql->connect_error) {
        die("Failed to connect" . $mysql-> connect_error);
    };
?>