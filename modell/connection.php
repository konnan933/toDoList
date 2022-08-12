<?php
class Connection
{
    private $host = "localhost";
    private $felhasznaloNev = "root";
    private $jelszo = "";
    private $abNev = "todolist";
    public $kapcsolat;

    public function __construct()
    {
        $this->kapcsolat =  new mysqli($this->host,$this->felhasznaloNev, $this->jelszo, $this->abNev);

    }

    
}
