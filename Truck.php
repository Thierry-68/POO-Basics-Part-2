<?php

require_once("Vehicle.php");

class Truck extends Vehicle
{
    private int $storageCapacity;
    private int $currentStorage;
    private string $name="";
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ]; 

    public function __construct(string $color,int $nbSeats, string $energy,int $storageCapacity)
    {
         parent::__construct($color,$nbSeats);
         $this->setEnergy($energy); 
         $this->setStorageCapacity($storageCapacity);
         $this->setCurrentSpeed(0);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
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
        $this->energyLevel = $this->energyLevel<$this->storageCapacity?$energyLevel:$this->storageCapacity;   
    }

    public function fillFull() : string
    {
        if($this->storageCapacity>$this->currentStorage){
            return "in filling";
        }
        return "full";
    }

    public function start():string // Démarrer
    {        
        if($this->currentSpeed === 0){
            $this->currentSpeed=1;     
            return "On démarre !";
        }
        return "C'est déjà fait ! Speed is ".$this->currentSpeed; 
    }
    
    public function forward():string // Avancer 
    {           
        if($this->currentSpeed !==0 ){
            $this->currentSpeed=15;
            return "Go !";
        }
        else{
            return "Tu as oublié de démarrer !";
        }        
    }

    /**
     * Get the value of storageCapacity
     */ 
    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }

    /**
     * Set the value of storageCapacity
     *
     * @return  self
     */ 
    public function setStorageCapacity($storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;

        return $this;
    }

    /**
     * Get the value of currentStorage
     */ 
    public function getCurrentStorage()
    {
        return $this->currentStorage;
    }

    /**
     * Set the value of currentStorage
     *
     * @return  self
     */ 
    public function setCurrentStorage(int $currentStorage)
    {
        $this->currentStorage=$currentStorage;       
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return "The <span style='color:white;background-color:".$this->color.";'> ".$this->name." car ".$this->color." </span>";
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}