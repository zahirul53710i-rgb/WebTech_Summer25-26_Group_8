<?php
include "../Controller/buyervalidation/ProfileValidation.php";
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Buyer Profile</title>

    <script>
        function collect_data() {
            let name = document.getElementById("name").value.trim();
            let email = document.getElementById("email").value.trim();
            let phone = document.getElementById("phone").value.trim();
            let address = document.getElementById("address").value.trim();
            let dob = document.getElementById("dob").value.trim();

            let valid = true;
            let message = "";

            if (name.length < 5) {
                message += "Name Should be 5 Char\n";
                valid = false;
            }

            if (email.length < 5) {
                message += "Email Should be 5 Char\n";
                valid = false;
            }

            if (phone.length < 5) {
                message += "Phone Number Should be 5 Char\n";
                valid = false;
            }

            if (address.length < 5) {
                message += "Address Should be 5 Char\n";
                valid = false;
            }

            if (dob.length == 0) {
                message += "Date of Birth is Required\n";
                valid = false;
            }

            if (!valid) {
                alert(message);
            }

            return valid;
        }
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f0ea;
            color: #2c4238;
            padding: 20px;
            line-height: 1.5;
        }

        .container {
            max-width: 650px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            border: 1px solid #e2ddd3;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        h1 {
            color: #2c4238;
            text-align: center;
            margin-bottom: 25px;
            font-size: 28px;
            font-family: Georgia, serif;
        }

        form {
            display: block;
        }

        fieldset {
            border: 1px solid #e2ddd3;
            border-radius: 12px;
            padding: 20px;
            background-color: #ffffff;
        }

        legend {
            padding: 0 10px;
            color: #2c4238;
            font-weight: bold;
            font-size: 20px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
            font-size: 16px;
            color: #2c4238;
        }

        .title {
            font-weight: bold;
            width: 35%;
            color: #2c4238;
        }

        .photo {
            text-align: center;
            padding: 15px;
        }

        .photo img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid #4d6b5e;
            object-fit: cover;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        input[type="date"]:focus,
        textarea:focus {
            outline: none;
            border-color: #4d6b5e;
        }

        textarea {
            resize: none;
        }

        input[type="submit"],
        input[type="button"] {
            background-color: #4d6b5e;
            color: white;
            padding: 12px 15px;
            width: 100%;
            border-radius: 8px;
            border: none;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            margin-top: 5px;
            transition: background-color 0.2s ease;
        }

        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #3c5449;
        }

        .link {
            text-align: center;
            margin-top: 20px;
        }

        .link a {
            color: #4d6b5e;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
        }

        .link a:hover {
            color: #2c4238;
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Buyer Profile</h1>

        <form method="post" action="" onsubmit="return collect_data()">

            <fieldset>

                <legend>Personal Information</legend>

                <table>

                    <tr>
                        <td colspan="2" class="photo">
                            <img src="../Images/profile.jpg" alt="Profile Photo">
                        </td>
                    </tr>

                    <tr>
                        <td class="title">
                            <label for="name">Name:</label>
                        </td>
                        <td>
                            <input type="text" id="name" name="name" value="<?php echo $name; ?>">
                            <?php echo $name; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="title">
                            <label for="email">Email:</label>
                        </td>
                        <td>
                            <input type="email" id="email" name="email" value="<?php echo $email; ?>">
                            <?php echo $email; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="title">
                            <label for="phone">Phone No:</label>
                        </td>
                        <td>
                            <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>">
                            <?php echo $phone; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="title">
                            <label for="address">Address:</label>
                        </td>
                        <td>
                            <textarea id="address" name="address" rows="3"><?php echo $address; ?></textarea>
                            <?php echo $address; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="title">
                            <label for="dob">Date of Birth:</label>
                        </td>
                        <td>
                            <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>">
                            <?php echo $dob; ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <?php echo $message; ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" id="submit" name="submit" value="Update Profile">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="button" value="Order History" onclick="location.href='order_history.php'">
                        </td>
                    </tr>

                </table>

                <div class="link">
                    <a href="userlogin.php">Logout</a>
                </div>

            </fieldset>

        </form>

    </div>

</body>

</html>