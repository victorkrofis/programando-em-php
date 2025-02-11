<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funçoes</title>
</head>
<body>
    <h2>funçoes</h2>
    <?php 
    function saudacao(){
        echo "ola, seja bem vindo ao php";
    }

    saudacao(); //chamando a funçao

    echo "<br>";

    function somar($a, $b){
        return $a + $b;
    }

    $resultado = somar(5, 3); //chamando a funçao e passando os argumentos
    echo "resultado da soma: " . $resultado; //saida

    echo "<br>";
    $resultado1 = somar(8, -2);
    echo "resultado da soma: " . $resultado1; //saida

    echo "<br>";
    function saudacaopersonalizada($nome = "visitante"){
        echo "ola $nome! bem-vindo ao php";
    }

    saudacaopersonalizada(); //chamando sem argumentos, usa o valor padrao
    echo "<br>";
    saudacaopersonalizada("carlos"); //chamada com argumento

    ?>
</body>
</html>