<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Casa de Bolos</title>

<style>

body{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin: 0;
    padding: 0;

    background-image: url("{{ asset('img/bolo_magic.png') }}");
    background-size: cover;
    background-position: center;
}

/* MENU */

nav{
    background-color: #ff6e30;
    padding: 15px;
    text-align: center;
}

nav a{
    color: white;
    margin: 15px;
    text-decoration: none;
    font-weight: bold;
}

/* TITULO */

h1{
    color: white;
    text-align: center;
    margin-top: 30px;
}

/* PRODUTOS */

.produtos{
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-top: 40px;
    flex-wrap: wrap;
}

.bolo{
    background: rgb(223, 154, 145);
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    width: 200px;
}

.bolo img{
    width: 200px;
    height: 150px;
    object-fit: cover;
    border-radius: 10px;
}

.bolo p{
    font-weight: bold;
    margin: 10px 0;
}

.preco{
    color: white;
    font-weight: bold;
}

/* BOTÃO */

button{
    margin-top: 8px;
    background:#ff6e30;
    border:none;
    color:white;
    padding:8px 12px;
    border-radius:5px;
    cursor:pointer;
}

button:hover{
    background:#e45a20;
}

/* RODAPÉ */

footer{
    margin-top: 50px;
    background:#ff6e30;
    color:white;
    text-align:center;
    padding:15px;
}

</style>

</head>

<body>

<nav>
<a href="#">Início</a>
<a href="#">Bolos</a>
<a href="#">Contato</a>
</nav>

<h1>🍰 Nossos Bolos</h1>

<div class="produtos">

<div class="bolo">
<img src="{{ asset('img/bolo1.png') }}">
<p>Bolo de Chocolate</p>
<div class="preco">R$ 35,00</div>
<button>Encomendar</button>
</div>

<div class="bolo">
<img src="{{ asset('img/bolo2.png') }}">
<p>Bolo de Morango</p>
<div class="preco">R$ 38,00</div>
<button>Encomendar</button>
</div>

<div class="bolo">
<img src="{{ asset('img/bolo3.png') }}">
<p>Bolo de Cenoura</p>
<div class="preco">R$ 30,00</div>
<button>Encomendar</button>
</div>

<div class="bolo">
<img src="{{ asset('img/bolo4.png') }}">
<p>Bolo de Leite Ninho</p>
<div class="preco">R$ 40,00</div>
<button>Encomendar</button>
</div>

<div class="bolo">
<img src="{{ asset('img/bolo5.png') }}">
<p>Bolo de Limão</p>
<div class="preco">R$ 32,00</div>
<button>Encomendar</button>
</div>

<div class="bolo">
<img src="{{ asset('img/bolo7.png') }}">
<p>Bolo de Maracujá</p>
<div class="preco">R$ 34,00</div>
<button>Encomendar</button>
</div>

</div>

<footer>
<p>📍 Bairro do Limão 320 - São Paulo</p>
<p>📞 (11) 99999-9999</p>
</footer>

</body>
</html>
