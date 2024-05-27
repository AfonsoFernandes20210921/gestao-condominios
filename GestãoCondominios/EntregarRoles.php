<?php

// Dummy user and roles storage (this should be a database in a real application)
$users = isset($_SESSION['users']) ? $_SESSION['users'] : [];
$roles = ['Administrador', 'Gestor', 'Utilizador'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $role = $_POST['role'];

    // Assign role to user
    foreach ($users as &$user) {
        if ($user['id'] == $user_id) {
            $user['role'] = $role;
            $_SESSION['users'] = $users;
            $success_message = "Role atribuída com sucesso!";
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entregar Roles</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #f2f2f2;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 600px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .form-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-field {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            width: 100%;
        }

        .form-label {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-input {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            width: 100%;
        }

        .form-button {
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-button:hover {
            background-color: #3e8e41;
        }

        .invoice-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            margin-top: 20px;
        }

        .invoice-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 10px;
            background-color: #f2f2f2;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        .invoice-number {
            font-size: 16px;
            font-weight: bold;
        }

        .invoice-value {
            font-size: 16px;
            font-weight: bold;
            color: #4CAF50;
        }

        .invoice-date {
            font-size: 14px;
            color: #666;
        }
</style>
</head>
<body>
    <h1>Entregar Roles</h1>
    <?php if (isset($success_message)) : ?>
        <div class="success-message"><?php echo $success_message; ?></div>
    <?php endif; ?>
    <form action="" method="POST">
        <select name="user_id" required>
            <option value="">Selecione o Utilizador</option>
            <?php foreach ($users as $user) : ?>
                <option value="<?php echo $user['id']; ?>"><?php echo "{$user['name']} ({$user['email']})"; ?></option>
            <?php endforeach; ?>
        </select>
        <select name="role" required>
            <option value="">Selecione a Role</option>
            <?php foreach ($roles as $role) : ?>
                <option value="<?php echo $role; ?>"><?php echo $role; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Atribuir Role</button>
    </form>
    <h2>Utilizadores e Roles</h2>
    <ul>
        <?php foreach ($users as $user) : ?>
            <?php $role = isset($user['role']) ? $user['role'] : 'Nenhuma'; ?>
            <li><?php echo "{$user['name']} ({$user['email']}) - Role: $role"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
