<?php
//Singleton se utiliza para que no se instancie una clase mas de una vez
class Tigger {

    private static $instance; // servirá para guardar las instancias que hay de la clase Tigger (solo puede haber una ya que usamos singleton)
    private $counter = 0;

    private function __construct() { //hacemos private el constructor, para asegurar que no instanciamos la clase fuera de ella
        echo "Building character..." . PHP_EOL;
    }

    public static function getInstance() {//*importante que sea STATIC*, aqui INSTANCIAMOS Tigger 
        if (!self::$instance) { //si no existe la instancia Tigger, la creamos, en caso negativo, devuelvela
            self::$instance = new Tigger();
        }
        return self::$instance;
    }

    public function roar() { //implementamos un contador para registrar el numero de veces que invocamos este metodo
        echo "Grrr!" . PHP_EOL;
        $this->counter++;
    }

    public function getCounter() {//metodo q retorna el valor del contador
        return $this->counter;
    }
    
}
//obtener la instancia unica de Tigger, como es singleton siempre obtenemos la misma instancia 
$tigger = Tigger::getInstance();
//realizar rugidos segun la funcion roar
$tigger->roar();
$tigger->roar();
$tigger->roar();

//obtener el contador de rugidos
echo "Número de rugidos de Tigger: " . $tigger->getCounter() . PHP_EOL;

//realizamos un registro del numero de veces que se ha invocado al metodo, como metodo de prueba (testing?)


?>