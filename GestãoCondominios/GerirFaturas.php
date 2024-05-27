<?php
session_start();

// Dummy data for invoices
$invoices = isset($_SESSION['invoices']) ? $_SESSION['invoices'] : [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $invoice_number = $_POST['invoice_number'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

    // Add invoice to dummy data
    $invoices[] = ['number' => $invoice_number, 'amount' => $amount, 'date' => $date];
    $_SESSION['invoices'] = $invoices;
    $success_message = "Fatura criada com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerir Faturas</title>
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
        input[type="text"], input[type="number"], input[type="date"] {
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
    <h1>Gerir Faturas</h1>
    <?php if (isset($success_message)) : ?>
        <div class="success-message"><?php echo $success_message; ?></div>
    <?php endif; ?>
    <form action="" method="POST">
        <input type="text" name="invoice_number" placeholder="Número da Fatura" required>
        <input type="number" name="amount" placeholder="Valor" required>
        <input type="date" name="date" required>
        <button type="submit">Criar Fatura</button>
    </form>
    <h2>Faturas existentes</h2>
    <ul>
        <?php foreach ($invoices as $invoice) : ?>
            <li><?php echo "Número: {$invoice['number']}, Valor: {$invoice['amount']}, Data: {$invoice['date']}"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
