<?php
function loginAuth($usernames, $passwords)
{
    include "connection.php";

    $sql = "SELECT * FROM student_account WHERE username = :username AND password = :password ";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
        "username" => $usernames,
        "password" => $passwords

    ]);

    $count = $stmnt -> rowCount();

    return $count;
}
?>