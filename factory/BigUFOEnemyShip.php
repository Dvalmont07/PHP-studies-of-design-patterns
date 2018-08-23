<?php

class BigUFOEnemyShip extends EnemyShip
{
    public function __construct()
    {
        $this->setName('Big UFO');
        $this->setDamage('30');
        $this->setSpeed('400');
    }
}
