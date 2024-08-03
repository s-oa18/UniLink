<?php
  // Database connection details
  $hostname = "unilink-server.mysql.database.azure.com";
  $username = "sellontech";
  $password = "@Checkers124";
  $dbname = "unilinkdb";
  

  // Path to the SSL CA certificate
  $ssl_ca = "/Applications/DigiCertGlobalRootCA.crt.pem";

  // Initialize the MySQL connection
  $conn = mysqli_init();

  // Set SSL options
  mysqli_ssl_set($conn, NULL, NULL, $ssl_ca, NULL, NULL);

  // Establish the connection
  if (!mysqli_real_connect($conn, $hostname, $username, $password, $dbname, 3306, MYSQLI_CLIENT_SSL)) {
    die("Database connection error: " . mysqli_connect_error());
  }

  echo "Successfully connected to Azure Database for MySQL.";

  // Close the connection
  mysqli_close($conn);
?>



