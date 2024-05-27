<?php
session_start();

// Hardcoded credentials
$valid_email = "adm@gmail.com";
$valid_password = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check credentials
    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['user_id'] = 1; // Arbitrary user ID
        header("Location: PagAdm.php"); // Redirect to a dashboard or home page
        exit();
    } else {
        $error_message = "Incorrect email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('Condo2.jpg');
            background-size: cover;
            background-position: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .login-form {
            background-color: rgba(0, 68, 204, 0.9);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            color: white;
        }

        .login-form h2 {
            margin-bottom: 20px;
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #000044;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-form button:hover {
            background-color: #000022;
        }

        .error-message {
            color: red;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-form">
            <h2>Login Administrador</h2>
            <?php
            if (isset($error_message)) {
                echo "<div class='error-message'>$error_message</div>";
            }
            ?>
            <input type="text" name="email" placeholder="email" required>
            <input type="password" name="password" placeholder="palavra-passe" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
