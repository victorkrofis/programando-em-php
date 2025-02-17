<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classes e objetos</title>
</head>
<body>
    <?php 
    class Carro{
      //propriedades ou atributos
      public $marca;
      public $modelo;
      public $ano;
     
      //metodos (funçao dentro de classe)
      public function exibirDetalhes(){
        echo "marca: " . $this->marca . "<br>";
        echo "modelo: " . $this->modelo . "<br>";
        echo "ano: " . $this->ano . "<br>";
      }
    }

    //instancia
   $meuCarro = new Carro();
   $meuCarro->marca = "Toyota";
   $meuCarro->modelo = "Corolla";
   $meuCarro->ano = 2023;

   $meuCarro->exibirDetalhes(); //exibir os detalhesdo carro

   //nova classe 
   class Pessoa{
    //prioridade ou atribuicao
    public $nome;
    public $idade;

    //metodo
    public function sausacao(){
        echo "ola, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos. <br>";

    }
   }
   $joao = new Pessoa();
   $joao->nome = "joao";
   $joao->idade = 30;

   $joao-> sausacao(); //exibe a saudaçao com os dadeos do joao 


   

    ?>
</body>
</html>