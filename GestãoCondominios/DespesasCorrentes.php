<?php


// Dummy data for current expenses
$current_expenses = isset($_SESSION['current_expenses']) ? $_SESSION['current_expenses'] : [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expense_id = $_POST['expense_id'];
    $description = $_POST['description'];
    $amount = $_POST['amount'];
    $due_date = $_POST['due_date'];

    // Add current expense to dummy data
    $current_expenses[] = ['id' => $expense_id, 'description' => $description, 'amount' => $amount, 'due_date' => $due_date];
    $_SESSION['current_expenses'] = $current_expenses;
    $success_message = "Despesa registrada com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despesas Correntes</title>
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
    <h1>Despesas Correntes</h1>
    <?php if (isset($success_message)) : ?>
        <div class="success-message"><?php echo $success_message; ?></div>
    <?php endif; ?>
    <form action="" method="POST">
        <input type="text" name="expense_id" placeholder="ID da Despesa" required>
        <input type="text" name="description" placeholder="Descrição" required>
        <input type="number" name="amount" placeholder="Valor" required>
        <input type="date" name="due_date" required>
        <button type="submit">Registrar Despesa</button>
    </form>
    <h2>Despesas registradas</h2>
    <ul>
        <?php foreach ($current_expenses as $expense) : ?>
            <li><?php echo "ID: {$expense['id']}, Descrição: {$expense['description']}, Valor: {$expense['amount']}, Data de Vencimento: {$expense['due_date']}"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
