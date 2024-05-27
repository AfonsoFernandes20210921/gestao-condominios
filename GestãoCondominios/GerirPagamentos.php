<?php


// Dummy data for payments
$payments = isset($_SESSION['payments']) ? $_SESSION['payments'] : [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $payment_id = $_POST['payment_id'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

    // Add payment to dummy data
    $payments[] = ['id' => $payment_id, 'amount' => $amount, 'date' => $date];
    $_SESSION['payments'] = $payments;
    $success_message = "Pagamento registrado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerir Pagamentos</title>
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
    <h1>Gerir Pagamentos</h1>
    <?php if (isset($success_message)) : ?>
        <div class="success-message"><?php echo $success_message; ?></div>
    <?php endif; ?>
    <form action="" method="POST">
        <input type="text" name="payment_id" placeholder="ID do Pagamento" required>
        <input type="number" name="amount" placeholder="Valor" required>
        <input type="date" name="date" required>
        <button type="submit">Registrar Pagamento</button>
    </form>
    <h2>Pagamentos registrados</h2>
    <ul>
        <?php foreach ($payments as $payment) : ?>
            <li><?php echo "ID: {$payment['id']}, Valor: {$payment['amount']}, Data: {$payment['date']}"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
