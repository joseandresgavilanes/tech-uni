<?php
    session_start();

	$username ="username";
	$password_hash='$2y$10$Q60tY6R/mZ.YgnmcS6eEquxGubUeQ449Zg6K1FgwzTP9XGSScqBIy'; //hola

	if(isset($_POST['username']) && isset($_POST['password'])){
		if($_POST['username'] == $username && password_verify($_POST['password'], $password_hash)){
			echo "Credencias okay";
			$_SESSION["username"] = $_POST['username'];
			header('Location: components/sidebar/sidebar.php');
		}else{
			echo "Credencias erradas";
		}
	}
?>



<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech uni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="dashboard/dashboard.styles.css">
    <link rel="stylesheet" href="login/login.styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

    <?php include 'login/login.php'; ?>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>