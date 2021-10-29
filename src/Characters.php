<?php

class Character {
    private $name = "";
    private $hp = 100;
    // coup basique random (5,25)
    private $atk;
    private $def;

    public function __construct($name, $hp, $atk, $def) 
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->atk = $atk;
        $this->def = $def;
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