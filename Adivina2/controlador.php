
<?php
session_start();
class JuegoController{
	public $numero;


//geters
	public function getNumero(){
		return $this->numero;
	}
	//setters

	public function setNumero($value){
		$this->numero=$value;
	}

    public function StarGame()
    {
        if ($_SESSION['aleatorio']<$this->numero) {
            # code...
            return $this->numero."es alto";
        }
        elseif ($_SESSION['aleatorio']>$this->numero) {
            # code...
            return $this->numero."es bajo";
        }
        elseif ($_SESSION['aleatorio']==$this->numero) {
            # code...
           return $this->numero." ADIVINASTE!";
        }
        for ($i=0; $i <$_SESSION['I'] ; $i++) { 
            # code...
            echo $_SESSION['A'][$i][0]."<br>";
        }
    }
    public function GameEnd()
    {

    }

}


