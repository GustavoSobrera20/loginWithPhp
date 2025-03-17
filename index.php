<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Estilo para o fundo */
        body {
            background-color: #121212;
            color: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Estilo do formulário */
        form {
            background-color: #1f1f1f;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
        }

        /* Título do formulário */
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #00b894;
        }

        /* Estilo para os rótulos */
        label {
            font-size: 14px;
            color: #b0bec5;
        }

        /* Estilo para os campos de entrada */
        input[type="text"],
        input[type="password"] {
            background-color: #333;
            border: 1px solid #444;
            color: #f2f2f2;
            border-radius: 5px;
            margin-bottom: 15px;
            padding: 10px;
            width: 100%;
        }

        /* Botões */
        .btn {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            margin-top: 10px;
        }

        .btn-success {
            background-color: #2ecc71;
            border: none;
        }

        .btn-primary {
            background-color: #3498db;
            border: none;
        }

        .btn-success:hover {
            background-color: #27ae60;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="auxlogin.php" method="POST">
        <h1>Login</h1>
        <label for="user">Usuário: </label>
        <input type="text" class="form-control" name="user" id="user" required>

        <label for="password">Senha: </label>
        <input type="password" class="form-control" name="password" id="password" required>

        <input class="btn btn-success" type="submit" value="Entrar">
        <a href="cadastro.php" class="btn btn-primary">Cadastrar-se</a>
        <a href="esqueci_senha.php" class="btn btn-primary">Esqueci a Senha</a>
    </form>
</body>
</html>
