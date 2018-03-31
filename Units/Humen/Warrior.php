<?php 
namespace Units\Humen;
use Units\Humen;
/**
 * summary
 */
class Warrior extends Humen
{
    /**
     * summary
     */
    public function __construct()
    {
        $this->setArmor(10);
    	$this->setAtack(5);
    	$this->setSpeed(7);

    }
}