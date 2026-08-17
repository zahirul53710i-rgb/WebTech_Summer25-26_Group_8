<?php
// PHP code can be added later
?>

<!DOCTYPE html>
<html lang="en-US">

<head>

<meta charset="UTF-8">
<title>Review Page</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background-color: bisque;
    padding:20px;
}

.container{
    max-width:600px;
    margin:50px auto;
    background:white;
    padding:30px;
    border-radius:30px;
    box-shadow:0 20px 20px;
}

h1{
    text-align:center;
    color:blue;
    margin-bottom:20px;
}

fieldset{
    background:cornsilk;
    border-radius:20px;
    padding:20px;
}

legend{
    font-weight:bold;
    font-size:18px;
}

label{
    font-size:16px;
}

input[type="text"],
textarea{
    width:100%;
    padding:10px;
    margin:8px 0;
    border-radius:10px;
}

input[type="checkbox"]{
    margin-right:8px;
}

input[type="submit"]{
    width:100%;
    padding:12px;
    background:red;
    color:white;
    border:none;
    border-radius:10px;
    font-weight:bold;
    cursor:pointer;
}

input[type="submit"]:hover{
    background:black;
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
<p><b>How was seller?</b></p>

<label><input type="radio" name="seller" value="Good"> Good</label>
<label><input type="radio" name="seller" value="Average"> Average</label>
<label><input type="radio" name="seller" value="Bad"> Bad</label>

<br><br>

<!-- Happy -->
<p><b>Are you happy?</b></p>

<label><input type="radio" name="happy" value="Yes"> Yes</label>
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