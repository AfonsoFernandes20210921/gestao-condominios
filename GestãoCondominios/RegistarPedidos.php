<?php


// Dummy data for requests
$requests = isset($_SESSION['requests']) ? $_SESSION['requests'] : [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $request_id = $_POST['request_id'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    // Add request to dummy data
    $requests[] = ['id' => $request_id, 'description' => $description, 'status' => $status];
    $_SESSION['requests'] = $requests;
    $success_message = "Pedido registrado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Pedidos</title>
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
    <h1>Registar Pedidos</h1>
    <?php if (isset($success_message)) : ?>
        <div class="success-message"><?php echo $success_message; ?></div>
    <?php endif; ?>
    <form action="" method="POST">
        <input type="text" name="request_id" placeholder="ID do Pedido" required>
        <input type="text" name="description" placeholder="Descrição" required>
        <input type="text" name="status" placeholder="Status" required>
        <button type="submit">Registrar Pedido</button>
    </form>
    <h2>Pedidos registrados</h2>
    <ul>
        <?php foreach ($requests as $request) : ?>
            <li><?php echo "ID: {$request['id']}, Descrição: {$request['description']}, Status: {$request['status']}"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
