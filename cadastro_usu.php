<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro_usu.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Cadastro</title>
</head>
<body>
    

    <div class = "fundo_cadastro">
        <img src="user.png" alt="user" id="user">
        <form action="" class="form">
        <p id="nome_usu">Nome Completo:</p>
        <input type="text" name="nome_usu" id="nome_input" required>
        <p id="email_usu">E-mail:</p>
        <input type="email" name="email_usu" id="email_input" required>
        <p id="cep_usu">CEP:</p>
        <input type="number" name="cep_usu" id="cep_input" required>
        <p id="senha_usu">Senha:</p>
        <input type="password" name="senha_usu" id="senha_input" placeholder="No mínimo 6 caracteres e no máximo 8" maxlength="8" minlength="6" required>
        <p id="conf_usu">Confirmar Senha:</p>
        <input type="password" name="conf_usu" id="conf_input" placeholder="Deve ser igual a senha" maxlength="8" minlength="6" required>
        </form>
    </div>
    <img src="salad.png" alt="salad" id="salad">
    <img src="tomato.png" alt="tomato" id="tomato">
</body>
</html>