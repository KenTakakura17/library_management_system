<?php

include '../../config/include.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $Password = $_POST['password'];

    $result = loginAuth($username, $Password);

    if ($result == 1) {
        echo "<script> window.location.href = '../Adminarea.php'</script>";
    } else {
        echo "<script> alert('User or Password is Incorrect'); window.location.href = '../login.php?status=false'</script>";
    }

}
?>