<?php 
namespace Units\Witch;
use Units\Witch;
/**
 * summary
 */
class Warrior extends Witch
{
    /**
     * summary
     */
    public function __construct()
    {
    	$this->setArmor(15);
    	$this->setAtack(15);
    	$this->setSpeed(3);

    }

    public function atack($player,$my){

    	if ($this->live > 0 ){
    		$enemyUnits = $player->getUnits();
    		$key = array_rand($enemyUnits);
    		$enemyUnit = $enemyUnits[$key];

    		$player->removeUnit($enemyUnit);
    		$my->addUnit($enemyUnit);

    	}else {
    		return 1;
    	}
    }
}