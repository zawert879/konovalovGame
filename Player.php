<?php 
class Player{

	public function atack($unitNo,$player){
		/** @var Unit $unit */
		$unit = $this->units[$unitNo];
			
		if ($unit->getLive() > 0 ){
			/** @var Unit $enemyUnit */
			$enemyUnits = $player->getUnits();

			$key = array_rand($enemyUnits);
			$enemyUnit = $enemyUnits[$key];
			$damage = $enemyUnit->getArmor() - $unit->getAtack()* $unit->getSpeed();

			if ($damage < 0) {

				$live = $enemyUnit->getLive() + $damage;
				if ($live < 0) {
					$live = 0;
				}
				$enemyUnit->setLive($live);
				

			}
		}

	}
	public function getAllLive(){
		$live=0;
		foreach($this->units as $unit){
			$live += $unit->getLive();
		}
		return $live;
	}

	private $units;
	private $team; 
	public function __construct($team)
	{
		$this->team = $team;
        // echo 'hello my name is '.$team;
	}

    /**
     * @return mixed
     */
    public function getUnits()
    {
    	return $this->units;
    }

    /**
     * @param mixed $units
     *
     * @return self
     */
    public function setUnits($units)
    {
    	$this->units = $units;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getTeam()
    {
    	return $this->team;
    }

    /**
     * @param mixed $team
     *
     * @return self
     */
    public function setTeam($team)
    {
    	$this->team = $team;

    	return $this;
    }
}