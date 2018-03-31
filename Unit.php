<?php


class Unit{

    public function atack($player){
       
        if ($this->live > 0 ){
            /** @var Unit $enemyUnit */
            $enemyUnits = $player->getUnits();
            $key = array_rand($enemyUnits);
            $enemyUnit = $enemyUnits[$key];
          
            $damage = $enemyUnit->getArmor() - $this->getAtack()* $this->getSpeed();
           
            if ($damage < 0) {
                $live = $enemyUnit->getLive() + $damage;
                if ($live < 0) {
                    $live = 0;
                }
                $enemyUnit->setLive($live);
            }
        }else {
            return 1;
        }
    }

    protected $live =1000;
    protected $atack;
    protected $armor;
    protected $speed;

    public function __construct()
    {

        // echo 'hello i Unit';
    }

    /**
     * @return mixed
     */
    public function getLive()
    {
        return $this->live;
    }

    /**
     * @param mixed $live
     *
     * @return self
     */
    public function setLive($live)
    {
        $this->live = $live;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAtack()
    {
        return $this->atack;
    }

    /**
     * @param mixed $atack
     *
     * @return self
     */
    public function setAtack($atack)
    {
        $this->atack = $atack;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * @param mixed $armor
     *
     * @return self
     */
    public function setArmor($armor)
    {
        $this->armor = $armor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     *
     * @return self
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }
}
