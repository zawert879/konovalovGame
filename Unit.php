<?php
class Unit{
	
	protected $live;
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