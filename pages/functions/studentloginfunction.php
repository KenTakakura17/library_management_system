<?php

include "../../config/include.php";


if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['id_number']) && isset($_POST['department']) && isset($_POST['username']) && isset($_POST['password'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $id_number = $_POST['id_number'];
    $department = $_POST['department'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if ($password !== $confirm) {
    echo "<script> alert('Passwords do not match. Please try again.')</script>";
    exit();
}

    $sql = "INSERT INTO student_account (id_number, department, username, first_name, last_name, password)
            VALUES (
                :id_number,
                :department,
                :username,
                :first_name,
                :last_name,
                :password
            )";

    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "id_number" => $id_number,
        "department" => $department,
        "username" => $username,
        "first_name" => $first_name,
        "last_name" => $last_name,
        "password" => $password
    ]);
    if($stmnt){
        echo "<script> window.location.href = '../studentlogin.php'</script>";
    } else {
        echo "not save";
    }
}