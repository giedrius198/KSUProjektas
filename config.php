<?php
    $host = 'localhost';
    $host_user = 'root';
    $host_pass = '';
    $db = 'ksup';

    $conn = new mysqli($host, $host_user, $host_pass, $db);

    if ($conn->connect_error) {
        die("Connection to mySQL server failed: " . $conn->connect_error);
    }