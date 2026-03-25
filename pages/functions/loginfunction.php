<?php

include "config/include.php";

if (isset($_POST['user_name']) && isset($_POST['password'])) {

    $username = $_POST['user_name'];
    $password = $_POST['password'];

    $result = loginAuth($username, $password);

    if ($result == 1) {
        echo "<script> window.location.href = '../Adminarea.php'</script>";
    } else {
        echo "<script> window.location.href = '../login.php?status=false'</script>";
    }
}
?>