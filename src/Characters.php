<?php
<<<<<<< Updated upstream

class Character {
    private $name = "";
    private $hp = 100;
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

}

// $alex = new Character('alex', 100, 20, 20);
// echo $alex;
=======
 echo 'hello'
>>>>>>> Stashed changes
?>