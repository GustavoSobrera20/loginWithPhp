<?php
// Conexão com o banco de dados
$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';
$banco = new PDO($dsn, $user, $password);

// Recebe os dados do formulário
$cpf = $_POST['cpf'];
$nova_senha = $_POST['senha']; // Agora estamos pegando a senha corretamente

// Verifica se o CPF existe no banco
$query = $banco->prepare("SELECT * FROM tb_pessoa WHERE cpf = :cpf");
$query->execute([':cpf' => $cpf]);
$resultado = $query->fetch();

if ($resultado) {
    // Atualiza a senha do usuário na tabela tb_usuario
    $update = $banco->prepare("UPDATE tb_usuario SET senha = :senha WHERE id_pessoa = :id_pessoa");
    $update->execute([':senha' => $nova_senha, ':id_pessoa' => $resultado['id']]);

    echo "<script>
        alert('Senha alterada com sucesso!');
        window.location.href='index.php';
    </script>";
} else {
    echo "<script>
        alert('CPF inválido! Por favor, tente novamente.');
        window.location.href='esquecisenha.php';
    </script>";
}

