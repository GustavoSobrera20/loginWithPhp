<?php 

$editar_id = $_POST['id'];
$editar_senha = $_POST['senha'];

// Dados da tb_pessoa
$editar_tel_1 = $_POST['telefone_1'];
$editar_tel_2 = $_POST['telefone_2'];
$editar_logradouro = $_POST['logradouro'];
$editar_n_casa = $_POST['n_casa'];
$editar_bairro = $_POST['bairro'];
$editar_cidade = $_POST['cidade'];

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

// Atualizando a senha no banco de dados
$update = 'UPDATE tb_usuario SET senha = :senha WHERE id = :id';

$banco->prepare($update)->execute([
    ':senha' => $editar_senha,
    ':id' => $editar_id
]);

// Atualizando os dados na tb_pessoa
$update = 'UPDATE tb_pessoa SET telefone_1 = :tel_1, telefone_2 = :tel_2, logradouro = :logradouro, n_casa = :numero_casa, bairro = :bairro_form, cidade = :cidade_form WHERE id = :id';

$banco->prepare($update)->execute([
    ':tel_1' => $editar_tel_1,
    ':tel_2' => $editar_tel_2,
    ':logradouro' => $editar_logradouro,
    ':numero_casa' => $editar_n_casa,
    ':bairro_form' => $editar_bairro,
    ':cidade_form' => $editar_cidade,
    ':id' => $editar_id
]);

echo "<script>
        alert('Dados Alterados com sucesso!');
        window.location.href='tela_usuario.php';
    </script>";

