<?php
$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $banco = new PDO($dsn, $user, $password);
    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Falha na conexão: ' . $e->getMessage();
    exit;
}

$select = "SELECT * FROM tb_usuario";
$resultado = $banco->query($select)->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Estilos principais */
        body {
            background-color: #181818; /* Fundo escuro */
            color: #f4f4f4; /* Cor do texto claro */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Estilo do título */
        h1 {
            text-align: center;
            margin-top: 50px;
            font-size: 36px;
            color: #1abc9c; /* Verde claro para o título */
            font-weight: bold;
        }

        /* Container para a tabela */
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Estilo para a tabela */
        .table {
            background-color: #222; /* Fundo escuro para a tabela */
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Sombra suave */
        }

        .table th, .table td {
            padding: 15px;
            text-align: center;
            font-size: 16px;
        }

        .table th {
            background-color: #2c3e50; /* Cabeçalho escuro */
            color: #fff;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #2c3e50; /* Linha alternada escura */
        }

        /* Botões com efeitos e cores */
        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s ease;
            text-align: center;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #3498db; /* Azul suave */
            border: none;
            color: white;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        .btn-warning {
            background-color: #f39c12; /* Amarelo suave */
            border: none;
            color: white;
        }

        .btn-warning:hover {
            background-color: #e67e22;
        }

        .btn-danger {
            background-color: #e74c3c; /* Vermelho suave */
            border: none;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }

        /* Alinhamento do conteúdo */
        .text-center {
            text-align: center;
        }

        /* Estilo para as ações */
        .btn-group {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .table th, .table td {
                font-size: 14px;
            }

            h1 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>
    <h1>Lista de Usuários</h1>

    <main class="container my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuário</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultado as $linha) { ?>
                    <tr>
                        <td><?= htmlspecialchars($linha['id']) ?></td>
                        <td><?= htmlspecialchars($linha['usuario']) ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a class="btn btn-primary" href="./usuario_detalhes.php?id_pessoa=<?= $linha['id'] ?>">Abrir</a>
                                <a class="btn btn-warning" href="./formulario_editar.php?id_pessoa=<?= $linha['id'] ?>">Editar</a>
                                <a class="btn btn-danger" href="./usuario_deletar.php?id=<?= $linha['id'] ?>">Excluir</a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    <a class="btn btn-danger" href="./index.php">VOLTAR</a>
</body>
</html>
