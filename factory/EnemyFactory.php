<?php

class EnemyFactory
{
    private $_enemyShip;

    public function makeEnemyShip()
    {
        $rndmNum = $this->radmomNumber();
        var_dump($rndmNum);
        if ($rndmNum === 1) {
            $this->_enemyShip = new UFOEnemyShip();
        } elseif ($rndmNum === 2) {
            $this->_enemyShip = new RocketEnemyShip();
        } elseif ($rndmNum === 3) {
            $this->_enemyShip = new BigUFOEnemyShip();
        }

        return $this->_enemyShip;
    }

    /**
     * Returna a random number.
     *
     * @return int
     */
    private function radmomNumber()
    {
        return $randomNumber = rand(1, 3);
    }
}
