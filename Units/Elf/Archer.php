<?php 
namespace Units\Elf;
use Units\Elf;
/**
 * summary
 */
class Archer extends Elf
{
	private $arrow = 40;
	private $exactitude = 12;

	public function atack($player,$my){

		if ($this->live > 0 ){
			/** @var Unit $enemyUnit */
			$enemyUnits = $player->getUnits();
			$key = array_rand($enemyUnits);
			$enemyUnit = $enemyUnits[$key];

			if($this->arrow != 0){
				$this->arrow--;		

				if( rand(1, 20) < $this->exactitude){	
					$damage = $enemyUnit->getArmor() - $this->getAtack()* $this->getSpeed();
				}else{
					$damage =0;
				}
			}else $damage = 0;
			if ($damage < 0) {
				$live = $enemyUnit->getLive() + $damage;
				if ($live < 0) {
					$live = 0;
				}
				$enemyUnit->setLive($live);
			}
		}else {
			return 1;
		}
	}
    /**
     * summary
     */
    public function __construct()
    {
    	$this->setArmor(0);
    	$this->setAtack(15);
    	$this->setSpeed(12);

    }
}