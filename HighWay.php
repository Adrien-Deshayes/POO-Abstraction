<?php
abstract class HighWay{
      /**
    * @var array
    */
    protected $currentVehicles;

    /**
    * @var integer
    */
    protected $nbLane;

    /**
    * @var integer
    */
    protected $maxSpeed;

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(int $currentVehicles): void
    {
        $this->nbWheels = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbWheels = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->nbWheels = $maxSpeed;
    }

    abstract public function addVehicle(object $vehicle);
    

    }
