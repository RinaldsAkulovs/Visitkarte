<?php

class PerInfo{
    public $name = 'Rinalds';
    public $surname = 'Akulovs';
    public $age = '17';
    public $email = 'rinsldsa@gmail.com'
    public $meme = 'WHERE THE PROBLEM AT? IM STINNING ON THERE PERCS LIKE A LOUNDRY MAT'
}

public function infoDisp(){

    echo 'Mans vārds, Uzvārds ir'$this->name . $this->surname;

}

$Info = new PerInfo();

echo $Info->name;
echo $Info->surname;
echo $Info->age;
echo $Info->email;
echo $Info->meme;

?>