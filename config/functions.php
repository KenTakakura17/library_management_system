
<?php

function retrieveAllUser()
{
    include "connection.php";

    $sql = "SELECT * FROM users";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute();

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

function retrieveAllProducts()
{
    include "connection.php";

    $sql = "SELECT * FROM products";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute();

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}



function loginAuth($usernames, $passwords)
{
    include "connection.php";

    $sql = "SELECT * FROM facebook_users WHERE username = :username AND password = :password ";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
        "username" => $usernames,
        "password" => $passwords

    ]);

    $count = $stmnt -> rowCount();

    return $count;

}


function getUser($user_id)
{
    include "connection.php";

    $sql = "SELECT * FROM users WHERE user_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
        "id" => $user_id

    ]);

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);

}

function updateUser($userID, $Name, $Age, $Address, $usernames, $passwords)
{
    include "connection.php";

    $sql = "UPDATE users SET 
        Name = :name,
        Age = :age,
        Address = :address,
        username = :username,
        password = :password
        WHERE
        user_id= :user_id";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
            "name" => $Name,
            "age" => $Age,
            "address" => $Address,
            "username" => $usernames,
            "password" => $passwords,
            "user_id" => $userID
    ]);

    return $stmnt;

}

function updateProduct($prod_name, $prod_quantity, $prod_type, $prod_price, $prod_date_added, $prod_id)
{
    include "connection.php";

    $sql = "UPDATE products SET 
        prod_name = :prodname,
        prod_quantity = :prodquantity,
        prod_type = :prodtype,
        prod_price = :prodprice,
        prod_date_added = :proddateadded
        WHERE
        prod_id = :prod_id";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
            "prodname" => $prod_name,
            "prodquantity" => $prod_quantity,
            "prodtype" => $prod_type,
            "prodprice" => $prod_price,
            "proddateadded" => $prod_date_added,
            "prod_id" => $prod_id
    ]);

    return $stmnt;

}

function getProduct($prod_id)
{
    include "connection.php";

    $sql = "SELECT * FROM products WHERE prod_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
        "id" => $prod_id

    ]);

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);

}


function deleteUser($id){
    include "connection.php";
    $sql = "DELETE FROM users WHERE user_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
        "id" => $id
    ]);

    return $stmnt;
}

function deleteProduct($id){
    include "connection.php";
    $sql = "DELETE FROM products WHERE prod_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
        "id" => $id
    ]);

    return $stmnt;
}
?>