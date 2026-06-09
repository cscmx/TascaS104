<?

class Shape 
{
    public int $alto;
    public int $ancho;

    public function __construct(int $alto, int $ancho){
        $this->alto = $alto;
        $this->ancho = $ancho;
    }
    public function getAlto (){
        return $this->alto;
    }
    public function getAncho (){
        return $this->ancho;
    }
    public function setAlto(int $alto){
        $this->alto = $alto;
    }
    public function setAncho(int $ancho){
        $this->ancho = $ancho;
    }

}

?>