<?php


// Dummy data for payment receipts
$receipts = isset($_SESSION['receipts']) ? $_SESSION['receipts'] : [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $receipt_id = $_POST['receipt_id'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $file = "receipt_" . $receipt_id . ".pdf"; // Dummy file name

    // Add receipt to dummy data
    $receipts[] = ['id' => $receipt_id, 'amount' => $amount, 'date' => $date, 'file' => $file];
    $_SESSION['receipts'] = $receipts;
    $success_message = "Recibo registrado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibos de Pagamentos</title>
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
        .download-link {
            color: #007bff;
            text-decoration: none;
        }
        .download-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Recibos de Pagamentos</h1>
    <?php if (isset($success_message)) : ?>
        <div class="success-message"><?php echo $success_message; ?></div>
    <?php endif; ?>
    <form action="" method="POST">
        <input type="text" name="receipt_id" placeholder="ID do Recibo" required>
        <input type="number" name="amount" placeholder="Valor" required>
        <input type="date" name="date" required>
        <button type="submit">Registrar Recibo</button>
    </form>
    <h2>Recibos registrados</h2>
    <ul>
        <?php foreach ($receipts as $receipt) : ?>
            <li>
                <?php echo "ID: {$receipt['id']}, Valor: {$receipt['amount']}, Data: {$receipt['date']}"; ?>
                - <a href="<?php echo $receipt['file']; ?>" class="download-link" download>Download</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
