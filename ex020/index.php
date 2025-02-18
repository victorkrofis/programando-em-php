<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
    <?php 
    //superclasse
    class Animal {
        public function fazSom(){
            return "o animal faz um som";
        }
    }

    //subclasse
    class Cachorro extends Animal{
        public function fazSom()
        {
            return " au au au au ";
        }
    }

    //subclasse
    class Gato extends Animal{
        public function fazSom()
        {
            return " miauuuuuuu ";
        }
    }

    //funçao que utiliza polimorfismo
    function emitirSomAnimal(Animal $animal){
        echo $animal->fazSom() . "<br>";
    }

    //criar objetos - instancias
    $cachorro1 = new Cachorro();
    $gato1 = new Gato();
    echo $cachorro1->fazSom();
    echo "<BR>";
    echo $gato1->fazSom();
   
    
    //chamando a funçao com difererntes objetos, mas com a mesma assinatura
    echo "<BR>";
    emitirSomAnimal($cachorro1);
    echo "<BR>";
    emitirSomAnimal($gato1);
    echo "<BR>";
    ?>
</body>
</html>