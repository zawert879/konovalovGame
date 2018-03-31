<?php 
namespace Units\Orc;
use Units\Orc;
/**
 * summary
 */
class Small extends Orc
{
    /**
     * summary
     */
    public function __construct()
    {
        $this->setArmor(5);
    	$this->setAtack(7);
    	$this->setSpeed(8);

    }
}