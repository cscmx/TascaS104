<?

class Shape 
{
    protected int $height;
    protected int $width;

    public function __construct(int $height, int $width){
        $this->height = $height;
        $this->width = $width;
    }
    public function getAlto(): float {
        return $this->height;
    }
    public function getAncho(): float {
        return $this->width;
    }
    public function setAlto(int $height): void {
        $this->height = $height;
    }
    public function setAncho(int $width): void {
        $this->width = $width;
    }

}

?>