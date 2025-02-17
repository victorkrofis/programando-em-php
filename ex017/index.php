<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>construtor e destrutor</title>
</head>
<body>
    <?php 
   class Produto{

    //atributos
    public $nome;
    public $preco;

    //construtor: chamando quando o objeto é criado
    public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
        echo "produto '$this->nome' criado com sucesso <br>";
    }
   }

   //criando objeto
   $produto1 = new Produto("Camiseta", 39.90); //construtor chamado aqui
   $produto2 = new Produto("calça", 30.90);
    ?>
</body>
</html>