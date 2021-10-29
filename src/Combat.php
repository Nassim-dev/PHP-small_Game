<?php

class Combat{
    private $player1;
    private $player2;
   
    public function __construct()
    {
        // Remplir les paramètres avec les données recup sur le fichier index.php pour le name
        $this->player1 = new Character();
        $this->player2 = new Character();
    }

    public function askAttack(Character $player){
        $compteurAtkGrosseAtk = 0;
    
        if ($coupBasique == true){
            $compteurAtkGrosseAtk ++;
            
            return $player->coupBasique();
        }

        if ($compteurAtkGrosseAtk == 3) {
            return $player->$atk;
        }
    }

    public function combat($player1,$player2){
        $turns = 0;	
        while ($player1->$hp > 0 or $player2->$hp > 0){
            if($turns % 2 != 0) {
                askAttack();
            }
            else {
                $attacker = &$player;
                $defender = &$monster;
            }
            $damage = 0;
            if($attacker['attack'] > $defender['defence']) {
            $damage = $attacker['attack'] - $defender['defence'];	
            }
            $defender['curhp'] -= $damage;
            $combat[$turns] = array(
            attacker	=>	$attacker['name'],
            defender	=>	$defender['name'],
            damage		=>	$damage
            );
            $turns++;
            
        }
    }
    
}

