<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover, a:hover {
  opacity: 0.7;
}

table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}

    </style>
</head>
<body>  
        <img src="img/MouseNaga.jpg" alt="Razer Naga Epic Chroma" style="width:30%" >
        <h2>Razer Naga Epic Chroma</h2>
        <p>Mouse óptico com 12 Botões Laterias e Cores Chroma</p>

        <table>
        <tr>
            <th>Detalhes</th>
            <th>Preço da Unidade</th>
            <th>Total a Pagar</th>
        </tr>
        <tr>
            <td>Razer · Padrão · Ergonômico · Gamer · Óptico ·</td>
            <td>R$ 300.00</td>
            <td>R$ 300.00</td>
        </tr>
        <tr>
            <td>· Programável · 19 botões ·</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>· 16.000 dpi ·</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Cor</td>
            <td>-</td>
            <td>Preto</td>
        </tr>
        </table>
     <form action="final.php" method="POST">
     <button class="button">comprar</button></a>   
    </form>
    <form action="criar2.php" method="POST">
    <input type="hidden" name="nome" value="Razer Naga Epic Chroma">
    <input type="hidden" name="preco" value="300">
    <input type="hidden" name="imagem" value="img/MouseNaga.jpg" />

    <input type="submit" value="Adicionar carrinho" class="button">  

    </form>
</body>
</html>