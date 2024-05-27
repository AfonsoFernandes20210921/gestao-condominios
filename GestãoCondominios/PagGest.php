<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Gestor</title>
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
    <a href="utilizador.html">Utilizador</a>
</div>

<div class="container">
    
    
    <div class="card-container">
        <div class="card">
            <h3>Gerir Faturas</h3>
            <p>Gerenciar todas as faturas emitidas.</p>
            <a href="GerirFaturas.php"><button>Gerenciar</button></a>
        </div>
        <div class="card">
            <h3>Criar Quotizações</h3>
            <p>Definir e criar quotizações para os moradores.</p>
            <a href="CriarQuo.php"><button>Gerenciar</button></a>
        </div>
    </div>
    
    <div class="card-container">
        <div class="card">
            <h3>Criar Condomínios</h3>
            <p>Adicionar novos condomínios ao sistema.</p>
            <a href="CriarCondo.php"><button>Gerenciar</button></a>
        </div>
        <div class="card">
            <h3>Gerir Pagamentos</h3>
            <p>Controlar e registrar pagamentos realizados.</p>
            <a href="GerirPagamentos.php"><button>Gerenciar</button></a>
        </div>
    </div>
    
    <div class="card-container">
        <div class="card">
            <h3>Registar Pedidos</h3>
            <p>Registrar e acompanhar pedidos dos moradores.</p>
            <a href="RegistarPedidos.php"><button>Gerenciar</button></a>
        </div>
        <div class="card">
            <h3>Atas de Reunião</h3>
            <p>Gerenciar atas de reuniões realizadas.</p>
            <a href="AtasReuniao.php"><button>Gerenciar</button></a>
        </div>
    </div>
</div>

<div class="footer">
    <p>© 2024 Gestão de Condomínios. Todos os direitos reservados.</p>
</div>

</body>
</html>