<?php

include "../../config/include.php";


if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['department'])
     && isset($_POST['id_number'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $department = $_POST['department'];
    $id_number = $_POST['id_number'];

    if ($password !== $confirm) {
    echo "<script> alert('Passwords do not match. Please try again.')</script>";
    exit();
}

    $sql = "INSERT INTO facebook_users (username, email, first_name, last_name, mobile_num, birthdate, gender, password)
            VALUES (
                :username,
                :email,
                :first_name,
                :last_name,
                :mobile_num,
                :birthdate,
                :gender,
                :password)";

    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "username" => $user_name,
        "email" => $email,
        "first_name" => $first_name,
        "last_name" => $last_name,
        "mobile_num" => $mobile_num,
        "birthdate" => $birthdate,
        "gender" => $gender,
        "password" => $password
    ]);

    if ($stmnt) {
        echo "<script> window.location.href = '../login.php'</script>";
    } else {
        echo "not save";
    }
}
