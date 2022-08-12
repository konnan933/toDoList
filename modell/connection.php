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

    public function regisztral($email,$felh,$jelszo){
        $sqlInsert = "INSERT INTO `felhasznalo` (`id`, `felhNev`, `jel`, `email`) VALUES (NULL, '$felh', ' MD5('$jelszo')', '$email' );";
        ;
        $eredmeny = $this->kapcsolat->query($sqlInsert);
        return $eredmeny;
    }
    public function belepes($email, $jelszo){
        $sql = 'Select if("'.md5($jelszo).'" = jel,true,false) as belep from felhasznalo where "'.$email.'" = email';
        $valasz = $this->kapcsolat->query($sql);
        $sikeresBelep = false;
        if($valasz->num_rows == 1){
            while($sor = $valasz->fetch_assoc()){
                $sikeresBelep =  intval($sor["belep"]) == 1 ? true:false;
            }
        }
        return $sikeresBelep;
    }

}
