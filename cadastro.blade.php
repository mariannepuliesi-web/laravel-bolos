<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro de Clientes</title>

<style>

body{
    font-family: Verdana, Geneva, Tahoma, sans-serif;

    background-image: url("{{ asset('img/bolo_magic.png') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;
}

.caixa{
    backdrop-filter: blur(15px);
    background-color: #fce5e1;
    padding: 35px;
    border-radius: 30px;
    width: 300px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

h1{
    color: white;
    text-align: center;
    margin-bottom: 20px;
}

label{
    display: block;
    margin-bottom: 5px;
}

input{
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

input[type="submit"]{
    background-color: #ff6e30;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover{
    background-color: #e45a20;
}

</style>

</head>

<body>

<div>

<h1>Cadastro de Clientes</h1>

<div class="caixa">

<form method="POST">

<label>Nome:</label>
<input type="text" name="nome" required>

<label>Email:</label>
<input type="email" name="email" required>

<label>Telefone:</label>
<input type="tel" name="telefone">

<input type="submit" value="Cadastrar">

</form>

</div>

</div>

</body>
</html>
