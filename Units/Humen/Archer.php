<?php 
namespace Units\Humen;
use Units\Humen;
/**
 * summary
 */
class Archer extends Humen
{
	private $arrow = 30;
	private $exactitude = 10;

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
    	$this->setArmor(5);
    	$this->setAtack(5);
    	$this->setSpeed(5);
    }
}