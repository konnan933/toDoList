<?php
class Csatlakozas
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

    public function regisztral($email,$felh,$jelszo){
        
       
        $sqlInsert = "INSERT INTO `felhasznalo`(`id`, `felhNev`, `jel`, `email`) VALUES (NULL, '$felh',  md5('$jelszo'), '$email' )";
        
        $eredmeny = $this->kapcsolat->query($sqlInsert);
        
        return $eredmeny;
    }
    public function belepes($email, $jelszo){
        $md5Jel = md5($jelszo);
        $sql = "Select if( '$md5Jel'= f.jel , true, false) as belep from felhasznalo as f where  '$email' = f.email";
        $valasz = $this->kapcsolat->query($sql);
        $sikeresBelep = false;
        if($valasz->num_rows == 1){
            
            while($sor = $valasz->fetch_assoc()){
                
                $sikeresBelep =  intval($sor["belep"]) == 1;
                //var_dump($sikeresBelep);
            }
        }
        return $sikeresBelep;
    }

}
