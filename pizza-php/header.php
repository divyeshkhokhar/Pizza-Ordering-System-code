<!-- NAVBAR -->
<?php
session_start();
?>
<nav class="flex justify-between bg-#F6E7D0">
      <a href="index.php"> <img src="./images/PizzaWala.png" class="-mt-6 ml-20 w-48 pt-3 hover:scale-110"></a>
      <ul class="px-28 py-4 flex space-x-11 justify-end">
      <li class="cursor-pointer mt-14 font-bold text-xl hover:scale-110"><a href="menu.php">Menu</a></li>
        <li class="cursor-pointer mt-14 font-bold text-xl hover:scale-110"><a href="index.php#about">About Us</a></li>
        <li class="cursor-pointer mt-14 font-bold text-xl hover:scale-110"><a href="index.php#contact">Contact Us</a></li>
        <li class="cursor-pointer mt-14 font-bold text-xl hover:scale-110"><a href="cart.php">Cart</a></li>
        <?php
        if (isset($_SESSION['isLoggedIn'])) {
          echo "<li class='cursor-pointer mt-14 font-bold text-xl hover:scale-110'><a href='logout.php'>Log Out</a></li>";
        } else {
          echo "<li class='cursor-pointer mt-14 font-bold text-xl hover:scale-110'><a href='login.php'>Log In</a></li>";
        }
        ?>

      </ul>
    </nav>