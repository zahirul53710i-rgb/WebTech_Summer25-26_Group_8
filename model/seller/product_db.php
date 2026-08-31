<?php

class db
{
   
    function connection()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "selleronly";

        $connection = new mysqli(
            $db_host,
            $db_user,
            $db_password,
            $db_name
        );

        if ($connection->connect_error)
        {
            die(
                "Database connection failed: "
                . $connection->connect_error
            );
        }

        return $connection;
    }


   
    function addProduct(
        $connection,
        $name,
        $price,
        $quantity,
        $picture,
        $username
    )
    {
        $sql = "INSERT INTO product
                (name, price, quantity, picture, username)
                VALUES
                (?, ?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);

        if (!$stmt)
        {
            return false;
        }

        $stmt->bind_param(
            "sdiss",
            $name,
            $price,
            $quantity,
            $picture,
            $username
        );

        $result = $stmt->execute();

        $stmt->close();

        return $result;
    }


    
    function getProduct(
        $connection,
        $username
    )
    {
        $sql = "SELECT *
                FROM product
                WHERE username = ?
                ORDER BY id DESC";

        $stmt = $connection->prepare($sql);

        if (!$stmt)
        {
            return false;
        }

        $stmt->bind_param(
            "s",
            $username
        );

        $stmt->execute();

        $result = $stmt->get_result();

        return $result;
    }


    
    function getSingleProduct(
        $connection,
        $productId,
        $username
    )
    {
        $sql = "SELECT *
                FROM product
                WHERE id = ?
                AND username = ?";

        $stmt = $connection->prepare($sql);

        if (!$stmt)
        {
            return false;
        }

        $stmt->bind_param(
            "is",
            $productId,
            $username
        );

        $stmt->execute();

        $result = $stmt->get_result();

        $product = $result->fetch_assoc();

        $stmt->close();

        return $product;
    }


    
    function removeProduct(
        $connection,
        $productId,
        $username
    )
    {
        $sql = "DELETE FROM product
                WHERE id = ?
                AND username = ?";

        $stmt = $connection->prepare($sql);

        if (!$stmt)
        {
            return false;
        }

        $stmt->bind_param(
            "is",
            $productId,
            $username
        );

        $result = $stmt->execute();

        $stmt->close();

        return $result;
    }
}

?>
```
