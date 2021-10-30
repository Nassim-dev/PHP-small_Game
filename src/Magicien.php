<?php

class Magicien extends Character {
    public function magie(Character $asleep) {
        
        if ($asleep->id == $this->id) {
            return self::HIMSELF;
        }
        
        if ($this->mana == 0) {
            return self::NO_MANA;
        }
        
        if ($this->toBeAsleep()) {
            return self::CHARACTER_ASLEEP;
        }

        /* Function de timer pour gérer le mana */
        $asleep->timeToBeAsleep = time() + ($this->mana * 6) * 120;
        
        return self::HYPNOTISED;
    }
}
