<?php
    session_start();
    include 'config.php';
    $username = $_POST['username'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['repeatpass'];


    if(empty($username) || empty($name) || empty($pass) || empty($pass2)) {
        exit('required');
    }
    $sql = "select username from users where username = '" . $username . "'";
    $result = $conn->query($sql);

    
    if ($result->num_rows > 0) {
        exit('taken');
    } else if(strcmp($pass, $pass2) != 0) {
        exit('notmatch');
    } else if(strtolower($pass) == $pass ||  !preg_match('#[0-9]#',$pass)) {
        exit('letternumber');
    } else {
        $sql = 'insert into users(username, name, pass) VALUES ("'.$username.'","'.$name.'","'.md5($pass).'")';
        $result = $conn->query($sql);
        if(!isset($_POST['userid'])){
            $sql = "select id from users where username = '".$username."'";
            $result = $conn->query($sql);
            $fetch_check = $result->fetch_object();
            $user_id = $fetch_check->id;
            $_SESSION["user_id"] = $user_id;
        }
    }
    
?>