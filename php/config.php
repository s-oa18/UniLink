<?php
  // Database connection details
  $hostname = "unilink-server.mysql.database.azure.com";
  $username = "sellontech";
  $password = "@Checkers124";
  $dbname = "unilinkdb";

  // Path to the SSL CA certificate
  $ssl_ca = "/Applications/DigiCertGlobalRootCA.crt.pem"; // Ensure the path is correct and accessible

  // Initialize the MySQL connection
  $conn = mysqli_init();

  // Set SSL options
  mysqli_ssl_set($conn, NULL, NULL, $ssl_ca, NULL, NULL);

  // Establish the connection
  if (!mysqli_real_connect($conn, $hostname, $username, $password, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    die("Database connection error: " . mysqli_connect_error());
  }

  
?>
