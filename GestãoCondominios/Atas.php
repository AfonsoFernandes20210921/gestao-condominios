<?php


// Dummy data for meeting minutes
$meeting_minutes = isset($_SESSION['meeting_minutes']) ? $_SESSION['meeting_minutes'] : [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $meeting_id = $_POST['meeting_id'];
    $summary = $_POST['summary'];
    $date = $_POST['date'];

    // Add meeting minutes to dummy data
    $meeting_minutes[] = ['id' => $meeting_id, 'summary' => $summary, 'date' => $date];
    $_SESSION['meeting_minutes'] = $meeting_minutes;
    $success_message = "Ata de reunião registrada com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atas</title>
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
        input[type="text"], input[type="date"] {
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
    <h1>Atas</h1>
    <?php if (isset($success_message)) : ?>
        <div class="success-message"><?php echo $success_message; ?></div>
    <?php endif; ?>
    <form action="" method="POST">
        <input type="text" name="meeting_id" placeholder="ID da Reunião" required>
        <input type="text" name="summary" placeholder="Resumo" required>
        <input type="date" name="date" required>
        <button type="submit">Registrar Ata</button>
    </form>
    <h2>Atas registradas</h2>
    <ul>
        <?php foreach ($meeting_minutes as $minutes) : ?>
            <li><?php echo "ID: {$minutes['id']}, Resumo: {$minutes['summary']}, Data: {$minutes['date']}"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
