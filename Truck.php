<?php

require_once 'Vehicle.php';

class Truck extends Vehicle {

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $storageCapacity;

    private $lading = 0;

    private $energy;

    public function __construct(string $color, int $nbSeats, string $storageCapacity, string $energy)
{
    parent::__construct($color, $nbSeats);
    $this->setStorageCapacity($storageCapacity);
    $this->setEnergy($energy);
}

public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

public function getLading(): int
    {
        return $this->lading;
    }

public function setLading(int $lading): void
    {
        $this->lading = $lading;
    }

public function getEnergy(): string
    {
        return $this->energy;
    }

public function setEnergy(string $energy) : Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


public function filling(): string {
$sentence = "";
    if ($this->getStorageCapacity() > $this->getLading()){
        $sentence .= "In filling";
        return $sentence;
    } else {
    $sentence .= "Truck is full";
    return $sentence;
    }
}


}
