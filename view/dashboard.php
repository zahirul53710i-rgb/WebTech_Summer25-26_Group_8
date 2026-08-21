<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username != "admin" || $password != "admin") {

    echo "<script>
                alert('Invalid username or password');
                window.location.href='login_admin.php';
              </script>";

    exit();
  }
}

$pageTitle = "Dashboard";

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo $pageTitle; ?></title>

  <link rel="stylesheet" href="assets/css/style.css">

  <script src="assets/js/main.js"></script>

</head>

<body>



  <div class="wrap">

    <!-- Hero Section -->

    <div class="hero">

      <p class="eyebrow">
        Welcome to HaatBodol
      </p>

      <h1>
        Buy and Sell Rare Collectibles
      </h1>

      <p>
        HaatBodol is an online marketplace for buying and selling
        rare antiques, ancient coins and old showpieces.
        Choose your role to continue.
      </p>

    </div>


    <!-- Role Selection -->

    <div class="counter-grid">

      <!-- Admin -->

      <div class="ticket">

        <span class="lot-no">
          COUNTER No. 01
        </span>

        <svg class="role-icon"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="1.6">

          <path d="M14 4l6 6M9.5 8.5l-6 6a1.5 1.5 0 0 0 0 2.1l1.9 1.9a1.5 1.5 0 0 0 2.1 0l6-6M6 20l3-3M12.5 5.5l6 6"
            stroke-linecap="round"
            stroke-linejoin="round" />

        </svg>

        <h2>Admin</h2>

        <p>
          Manage users, approve seller listings and
          handle buying requests.
        </p>

        <a href="login_admin.php" class="enter-link">
          Enter as Admin
          <span class="arrow">&rarr;</span>
        </a>

      </div>


      <!-- Buyer -->

      <div class="ticket">

        <span class="lot-no">
          COUNTER No. 02
        </span>

        <svg class="role-icon"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="1.6">

          <circle cx="9" cy="9" r="5.5" />

          <path d="M13 13l7 7"
            stroke-linecap="round" />

        </svg>

        <h2>Buyer</h2>

        <p>
          Browse approved products, place orders
          and track your purchases.
        </p>

        <a href="userlogin.php" class="enter-link">
          Enter as Buyer
        </a>

      </div>


      <!-- Seller -->

      <div class="ticket">

        <span class="lot-no">
          COUNTER No. 03
        </span>

        <svg class="role-icon"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="1.6">

          <path d="M4 8l1.5-4h13L20 8"
            stroke-linecap="round"
            stroke-linejoin="round" />

          <path d="M4 8h16v3a2 2 0 0 1-2 2
                         2 2 0 0 1-2-2
                         2 2 0 0 1-2 2
                         2 2 0 0 1-2-2
                         2 2 0 0 1-2 2
                         2 2 0 0 1-2-2
                         2 2 0 0 1-2 2
                         2 2 0 0 1-2-2V8z"
            stroke-linejoin="round" />

          <path d="M5.5 13v7h13v-7"
            stroke-linejoin="round" />

        </svg>

        <h2>Seller</h2>

        <p>
          Add your collectible items and submit
          them for admin approval.
        </p>

        <a href="selller_login.php" class="enter-link">
    Enter as Seller
    <span class="arrow">&rarr;</span>
</a>

      </div>


      <!-- Delivery -->

      <div class="ticket">

        <span class="lot-no">
          COUNTER No. 04
        </span>

        <svg class="role-icon"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="1.6">

          <path d="M3 7h11v9H3z"
            stroke-linejoin="round" />

          <path d="M14 10h4l3 3v3h-7v-6z"
            stroke-linejoin="round" />

          <circle cx="7" cy="18.5" r="1.7" />

          <circle cx="17.5" cy="18.5" r="1.7" />

        </svg>

        <h2>Delivery</h2>

        <p>
          Handle approved parcels and deliver them
          safely to the buyer.
        </p>

        <a href="registration.php" class="enter-link">
          Enter as Delivery
          <span class="arrow">&rarr;</span>
        </a>

      </div>

    </div>

  </div>


</body>

</html>