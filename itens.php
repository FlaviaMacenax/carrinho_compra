<?php
session_start();

if (isset($_POST["comprar"])){

if(isset($_POST["item1"])){
    $item1 = $_POST["item1"];
   $_SESSION ["item1'"] = $item1;

   echo $item1;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Itens</title>
    <style>

        body{
            font-family: 'Boogaloo', cursive;
            text-align: center;
        }
        table{
            border: solid 2px #704214;
            width: 800px;
            border-radius: 10px;
            margin-left: 400px;
            margin-top: 50px;
        }

        th{
            font-size: 20px;
            color: #704214;
            background-color: #e6aa77;
            border-radius: 3px;
        }
        td{
            color:#aa7444;
        }
        input{
            border-radius: 5px;
            border-color:  #704214;
        }
        .button{
        background-color: #704214;
        width: 100px;
        height: 30px;
        text-transform: uppercase;
        margin-bottom: 10px;
        border: 1px solid #ffff;
        border-radius: 15px;
        color: #ffff;
        font-size: 12px;
        }

        .button:hover{
            background:rgb(38, 88, 45);
            color: #ccffcc;
        }
 
    </style>
</head>
<body>
    <form action="carrinho_compra" method="post">
    <table>
        <tr>
            <th colspan="6">Itens da Compra</th>
        </tr>
    <tr>
        <th>[x]</th>
        <th colspan="3">Descrição</th>
        <th>Quantidade</th>
        <th>Valor</th>
    </tr>
        <tr>
            <td><input type="checkbox" id="item1" name="item1"></td>
            <td>Nike Jordan</td>
            <td>Tamanho: 42</td>
            <td>Cor: Preto</td>
            <td><input type="number" id="valor1" name="valor1"></td>
            <td><input type="hidden" id="valor1" name="valor1">R$ 1.000,00</td>
        </tr>
        </tr>
        <tr>
            <td><input type="checkbox" id="item1" name="item1"></td>
            <td>Adidas Sport</td>
            <td>Tamanho: 40</td>
            <td>Cor: Branco</td>
            <td><input type="number" id="valor1" name="valor1"></td>
            <td><input type="hidden" id="valor2" name="valor2">R$ 500,00</td>
        </tr>
        <tr>
            <td><input type="checkbox" id="item1" name="item1"></td>
            <td>All Star I'll rock you</td>
            <td>Tamanho: 37</td>
            <td>Cor: Verde</td>
            <td><input type="number" id="valor1" name="valor1"></td>
            <td><input type="hidden" id="valor3" name="valor3">R$ 700,00</td>
        </tr>
        <td><input type="submit" name="comprar" class="button" value="Comprar"></td>
        <tr>

        </tr>
    </table>
    </form>

</body>
</html>