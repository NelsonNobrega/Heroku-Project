<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-vidth, initial scale=1">
        <title>CADASTRO DE USUARIOS</title>
</head>
<body>
    <h1>Usuário</h1>

    <form action="/cadastrar-pessoa" method="POST">
        @csrf
        <label for="lblNome">Nome:</label>
        <input type="text" name="nome">
        <br><br>
        <label for="lblEmail">Email:</label>
        <input type="text" name="email">
        <br><br>
        <label for="lblDataNasc">Data Nasc:</label>
        <input type="date" name="data">
        <br><br>
        <label for="lblTelefone">Telefone:</label>
        <input type="text" name="telefone">
        <br><br>
        <button>Cadastrar</button>
</form>
</body>
</html>