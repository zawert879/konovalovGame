<?php 
namespace Units\Gnome;
use Units\Gnome;
/**
 * summary
 */
class Warrior extends Gnome
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