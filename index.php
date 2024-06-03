<?php
session_start();

// Get user data and passwords
$user_credentials = file("api/files/users/usernames/usernames.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$password_hashes = file("api/files/users/passwords/passwords.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verify credentials
    $valid_credentials = false;
    $num_users = count($user_credentials);
    for ($i = 0; $i < $num_users; $i++) {
        if ($user_credentials[$i] === $username && password_verify($password, $password_hashes[$i])) {
            // Correct credentials, start session and redirect
            $_SESSION["username"] = $username;
            $valid_credentials = true;
            break;
        }
    }

    if ($valid_credentials) {
        header('Location: components/sidebar/sidebar.php');
        exit;
    } else {
        // Incorrect credentials
        echo "Incorrect credentials";
    }
}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech uni</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom stylesheets -->
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="dashboard/dashboard.styles.css">
    <link rel="stylesheet" href="login/login.styles.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
</head>
<body>

  <?php 
  
  include 'login/login.php';
  ?> 


<!-- //Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
