```php
<?php

class db
{
    /*
     * DATABASE CONNECTION
     */
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


    /*
     * ADD PRODUCT
     */
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


    /*
     * GET ALL PRODUCTS OF A SELLER
     */
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


    /*
     * GET ONE PRODUCT
     */
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


    /*
     * REMOVE PRODUCT
     */
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
