<?php

    $mysql = new mysqli(
        "localhost",
        "root",
        "",
        "greenhouse"
    );

    if ($mysql->connect_error) {
        die("Failed to connect" . $mysql-> connect_error);
    };