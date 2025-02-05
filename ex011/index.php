<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array e matriz</title>
</head>
<body>
    <?php 
    //criando um array associativo
    $associativo = [
       "nome" => "joao",
       "idade" => 30,
       "cidade" => "sao paulo"
    ];

    //exibindo um array associativo na tela
    echo "array associativo: ";
    print_r($associativo);

    echo "<br>";
    print_r($associativo["nome"]); //acessando joao

    echo "<br>";
    //acesssando o primeiro valor
    $primeirovalor = reset($associativo);
    echo $primeirovalor; //saida: joao

    echo "<br>";

    //criando um array multidirecional
    $multidirecional = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    //exibindo um valor na posiçao [1] [2] (4, 5, 6) -> 6
    echo "valor na posicao [1] [2]: " . $multidirecional[1][2]; 

    echo "<br>";
    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];

    //mesclando os dois arrays 
    $novo_array = array_merge($array1, $array2);

    //exibindo o array resultado
    echo "array mesclado: ";
    print_r($novo_array);

    echo "<br>";
    $array = [10, 20, 30, 40];

    //procurando o valor 30 no array
    $indice = array_search(30, $array);

    //exibindo o indice onde o valor foi encontrado
    echo "o indice do valor 30 é: " . $indice;

echo "<br>";
    //verificando se o vcalor 25 esta no array
    $existe = in_array(25, $array);

    //exibindo se o valor existe ou nao
    if ($existe) {
       echo  "o valor 25 esta na array";
    } else {
        echo "o valor 25 nao esta no array";
    }

    echo "<br>";

//matrix 3x2
$matriz = [
    [1, 2], //primeira linha
    [4, 5], //segunda linha
    [7, 8]  //terceira linha
];

echo "<br>";

//acessando os elementos da matriz
echo "elemento na posicao [0] [1]: " . $matriz[0][1] . "<br>"; //saida: 2 
echo "elemento na posicao [2] [0]: " . $matriz[2][0] . "<br>"; //saida: 7

    ?>
</body>
</html>