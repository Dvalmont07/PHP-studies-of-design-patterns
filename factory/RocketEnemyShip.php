<?php

class RocketEnemyShip extends EnemyShip
{
    public function __construct()
    {
        $this->setName('Rocket Ship');
        $this->setDamage('20');
        $this->setSpeed('100');
    }
}
