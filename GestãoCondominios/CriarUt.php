<?php


// Dummy user storage (this should be a database in a real application)
$users = isset($_SESSION['users']) ? $_SESSION['users'] : [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $name = $_POST['name'];

    // Add user to dummy storage
    $users[] = ['id' => count($users) + 1, 'email' => $email, 'name' => $name];
    $_SESSION['users'] = $users;
    $success_message = "Utilizador criado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Utilizador</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, h2 {
            color: #333;
        }
        form {
            margin: 20px 0;
        }
        input[type="text"], input[type="number"] {
            display: block;
            margin-bottom: 10px;
            padding: 10px;
            width: 300px;
            max-width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .success-message {
            color: green;
            font-weight: bold;
            margin: 10px 0;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            padding: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Criar Utilizador</h1>
    <?php if (isset($success_message)) : ?>
        <div class="success-message"><?php echo $success_message; ?></div>
    <?php endif; ?>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Criar</button>
    </form>
    <h2>Utilizadores existentes</h2>
    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?php echo "{$user['name']} ({$user['email']})"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
