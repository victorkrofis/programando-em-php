<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>herança e polimorfismo</title>
</head>
<body>
    <?php 
    //classe base (superclasse)
    class Animal{
        //propriedade ou atributo
        public $nome;
        
        //metodo
        public function __construct($nome)
        {
            $this->nome = $nome;

        }

        public function falar(){
            return "o animal faz um som.";
        }
    }

    //subclasse que heda de animal
    class Cachorro extends Animal{ 
        //sobrescrevendo o metodo falar
        public function falar(){
            return " o cachorro late";
        }
    }

    //ccriando um objeto da classe cachorro
    $cachorro = new Cachorro("Rex");
    echo $mostrar = $cachorro->nome;
echo  "<br>";
    //metodo sobrescrito da subclasse
    echo $cachorro->falar();
echo "<br>";
    //mostrando metodo falar da superclasse
    $animal = new Animal("Duda");
    echo $animal->falar();
    echo "<br>";


    ?>
</body>
</html>