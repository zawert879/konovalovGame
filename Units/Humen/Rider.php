<?php 
namespace Units\Humen;
use Units\Humen;
/**
 * summary
 */
class Rider extends Humen
{
    /**
     * summary
     */
    public function __construct()
    {
        $this->setArmor(5);
    	$this->setAtack(12);
    	$this->setSpeed(15);

    }
}