<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UniLink</title>
    <link rel="stylesheet" href="assets/css/index.css" />
    <script
      src="https://kit.fontawesome.com/ff7f76d416.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header class="header-container">
      <nav class="nav-items">
        <img class="logo" src="assets/images/logo1.png" alt="logo" />
        <ul id="menuList">
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a class="login" href="login.php">Login</a></li>
          <li><a class="signup" href="register.php">Register</a></li>
        </ul>
        <div class="bars">
          <i class="fas fa-bars" onclick="toggleMenu()"></i>
        </div>
      </nav>
    </header>

    <main>
      <section class="hero">
        <div class="opacity"></div>
        <div class="hero-text">
          <h1 class="title">Connect. Communicate. Collaborate.</h1>
          <p class="description">
            Welcome to <strong>UniLink</strong>, where students can connect,
            share knowledge, and support each other.
          </p>
          <!-- <p class="description">
            Join now to start networking with peers, engage in meaningful
            discussions, and build lasting academic relationships.
          </p> -->
          <a href="#" class="button">Get Started！</a>
        </div>
      </section>
    </main>
    <footer class="footer-container">
      <div class="footer-items">
        <img class="logo" src="assets/images/logo1.png" alt="logo" />
        <ul id="footer-links">
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <p>(c) UniLink, Inc. 2024. built with love!</p>
      </div>
    </footer>

    <script>
      let menuList = document.getElementById("menuList");
      menuList.style.maxHeight = "0px";

      function toggleMenu() {
        if (menuList.style.maxHeight == "0px") {
          menuList.style.maxHeight = "300px";
        } else {
          menuList.style.maxHeight = "0px";
        }
      }
    </script>
  </body>
</html>
