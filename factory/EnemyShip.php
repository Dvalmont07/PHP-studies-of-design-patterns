<?php

/**
 * PHP version 7.2.4
 * Enemy - Interface class.
 *
 * @category  Abstract
 *
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

/**
 * Enemy - Interface class.
 *
 * @category  Abstract
 *
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */
abstract class EnemyShip
{
    private $_name;
    private $_amtDamage;

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setDamage($damage)
    {
        $this->_amtDamage = $damage;
    }

    public function getDamage()
    {
        return $this->_amtDamage;
    }

    public function followHeroShip()
    {
        echo "{$this->getName()} follows the hero <br/>";
    }

    public function displayEnemyShip()
    {
        echo  "{$this->getName()} appears on screen <br/>";
    }

    public function enemyShipShoots()
    {
        echo  "{$this->getName()} shoots the hero and does {$this->getDamage()} of damage <br/>";
    }
}
