<?php

include "../../config/include.php";

if (
    isset($_POST['first_name']) &&
    isset($_POST['last_name']) &&
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['department']) &&
    isset($_POST['id_number'])
) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $department = $_POST['department'];
    $id_number = $_POST['id_number'];
    $cpassword = $_POST['confirm_password'];

    
    if ($password !== $cpassword) {
    echo "<script> alert('Passwords do not match. Please try again.')</script>";
    exit();
}
    

    $sql = "INSERT INTO student_account (first_name, last_name, username, password, department, id_number)
            VALUES (
            :first_name, 
            :last_name, 
            :username, 
            :password, 
            :department, 
            :id_number)";

    $stmnt = $conn->prepare($sql);

    $stmnt->execute([
        "first_name" => $first_name,
        "last_name" => $last_name,
        "username" => $username,
        "password" => $password,
        "department" => $department,
        "id_number" => $id_number
    ]);

    if ($stmnt) {
        echo "<script>window.location.href='../studentlogin.php'</script>";
    } else {
        echo "not saved";
    }
}