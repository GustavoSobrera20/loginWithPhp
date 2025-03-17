<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Pessoa</title>
    <style>
        /* Fundo e estilo do body */
        body {
            background-color: #121212; /* Escuro */
            color: #f2f2f2; /* Claro */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Estilo do formulário */
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 0;
        }

        form {
            background-color: #1f1f1f; /* Fundo mais escuro */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3); /* Sombra suave */
            width: 100%;
            max-width: 700px; /* Máximo tamanho */
        }

        /* Título */
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            color: #00b894; /* Verde suave */
        }

        /* Estilo para os rótulos */
        label {
            font-size: 14px;
            color: #b0bec5;
        }

        /* Estilo para os campos de entrada */
        input[type="text"],
        input[type="number"],
        input[type="password"] {
            background-color: #333;
            border: 1px solid #444;
            color: #f2f2f2;
            border-radius: 5px;
            margin-bottom: 15px;
            padding: 10px;
            width: 100%;
        }

        /* Botão de salvar */
        .btn-success {
            background-color: #2ecc71;
            border: none;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
        }

        .btn-success:hover {
            background-color: #27ae60;
        }

        .row .col {
            padding-left: 0;
            padding-right: 0;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            form {
                width: 100%;
                padding: 15px;
            }
        }
    </style>
</head>

<body>
    <main class="container">
        <h2>Editar Pessoa</h2>

        <?php
        // Conexão com o banco de dados
        $dsn = 'mysql:dbname=db_login;host=127.0.0.1';
        $user = 'root';
        $password = '';
        $banco = new PDO($dsn, $user, $password);

        // Obtém o id_pessoa da URL
        $id_pessoa = $_GET['id_pessoa'];

        // Consulta SQL para buscar os dados da pessoa e do usuário
        $select = "SELECT tb_pessoa.*, tb_usuario.usuario, tb_usuario.senha 
                   FROM tb_usuario 
                   INNER JOIN tb_pessoa ON tb_usuario.id_pessoa = tb_pessoa.id 
                   WHERE tb_usuario.id_pessoa = $id_pessoa";

        // Executa a consulta
        $dados = $banco->query($select)->fetch();
        ?>

        <form action="./pessoa_editar.php" method="POST">
            <input type="hidden" name="id" value="<?= $dados['id'] ?>">

            <!-- Campos da tabela tb_pessoa -->
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" value="<?= $dados['nome'] ?>" disabled>

            <div class="row mt-2">
                <div class="col">
                    <label for="telefone_1">Telefone 1:</label>
                    <input type="text" class="form-control" name="telefone_1" value="<?= $dados['telefone_1'] ?>">
                </div>
                <div class="col">
                    <label for="telefone_2">Telefone 2:</label>
                    <input type="text" class="form-control" name="telefone_2" value="<?= $dados['telefone_2'] ?>">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="logradouro">Logradouro:</label>
                    <input type="text" class="form-control" name="logradouro" value="<?= $dados['logradouro'] ?>">
                </div>
                <div class="col">
                    <label for="n_casa">Número:</label>
                    <input type="number" class="form-control" name="n_casa" value="<?= $dados['n_casa'] ?>">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="bairro">Bairro:</label>
                    <input type="text" class="form-control" name="bairro" value="<?= $dados['bairro'] ?>">
                </div>
                <div class="col">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" name="cidade" value="<?= $dados['cidade'] ?>">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" name="cpf" value="<?= $dados['cpf'] ?>" disabled>
                </div>
                <div class="col">
                    <label for="ano_nascimento">Ano de Nascimento:</label>
                    <input type="number" class="form-control" name="ano_nascimento" value="<?= $dados['ano_nascimento'] ?>" disabled>
                </div>
            </div>

            <!-- Campos da tabela tb_usuario -->
            <div class="row mt-2">
                <div class="col">
                    <label for="usuario">Usuário:</label>
                    <input type="text" class="form-control" name="usuario" value="<?= $dados['usuario'] ?>" disabled>
                </div>
                <div class="col">
                    <label for="senha">Senha:</label>
                    <input type="text" class="form-control" name="senha" value="<?= $dados['senha'] ?>">
                </div>
            </div>

            <input type="submit" class="btn btn-success mt-3" value="Salvar Alterações">
       
        </form>
    </main>
</body>

</html>
