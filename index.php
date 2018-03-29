<?php
include "Player.php";
include "Unit.php";

$playerDire = new Player("петя");
$playerRadiant = new Player("Вася");
//  нужно добавить классы(наследоваться от Unit) и проверку на совместимость
// 	пока просто создаю дефолтных
$firthUnit = new Unit();
$firthUnit->setArmor(10);
$firthUnit->setLive(100);
$firthUnit->setSpeed(5);
$firthUnit->setAtack(5);

$qq = new Unit();
$qq->setArmor(10);
$qq->setLive(100);
$qq->setSpeed(5);
$qq->setAtack(5);

$twoUnit = new Unit();
$twoUnit->setArmor(10);
$twoUnit->setLive(100);
$twoUnit->setSpeed(5);
$twoUnit->setAtack(5);

$threeUnit = new Unit();
$threeUnit->setArmor(10);
$threeUnit->setLive(100);
$threeUnit->setSpeed(5);
$threeUnit->setAtack(5);


// набор отряда
$playerDire->setUnits([$firthUnit,$qq]);
$playerRadiant->setUnits([$twoUnit,$threeUnit]);

///////////////////////////////fight/////////////////////////
if(count($playerDire->getUnits()) !=10 && count($playerRadiant->getUnits()) !=10){
	echo "ты как на войну собрался,собери полную команду,придурок!!!";
}else {

	while ($playerRadiant->getAllLive() !=0 && $playerDire->getAllLive() !=0) {


		for ($i = 0; $i < 10; $i++) {
			$playerDire->atack($i,$playerRadiant);
			$playerRadiant->atack($i,$playerDire);
		}


		echo "\n";

		echo"Live ".$playerRadiant->getTeam()."=".$playerRadiant->getAllLive();
		echo"Live ".$playerDire->getTeam()."=".$playerDire->getAllLive()."_";
	}


	if ($playerDire->getAllLive() != 0) {
		echo "\n Игрок ".$playerDire->getTeam()." Победил";
	}

	if ($playerRadiant->getAllLive() != 0) {
		echo "\n Игрок ".$playerRadiant->getTeam()." Победил";
	}



}