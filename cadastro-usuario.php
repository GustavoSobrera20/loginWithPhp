<?php
var_dump($_POST);

$usuario_form = $_POST['usuario'];
$senha_form = $_POST['senha'];


$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';


$banco = new PDO($dsn, $user, $password);

$insert = 'INSERT INTO tb_usuario (usuario,senha) VALUE (:usuario , :senha)';

$box = $banco->prepare($insert);

$box->execute([
    ':usuario' => $usuario_form,
    ':senha' => $senha_form,
]);



$nome =$_POST['nome'];
$nascimento_form = $_POST['ano_nascimento'];
$cpf=$_POST['cpf'];
$telefone_form1 = $_POST['telefone1'];
$telefone_form2 = $_POST['telefone2'];
$logradouro= $_POST['logradouro'];
$n_casa=$_POST['numero_casa'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];

$insert = 'INSERT INTO tb_pessoa (nome,ano_nascimento,cpf,telefone_1,telefone_2,logradouro,n_casa,bairro,cidade) VALUE (:nome,:ano_nascimento,:cpf,:telefone_1,:telefone_2,:logradouro,:n_casa,:bairro,:cidade)';

$boxe = $banco->prepare($insert);

$boxe->execute([
   ':nome'=>$nome,
   ':ano_nascimento'=>$nascimento_form,
   ':cpf'=>$cpf,
   ':telefone_1'=>$telefone_form1,
   ':telefone_2'=>$telefone_form2,
   ':logradouro'=>$logradouro,
   ':n_casa'=>$n_casa,
   ':bairro'=>$bairro,
   ':cidade'=>$cidade,
]);
?>
  <a class="btn btn-danger" href="./index.php">VOLTAR</a>
  



  <script>
    alert('Cadastro realizado com sucesso!');
    window.location.href='index.php';
  </script>