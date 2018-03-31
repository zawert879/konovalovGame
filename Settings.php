<?php 
use Units\{Elf,Gnome,Humen,IndependentOrc,Orc,Witch,};


$playerDire = new Player("Петя");
$playerRadiant = new Player("Вася");

$elf = new Elf\Warrior();
$humen = new Humen\Archer();
$orc = new IndependentOrc\Medium();
$gnome = new Gnome\Warrior();

$playerRadiant->setUnits([$elf,$humen]);
$playerDire->setUnits([$orc,$gnome]);