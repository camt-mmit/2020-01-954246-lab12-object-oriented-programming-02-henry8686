<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
require_once './Bus.php';
echo"Input (owner cc capacity): ";
fscanf(STDIN,"%s%d%d",$owner,$cc,$capacity);
$bus=new Bus($owner,$cc,$capacity);
$bus->setcapacity($capacity);
while(true){
    printf("command (h for help): ");
    $command=null;
    $value=null;
    fscanf(STDIN,"%s%d",$command,$value);
    if(strtolower($command)==='e'){
        break;
    }switch(strtolower($command)) {
        case'0':
            $bus->engineStop();
        break;
        case'1':
            $bus->engineStart();
        break;
        case'r':
            $bus->runFor($value);
        break;
        case'+':
            $bus->board($value);
        break;
        case'-':
            $bus->getoff($value);
        break;
        case'i':
            $bus->showLongInfo();
        break;
        case'h':
            echo" 0 stop engine\n 1 start engine\n r run for the given km\n + load the given number of passengers into bus\n - unload the given number of passengers out of bus\n i show information (engine is off only)\n e exit\n h print this help\n";
        break;
            default:
            fprintf(STDERR, "Unkown command '%s' !!!\n", $command);
    }
}
?>