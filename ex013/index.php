<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>laço for and foreach</h2>
    <?php 
    //for
    for ($i = 1; $i <= 5; $i++){
        echo $i. "<br>"; //imprime o valor de $i e pula para a proxima linha
    }

    for ($a = 1; $a <= 5; $a++){
        echo "o quadrado de $a é ". ($a * $a). "<br>";
    }

    //foreach

    echo "<br>foreach<br>";
    $frutas = ["maca", "banana", "laranja", "uva"];
    foreach($frutas as $frutas){

        echo $frutas . "<br>"; //imprime o nome de cada fruta
    }
    
    echo "<br>";

    $idade = [
        "joao" => 25,
        "maria" => 30,
        "pedro" => 22
    ];

    foreach($idade As $nome => $idade){
        echo "$nome tem $idade anos. <br>"; //exibe nome e idade
    }

    ?>
</body>
</html>