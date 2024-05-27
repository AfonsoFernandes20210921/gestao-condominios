<?php


// Dummy data for quotations
$quotations = isset($_SESSION['quotations']) ? $_SESSION['quotations'] : [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quotation_number = $_POST['quotation_number'];
    $description = $_POST['description'];
    $amount = $_POST['amount'];

    // Add quotation to dummy data
    $quotations[] = ['number' => $quotation_number, 'description' => $description, 'amount' => $amount];
    $_SESSION['quotations'] = $quotations;
    $success_message = "Quotação criada com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Quotações</title>
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
    <h1>Criar Quotações</h1>
    <?php if (isset($success_message)) : ?>
        <div class="success-message"><?php echo $success_message; ?></div>
    <?php endif; ?>
    <form action="" method="POST">
        <input type="text" name="quotation_number" placeholder="Número da Quotation" required>
        <input type="text" name="description" placeholder="Descrição" required>
        <input type="number" name="amount" placeholder="Valor" required>
        <button type="submit">Criar Quotation</button>
    </form>
    <h2>Quotações existentes</h2>
    <ul>
        <?php foreach ($quotations as $quotation) : ?>
            <li><?php echo "Número: {$quotation['number']}, Descrição: {$quotation['description']}, Valor: {$quotation['amount']}"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
