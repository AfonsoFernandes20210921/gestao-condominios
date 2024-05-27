<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Utilizador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header {
            background-image: url('Condo2.jpg');
            color: white;
            text-align: center;
            padding: 70px 0;
        }

        .header h1 {
            margin: 0;
        }

        .nav {
            background-color: #f4f4f4;
            padding: 15px;
            text-align: center;
        }

        .nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
        }

        .container {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .welcome {
            text-align: center;
            margin-bottom: 20px;
        }

        .welcome h2 {
            margin: 0;
        }

        .card {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 10px 20px; /* added margin to create spacing between cards */
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .card h3 {
            margin-top: 0;
        }

        .card p {
            margin: 10px 0;
        }

        .card button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .footer p {
            margin: 0;
        }

        /* Add this to make the cards side by side */
        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Bem-Vindo Sr(a) Nome do Gestor(a)</h1>
</div>

<div class="nav">
    <a href="index.html">Home</a>
    <a href="admin.html">Administrador</a>
    <a href="gestor.html">Gestor</a>
</div>

<div class="container">
    
    
    <div class="card-container">
        <div class="card">
            <h3>Despesas Correntes</h3>
            <p>Verifique e pague as suas despesas correntes.</p>
            <a href="DespesasCorrentes.php"><button>Gerenciar</button></a>
        </div>
        <div class="card">
            <h3>Recibos de Pagamentos</h3>
            <p>Visualize e faça download dos seus recibos de pagamento.</p>
            <a href="RecibosPagamentos.php"><button>Gerenciar</button></a>
        </div>
    </div>
    
    <div class="card-container">
        <div class="card">
            <h3>Atas</h3>
            <p>Acesse as atas das reuniões do condomínio.</p>
            <a href="Atas.php"><button>Gerenciar</button></a>
        </div>
        <div class="card">
            <h3>Gerir Pedidos</h3>
            <p>Registre e acompanhe o status dos seus pedidos.</p>
            <a href="GerirPedidos.php"><button>Gerenciar</button></a>
        </div>
    </div>
    
    <div class="card-container">
        <div class="card">
            <h3>Funcionalidade 5</h3>
            <p>Descrição da funcionalidade 5.</p>
            <button>Gerenciar</button>
        </div>
        <