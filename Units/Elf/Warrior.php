<?php 
namespace Units\Elf;
use Units\Elf;
/**
 * summary
 */
class Warrior extends Elf
{
    /**
     * summary
     */
    public function __construct()
    {
        $this->setArmor(0);
    	$this->setAtack(15);
    	$this->setSpeed(10);

    }
}