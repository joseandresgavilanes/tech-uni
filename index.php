
<?php
session_start();

// Obtener datos de usuarios y contraseñas
$user_credentials = file("api/files/users/usernames/usernames.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$password_hashes = file("api/files/users/passwords/passwords.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar credenciales
    $valid_credentials = false;
    $num_users = count($user_credentials);
    for ($i = 0; $i < $num_users; $i++) {
        if ($user_credentials[$i] === $username && password_verify($password, $password_hashes[$i])) {
            // Credenciales correctas, iniciar sesión y redirigir
            $_SESSION["username"] = $username;
            $valid_credentials = true;
            break;
        }
    }

    if ($valid_credentials) {
        header('Location: components/sidebar/sidebar.php');
        exit;
    } else {
        // Credenciales incorrectas
        echo "Credenciales incorrectas";
    }
}


		// for ($i = 0; $i < count($username_array); ++$i) {
		// 	if (true) {
		// 		echo "ok";
		// 		if (true) {
		// 			// Si la contraseña coincide, establecer la sesión y redirigir
		// 			$_SESSION["username"] = $_POST['username'];
		// 			header('Location: components/sidebar/sidebar.php');
		// 			exit; // Terminar el script después de redirigir
		// 		} else {
		// 			echo 'Contraseña incorrecta.';
		// 		}
		// 	}
		
		// }

		// if(isset($_POST['username']) && isset($_POST['password'])){
		// 	$_POST['username'] == $username_array[0]
		// 	password_verify($_POST['password'], $password_array[0])
			
		// }
	// $password_hash='$2y$10$Q60tY6R/mZ.YgnmcS6eEquxGubUeQ449Zg6K1FgwzTP9XGSScqBIy'; //hola

	// $username2 ="david";
	// $password2_hash ='$2y$10$vIMPoH/LjSx6QRPkD7dQv.uPMccVRnU9vrq8mz5bkZYj2dcmU7Q02'; //password

	// if(isset($_POST['username']) && isset($_POST['password'])){
	// 	print_r($_POST);

	// 	// if($_POST['username'] == $username && password_verify($_POST['password'], $password_hash)){
	// 	// 	echo "Credencias okay";
	// 	// 	$_SESSION["username"] = $_POST['username'];
	// 	// 	header('Location: components/sidebar/sidebar.php');
	// 	// }else{
	// 	// 	echo "Credencias erradas";
	// 	// }
	// }
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

   
<div class="container-fluid loginContainer" >
        <div class="loginFormContainer">
            <div class="loginHeading">Sign In</div>
            <form action="" class="loginForm" method="POST">
            <input required="" class="loginInput" type="text" name="username" id="username" placeholder="Username">
                <input required="" class="loginInput" type="password" name="password" id="password" placeholder="Password">
                <span class="forgot-password"><a href="#">Forgot Password ?</a></span>
                <input class="loginButton" type="submit" value="Sign In">
            </form>
        </div>
    </div>


</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>