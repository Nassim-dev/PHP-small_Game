<?php

class Character {
    private $name = "";
    private $hp = 100;
    // coup basique random (5,25)
    private $atk;
    private $def;
    private $class;
    private $timeasleep;

    const HIMSELF= 1; //Detect if the user hit himself
    const NO_MANA = 2; //Detect if the "Magician" user don't have mana 
    const CHARACTER_DEAD = 3; // Detect if a character is already dead
    const CHARACTER_HIT = 4; // Detect if a user hit someone
    const HYPNOTISED = 5; //Detect if the user is hypnotised (asleep)
    const CHARACTER_ASLEEP = 6; //Detect if the user is currently asleep

    public function __construct($name, $hp, $atk, $def, $class, $timeasleep) 
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->atk = $atk;
        $this->def = $def;
        $this->class = $class;
        $this->timeasleep = $timeasleep;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name=$name;
    }

    public function getHp() {
        return $this->hp;
    }

    public function setHp($hp) {
        $this->hp=$hp;
    }

    public function getAtk() {
        return $this->atk;
    }

    public function setAtk($atk) {
        $this->atk=$atk;
    }

    public function getDef() {
        return $this->def;
    }

    public function setDef($def) {
        $this->def=$def;
    }

    public function coupBasique(Character $character){
        $coupBasique = rand(5,25);
        return $coupBasique;
    }

}

// $alex = new Character('alex', 100, 20, 20);
// echo $alex;
?>