<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
require_once './Car.php';
class Bus extends Car{
    private$passenger;
    private$fuel;
    private$capacity;
    function __construct($owner,$pistonv){
        parent::__construct($owner,$pistonv);
        $this->passenger=0;
        $this->fuel=0;
        $this->$capacity=0;
    }function runFor($km){
        $result=parent::runFor($km);
        if($result){
            $this->fuel+=($km/120)*($this->pistonVolume()/1000)+((70*$this->passenger*$km)/10000);
        }return$result;
    }function fuelUsed(){
        return$this->fuel;
    }function showLongInfo(){
        $result=parent::showLongInfo();
        if($result){
            printf("Current passengers:     %10s\n",
            number_format($this->passenger,2));
        }return$result;
    }function setcapacity($amount){
        $this->$capacity=$amount;
    }function board($per){
        if($this->passenger+$per>$this->capacity){
            echo"Number of passengers greater than capacity!!!\n";
            return false;
        }$this->passenger+=$per;
        return true;
    }function getoff($per){
        if($this->passenger-$per<0){
            echo"Number of passengers less than 0!!!\n";
            return false;
        }$this->passenger-=$per;
        return true;
    }
}
?>