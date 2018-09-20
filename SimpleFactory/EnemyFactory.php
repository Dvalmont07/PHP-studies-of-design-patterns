<?php
/**
 * PHP version 7.2.4
 * EnemyFactory - Class that encapsulates the lobic of objects's creation
 *
 * @category  Simple_Factory
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @version GIT: <git_id> *
 * @see     "http://www.seoseedrank.com.br/sobre"
 * @since   1.0.0
 */

/**
 * EnemyFactory - Subclass of EnemyShip
 * 
 * @category Class
 * @author   Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @see      "http://www.seoseedrank.com.br/sobre" 
 */
class EnemyFactory
{
    private $_enemyShip;

    /**
     * General method to create classes.
     *
     * @return class EnemyShip
     */
    public function makeEnemyShip()
    {
        $rndmNum = $this->_radmomNumber();
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
    private function _radmomNumber()
    {
        return $randomNumber = rand(1, 3);
    }
}
