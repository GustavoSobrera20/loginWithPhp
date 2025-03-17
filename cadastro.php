<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Formulário</title>
</head>

<body>

    <style>
/* Corpo da página */
body {
    background-color: #2c3e50; /* Cor de fundo escura */
    font-family: 'Arial', sans-serif; /* Fonte limpa e legível */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Contêiner principal */
.container {
    background-color: #34495e; /* Fundo escuro para o formulário */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Sombra suave */
    width: 100%;
    max-width: 400px; /* Formulário mais compacto */
}

/* Título do formulário */
h2 {
    text-align: center;
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
input[type="text"],
input[type="password"],
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #7f8c8d;
    border-radius: 5px;
    font-size: 14px;
    color: #ecf0f1;
    background-color: #2c3e50;
    transition: all 0.3s;
}

input[type="text"]:focus,
input[type="password"]:focus,
input[type="number"]:focus {
    border-color: #3498db;
    outline: none;
}

/* Botões */
button,
input[type="submit"] {
    width: 100%;
    padding: 12px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
    border: none;
}

/* Estilo do botão de enviar */
input[type="submit"] {
    background-color: #1abc9c;
    color: white;
}

input[type="submit"]:hover {
    background-color: #16a085;
}

/* Estilo do botão de voltar */
button {
    background-color: #3498db;
    color: white;
}

button:hover {
    background-color: #2980b9;
}

/* Texto adicional */
.text-center {
    text-align: center;
    font-size: 14px;
    color: #ecf0f1;
}

/* Links de navegação */
a {
    color: #3498db;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

    </style>

    <main class="container text-center my-5">

        <h2>CADASTRAR PESSOA</h2>
        <br>


        <!--
        METODO DE ENVIO
            GET, através da URL. POST, através do corpo do arquivo

        ACTION
            Fala para onde deve enviar os dados
    -->


        <form action="./cadastro-usuario.php" method="POST">


            <label for="nome">Nome:</label class="form-control">
            <input type="text" class="form-control" name="nome">
            <label for="usuario">Usuário:</label>
            <input type="text" class="form-control" name="usuario">
            <div class="row mt-2 ">

                <div class="col">
                    <label for="telefone">Telefone:</label>
                    <input type="number" class="form-control" name="telefone1">
                </div>

                <div class="col">
                    <label for="telefone">Telefone:</label>
                    <input type="number" class="form-control" name="telefone2">
                </div>

                

            </div>


            <div class="row mt-2">
                <div>
                    <label for="logradouro">Logradouro:</label>
                    <input type="text" class="form-control" name="logradouro">
                </div>
                <div class="col">
                    <label for="numero_casa">Número da Casa:</label>
                    <input type="number" id="numero_casa" name="numero_casa" min="1" max="99999" class="form-control">
                </div>
                <div class="col">
                    <label for="bairro">Bairro:</label>
                    <input type="text" class="form-control" name="bairro">
                </div>
                <div class="col">
                    <label for="cpf">CPF:</label>
                    <input type="number" class="form-control" name="cpf">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" name="cidade">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="ano_nascimento">Ano de Nascimento:</label>
                    <input type="number" name="ano_nascimento" min="1900" max="2025" class="form-control">

                </div>

            </div>

            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha">



            <input type="submit" class="btn btn-success">
        </form>


</body>

</html>