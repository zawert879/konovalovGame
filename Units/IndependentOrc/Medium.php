<?php 
namespace Units\IndependentOrc;
use Units\IndependentOrc;
/**
 * summary
 */
class Medium extends IndependentOrc
{
    /**
     * summary
     */
    public function __construct()
    {
        $this->setArmor(5);
    	$this->setAtack(15);
    	$this->setSpeed(10);

    }
}