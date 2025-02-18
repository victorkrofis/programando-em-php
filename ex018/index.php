<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificadores de acesso</title>
</head>
<body>
    <?php 
    class Funcionario{
        //propriedades com diferentes modificadores de acesso
        public $nome; //pode ser acessado de qualquer lugar
        protected $salario; //pode ser acessado apenas dentro da usperclasse e subclasse
        private $cpf; //pode ser acessado apenas dentro da classe

        //contrutor para inicializar os valores
        public function __construct($nome, $salario, $cpf)
        {
            $this->nome = $nome;
            $this->salario = $salario;
            $this->cpf = $cpf;
        }

        //metodo publico para exibir o nome do funcionario
        public function exibirNome(){
            echo "Nome: " . $this->nome . "<br>";

        }

        //metodo protegido para exibir o salario (somente para subclasse ou a propria classe) 
        protected function exibirSalario(){
            echo "salario: R$ " . $this->salario . "<br>";
        }

        //metodo privado para exibir o cpf (somente dentro da classe)
        private function exibirCpf(){
            echo "CPF: " . $this->cpf . "<br>";
        }
       //metod publico para chmar o metodo privado e protegido na propria classe
       public function exibirDetalhes(){
        $this->exibirNome();
        $this->exibirSalario();
        $this->exibirCpf();
       }
    }

    //criando uma instancia da classe funcionario
    $funcionario1 = new Funcionario("Carlos Silva", 7000, "123.456.789-00");

    //acessando o nome diretamente (publico)
    $funcionario1->exibirNome();

    //acessando o salario diretamente (protegido)
   // $funcionario1->exibirSalario(); //comentado porque gera erro

   //acessando o cpf diretamente
   //$funcionario1->exibirCpf(); //comentado porque gera erro

   //chamando o metodo publico que acesso todos os dados
   $funcionario1->exibirDetalhes();

    ?>
</body>
</html>