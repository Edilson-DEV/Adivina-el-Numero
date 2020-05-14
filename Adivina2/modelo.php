<?php
session_start();
class Modelo{
    
			
    public $contador;
    public $numero;

	//getters
	public function getNumero(){

		return $this->numero;
	}
	// //setters
	// public function setNumero($value){
	// 	$this->txtnumero=$value;
	// }

    public function generateRand()
    {
        $_SESSION['aleatorio']=rand(1,100);  
        $this->numero=$_SESSION['aleatorio'];
    }
}

$m= new Modelo();
$m->generateRand();

echo $m->getNumero();

?>
