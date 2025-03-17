<?php


echo'<h1>Login</h1>';

$user_form=$_POST['user'];
$password_form=$_POST['password'];


$dsn='mysql:dbname=db_login;host=127.0.0.1';
$user='root';
$password='';




$banco=new PDO($dsn,$user,$password);


$consulta_usuario_senha='SELECT * FROM tb_usuario where usuario ="'.$user_form .'" AND senha = "'. $password_form . '"';


$resultado =$banco ->query($consulta_usuario_senha)->fetch();

if (!empty($resultado)&& $resultado != false){
    header('location:tela_usuario.php');
} else{
    header('location:index.php');
}