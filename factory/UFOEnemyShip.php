<?php

class UFOEnemyShip extends EnemyShip
{
    public function __construct()
    {
        $this->setName('UFO Ship');
        $this->setDamage('10');
        $this->setSpeed('200');
    }
}
