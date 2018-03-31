<?php 
namespace Units\Orc;
use Units\Orc;
/**
 * summary
 */
class Big extends Orc
{
    /**
     * summary
     */
    public function __construct()
    {
        $this->setArmor(0);
    	$this->setAtack(20);
    	$this->setSpeed(5);

    }
}