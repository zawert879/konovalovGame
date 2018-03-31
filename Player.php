<?php 

class Player{


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
    /**
     * @param Unit 
     */
    public function addUnit($unit){

    	$this->units[] =$unit; 
    }
    public function removeUnit($unit){

    	$key = array_search($unit, $this->units, true);
        if ($key === false) {
            return false;
        }
        unset($this->units[$key]);
        return true;
    }
}