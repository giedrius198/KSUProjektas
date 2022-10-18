<?php
    session_start();
    include 'config.php';
    $username = $_POST['username'];
    $pass = $_POST['pass'];


    if(empty($username) || empty($pass)) {
        exit('required');
    }
    $sql = "select id from users where username = '" . $username . "' and pass = '".md5($pass)."'";
    $result = $conn->query($sql);
    $isExist = false;
    if ($result->num_rows > 0) {
        $fetch_check = $result->fetch_object();
        $user_id = $fetch_check->id;
        $_SESSION["user_id"] = $user_id;
        echo "passed";
    } else {
        exit('noexist');
    }
    
?>