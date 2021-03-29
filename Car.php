<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    private string $energy;
    private int $energyLevel;
    private string $name;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    
    // Constructor
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->currentSpeed=0;
    }

    // Methode
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if(in_array($energy,self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getName():string
    {
        return "The <span style='color:white;background-color:".$this->color.";'> ".$this->name." car ".$this->color." </span>";
    }

    public function setName(string $name):void
    {
        $this->name=$name;
    }

    public function forward():string // Avancer 
    {
        if($this->getCurrentSpeed() !==0 ){
            $this->currentSpeed=15;
            return "Go !";
        }
        else{
            return "Tu as oublié de démarrer !";
        }        
    }

    public function start():string // Démarrer
    {
        if($this->currentSpeed === 0){
            $this->currentSpeed=1;
            return "On démarre !";
        }
        return "C'est déjà fait ! Speed is ".$this->currentSpeed; 
    }
}

