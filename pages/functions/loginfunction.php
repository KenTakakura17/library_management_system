<?php

include "../../config/include.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = loginAuth($username, $password);

    if ($result ==   1) {
        echo "<script> window.location.href = '../Adminarea.php'</script>";
    } else {
        echo "<script> alert('Invalid username or password');</script>";
    }
}