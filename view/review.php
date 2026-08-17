<?php
// PHP code can be added later
?>

<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="UTF-8">
    <title>Review Page</title>

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
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 16px;
            border: 1px solid #e2ddd3;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        h1 {
            text-align: center;
            color: #2c4238; 
            margin-bottom: 20px;
            font-size: 28px;
            font-family: Georgia, serif;
        }

        fieldset {
            background: #ffffff;
            border: 1px solid #e2ddd3;
            border-radius: 12px;
            padding: 20px;
        }

        legend {
            font-weight: bold;
            font-size: 18px;
            color: #2c4238;
            padding: 0 8px;
        }

        p {
            color: #2c4238;
            margin-bottom: 6px;
        }

        label {
            font-size: 15px;
            color: #2c4238;
            cursor: pointer;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px 12px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            outline: none;
            transition: border-color 0.2s ease;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #4d6b5e;
        }

        input[type="checkbox"],
        input[type="radio"] {
            margin-right: 8px;
            accent-color: #4d6b5e; 
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #4d6b5e;
            color: white;
            border: none;
            border-radius: 8px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.2s ease;
        }

        input[type="submit"]:hover {
            background: #3c5449; 
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Product Review</h1>

    <fieldset>

        <legend>Give Your Review</legend>

        <form method="post">

            <!-- Product Type -->
            <p><b>Which product did you buy?</b></p>

            <label><input type="checkbox" name="product[]" value="Bike"> Bike</label><br>
            <label><input type="checkbox" name="product[]" value="Car"> Car</label><br>
            <label><input type="checkbox" name="product[]" value="Truck"> Truck</label><br>
            <label><input type="checkbox" name="product[]" value="Bus"> Bus</label><br>

            <br>

            <!-- Seller Experience -->
            <p><b>How was the seller?</b></p>

            <label><input type="radio" name="seller" value="Good"> Good</label>&nbsp;&nbsp;
            <label><input type="radio" name="seller" value="Average"> Average</label>&nbsp;&nbsp;
            <label><input type="radio" name="seller" value="Bad"> Bad</label>

            <br><br>

            <!-- Happy -->
            <p><b>Are you happy?</b></p>

            <label><input type="radio" name="happy" value="Yes"> Yes</label>&nbsp;&nbsp;
            <label><input type="radio" name="happy" value="No"> No</label>

            <br><br>

            <!-- Comment -->
            <p><b>Your Review</b></p>

            <textarea name="review" rows="4" placeholder="Write your opinion..."></textarea>

            <br><br>

            <input type="submit" value="Submit Review">

        </form>

    </fieldset>

</div>

</body>

</html>