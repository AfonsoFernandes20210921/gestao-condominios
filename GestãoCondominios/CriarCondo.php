<?php

// Dummy data for condominiums
$condominiums = isset($_SESSION['condominiums']) ? $_SESSION['condominiums'] : [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];

    // Add condominium to dummy data
    $condominiums[] = ['name' => $name, 'address' => $address];
    $_SESSION['condominiums'] = $condominiums;
    $success_message = "Condomínio criado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Condomínios</title>
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
        input[type="text"] {
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
    <h1>Criar Condomínios</h1>
    <?php if (isset($success_message)) : ?>
        <div class="success-message"><?php echo $success_message; ?></div>
    <?php endif; ?>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Nome do Condomínio" required>
        <input type="text" name="address" placeholder="Endereço" required>
        <button type="submit">Criar Condomínio</button>
    </form>
    <h2>Condomínios existentes</h2>
    <ul>
        <?php foreach ($condominiums as $condominium) : ?>
            <li><?php echo "Nome: {$condominium['name']}, Endereço: {$condominium['address']}"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>