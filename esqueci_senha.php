<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Esqueci a Senha</title>

    <style>
        /* Corpo da página */
        body {
            background-color: #2c3e50; /* Cor de fundo escura */
            font-family: 'Arial', sans-serif; /* Fonte limpa e legível */
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Contêiner principal */
        main {
            background-color: #34495e; /* Fundo escuro para o formulário */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Sombra suave */
            width: 100%;
            max-width: 500px; /* Formulário com tamanho ajustado */
            text-align: center;
        }

        /* Título do formulário */
        h2 {
            color: #ecf0f1;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Estilo para os rótulos */
        label {
            font-size: 14px;
            color: #ecf0f1;
            margin-bottom: 5px;
            display: block;
        }

        /* Estilo para os campos de entrada */
        input[type="number"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #7f8c8d;
            border-radius: 5px;
            font-size: 14px;
            color: #ecf0f1;
            background-color: #2c3e50;
            transition: all 0.3s;
        }

        input[type="number"]:focus,
        input[type="password"]:focus {
            border-color: #3498db;
            outline: none;
        }

        /* Estilo do botão de envio */
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            background-color: #1abc9c;
            color: white;
            border: none;
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #16a085;
        }

        /* Estilo da imagem */
        img {
            width: 100px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        /* Textos e links adicionais */
        .text-center {
            font-size: 14px;
            color: #ecf0f1;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <main class="container">
   
        <h2>ESQUECI A SENHA</h2>
        <form action="./esqueci_senha_novo.php" method="POST">
            <label for="cpf">CPF:</label>
            <input type="number" class="form-control" name="cpf" required>

            <label for="senha">ALTERAR SENHA:</label>
            <input type="password" class="form-control" name="senha" required>

            <input type="submit" class="btn btn-success mt-3" value="Alterar Senha">
            <br>
            <a class="btn btn-danger" href="./index.php">VOLTAR</a>
        </form>
    </main>
</body>

</html>
