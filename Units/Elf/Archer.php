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

	public function getAtack(){
		if($this->arrow != 0){
			$this->arrow--;		

			if( rand(1, 20) < $this->exactitude){
				return $this->atack;
			}
		}
		return 0;
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