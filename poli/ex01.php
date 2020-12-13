 <?php

    //Classes abistratas são classes que não podem ser aivadas, mas podem usar como base para outras
    abstract class Animal {
        //Apos declararmos a class abstrata Animal vamos informar suas funçoes
        public function falar(){
            return "Som";
        }
        public function mover(){
            return "Andar";
        }
    }

    //Agora criamos uma nova class para poder extender as funções da class abistrata
    //Porem como nossa CLASS sera um cachorro, ao inves de falar ser um som, mudaremos para late
    class Cachorro extends Animal {
        public function falar(){
            return "Late";
        }
        
    }

    //Criamos outra Class e faremos da mesma forma so que com Gato
    class Gato extends Animal {
        public function falar(){
            return "Mia";
        }
    }
    //Chama-se polimorfismo vc pegar um class abistrata porem alterar algumas funções dentro dela

    //Neste exemplo vamos exevutar a função que alteramos Mover() e chamaremos a Mover() da classe pai
    //Porque neste caso as duas se aplica ao animal passaro
    class Passaro extends Animal {
        public function falar(){
            return "Canta";
        }
        public function mover(){
            return "Voa e " . parent::mover();
            //Para declarar uma nova função que chama a mesma da abistrata usaremos o {.parent::(class)} 
        }
    }

    //Agora vamos executalas individualmente

    $pluto = new Cachorro();

    echo $pluto->falar() ."<br>";
    echo $pluto->mover() ."<br>";

    echo("-------------------------------<br>");

    $garfield = new Gato();

    echo $garfield->falar()."<br>";
    echo $garfield->mover()."<br>";

    echo("-------------------------------<br>");

    $ave = new Passaro();

    echo $ave->falar()."<br>";
    echo $ave->mover()."<br>";


