<?php


interface QueryMethods {
    public function useAbility();
    public function driveForward();
    public function driveBack();
}

abstract class Transport implements QueryMethods {
    public function driveForward(){
        echo nl2br("ехать вперед \n");
    }

    public function driveBack(){
        echo nl2br("ехать назад \n");
    }

    public function callAbility(){
        echo $this->ability;
        echo "<br>";
    }
}


class Machine extends Transport {

    protected $ability;
    protected $color = 'темно-синий';
    protected $brand = 'toyota';
    protected $interierColor = 'светло-бежевый'; 
    
    public function useAbility()
    {
        $this->ability = 'Включить закись азота';
        $this->callAbility();
    }

    public function Beep()
    {
        $this->ability = 'Бииииииип !!!';
        $this->callAbility();
    }

    public function wipersOn()
    {
        $this->ability = 'дворники включены';
        $this->callAbility();
    }
}

class Tank extends Transport {
    protected $ability = 'Выстрелить из пушки';
    protected $yearofissue = '1948';
    protected $armor = '170мм';
    
    public function useAbility()
    {
        $this->callAbility();
    }
}

class UniqueTransport extends Transport {
    protected $ability = 'Повернуть ковш на 20 градусов';
    protected $engineCapacity = '603кВт';
    protected $type = 'с неповоротным отвалом';

    public function useAbility()
    {
        $this->callAbility();
    }
}

function driveAndAbility(QueryMethods $newTransport)
{
    $newTransport->driveForward();
    $newTransport->driveBack();
    $newTransport->useAbility();
    
}

$Camry = new Machine();
$T34 = new Tank();
$Bulldozer = new UniqueTransport();

//Вызов методов присущих только машине
$Camry->Beep();
$Camry->wipersOn();

// Вызов общих методов "Ехать" и "исп. Способность"
driveAndAbility($Camry);
driveAndAbility($T34);
driveAndAbility($Bulldozer);



 