<?php 
 session_start();
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['sess_user']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tails of joy</title>
    <link rel="stylesheet" type="text/css" href="\Mini_project/style1.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <div class="HeaderBox">
        <div style="padding-left: 5px; float: left"><h2>TAILS OF JOY</h2></div>
        <div class="titlebar">
          <ul>
          <li class="Home">
              <a href="\Mini_project/index.php">
                <i class="fa fa-home" aria-hidden="true"></i>
                <p>Home</p>
              </a>
            </li>
            <li class="Home">
              <a href="\Mini_project/postad.php">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <p>Post Add</p>
              </a>
            </li>
            <li class="Home">
              <a href="\Mini_project/dogsupplies.php">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <p>Pet Supplies</p>
              </a>
            </li>
            <!--<li class="Home">
              <a href="#">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <p>Cart</p>
              </a>
            </li>-->

            <?php if(isset($_SESSION['sess_user'])) :?>
            <li class="Home">
              <a href="#">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                <p><?php echo $_SESSION['sess_user'];?></p>
              </a>
              <ul>
                <li><a href="\Mini_project/index.php?logout='1'">logout</a></li>
              </ul>
            </li>
            <?php endif ?>

            <?php if(!isset($_SESSION['sess_user'])): ?>
              <li class="Home">
              <a href="#">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                <p>Sign up</p>
              </a>
              <ul>
                <li><a href="\Mini_project/login.php">Login</a></li>
                <li><a href="\Mini_project/register.php">Register</a></li>
              </ul>
            </li>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>

  <br><br>

    <div>
      <div>
          <p style="float: left;clear: left"><img src="bed1.PNG"   width="200" height="150"></p>
      	<div>
      	<br><br><br>
          <a href="bed1.php"><p>COOLING MAT FOR DOGS AND CATS <br> Rs.1499</p></a>
      	</div>
       </div>
       <br><br><br>

        <div style="clear: left">

          <a href="bed2.php"><p style="float: left;clear: left"><img src="bed2.PNG" width="200" height="150"></p>
          <div>
      	<br><br><br>
          <p>RAJMAHAL COMFORTABLE DOG BED - (BLUSH)<br> Rs.1499</p></a>
      	</div>
        </div>

        <br><br>
         <p style="float: left;clear: left"><img src="bed3.PNG" width='200'></p>
         <div>
      	<br><br><br>
          <p>RAJMAHAL COMFORTABLE DOG BED - (GREY) <br> <strong>OUT OF STOCK</strong></p>
        </div>
        
        <br><br><br><br><br><br><br><br>
      	<footer>
    <div class="main-content">
      <div class="left box">
        <h2>About us</h2>
        <div class="content">
          <p>Tails of joy is your one-stop online pet supply store, where you can find high-quality pet supplies, which helps your pet at every life-stage. Tails of joy will help you choose the most appropriate dog food, supplements, treats, toys, dog accessories. Not only that but also for cats, guinea pigs, rabbits, hamsters, turtles, birds & aquatic animals.</p>
          <div class="social">
            <a href="#"><span class="fab fa-facebook-f"></span></a>
            <a href="#"><span class="fab fa-twitter"></span></a>
            <a href="#"><span class="fab fa-instagram"></span></a>
            <a href="#"><span class="fab fa-youtube"></span></a>
          </div>
        </div>
      </div>
      <div class="cenetr box">
        <h2>Customer Care</h2>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">Kurla, Mumbai</span>
          </div>
          <div class="Phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+91-7658760980</span>
          </div>
          <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text">TailsOfJoy@gamil.com</span>
          </div>
        </div>
      </div>
      <div class="right box">
        <h2>Contact us</h2>
        <div class="content">
          <form action="#">
            <div class="email">
              <div class="text">Email *</div>
              <input type="email" required>
            </div>
            <div class="msg">
              <div class="text">Message *</div>
              <textarea rows="2" cols="25" required></textarea>              
            </div>
            <div class="btn">
              <button type="submit">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </footer>
  </body>
</html>
