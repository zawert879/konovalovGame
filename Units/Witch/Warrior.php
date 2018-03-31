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
}