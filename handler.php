<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.amber-deep_orange.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Checkout</title>
</head>
<body>
  <!-- Always shows a header, even in smaller screens. -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Checkout</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
      </div>
    </header>
  </div>
        <?php
        while (1) {
          $Pizza = "";
          if (isset($_POST['Pizza'])) {
            $Pizza = $_POST['Pizza'];
          }
          $toppings = "";
          if (isset($_POST['toppings'])) {
            $toppings = $_POST['toppings'];
          }
          if ($Pizza == "Large" or $Pizza == "large") {
            $pizzacost = 6;
          } elseif ($Pizza == "Extra large" or $Pizza == "Extra Large" or $Pizza == "extra large" or $Pizza == "extra Large" or $Pizza == "Extra-large" or $Pizza == "extra-large" or $Pizza == "Extra-Large" or $Pizza == "extra-Large") {
            $pizzacost = 10;
          } else {
            echo "<br>";
            echo"<br>";
            echo "<h1>Error</h1>";
            echo "<h3> The size you wrote was not an option. Please choose Large or Extra large </h3>";
            #<!-- Colored raised button -->
            echo '<a href="/OrderNow.html">
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
          Try again
        </button>
      </a>';
            break;
          }
          if ($toppings == "1" or $toppings == "one" or $toppings == "One") {
            $toppingscost = 1;
          } elseif ($toppings == "2" or $toppings == "two" or $toppings == "Two") {
            $toppingscost = 1.75;
          } elseif ($toppings == "3" or $toppings == "three" or $toppings == "Three") {
            $toppingscost = 2.50;
          } elseif ($toppings == "4" or $toppings == "four" or $toppings == "Four") {
            $toppingscost = 3.35;
          } else {
            echo "<br>";
            echo "<br>";
            echo "<h1>Error<h1>";
            echo "<h3>The number of toppings you wrote was not an option.Please write a number from 1-4<h3>";
            #<!-- Colored raised button -->
            echo '<a href="/OrderNow.html">
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
          Try again
        </button>
      </a>';
            break;
          }
          echo"<br>";
          echo"<br>";
          echo "<h1>Cost:</h1>";
          echo "<h3> Pizza:$", number_format($pizzacost, 2, '.', ''), "</h3>";
          echo "<h3> Toppings:$", number_format($toppingscost, 2, '.', ''), "</h3>";
          $subtotal = $pizzacost + $toppingscost;
          echo "<h3>Subtotal:$", number_format($subtotal, 2, '.', ''), "</h3>";
          $HST = $subtotal * 0.13;
          echo "<h3>HST:$", number_format($HST, 2, '.', ''), "</h3>";
          $total = $subtotal + $HST;
          echo "<h3>Total:$", number_format($total, 2, '.', ''), "</h3>";
          #<!-- Colored raised button -->
          echo '<a href="/Rating.html">
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
        Order Now
      </button>
    </a>';
          break;
        }
        ?>
</body>

</html>