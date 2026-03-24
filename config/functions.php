<?php
function loginAuth($username, $password)
{
    include "connection.php";

    $sql = "SELECT * FROM student_account WHERE username = :username AND password = :password ";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
        "username" => $username,
        "password" => $password

    ]);

    $count = $stmnt -> rowCount();

    return $count;

}
?>