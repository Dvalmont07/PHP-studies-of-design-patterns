<?php

/**
 * PHP version 7.2.4
 * Enemy - Interface class.
 *
 * @category Simple_Fabric
 *
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see   "http://www.seoseedrank.com.br/sobre"
 * @since 1.0.0
 */

/**
 * Enemy - Interface class.
 *
 * @category Abstract
 *
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see   "http://www.seoseedrank.com.br/sobre"
 * @since 1.0.0
 */
abstract class EnemyShip
{
    private $_name;
    private $_amtDamage;
    private $_speed;

    /**
     * Set name.
     *
     * @param string $name sets the ship name
     *
     * @return string $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * Get damage.
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Set name.
     *
     * @param string $damage sets the damage amout
     *
     * @return string $damage
     */
    public function setDamage($damage)
    {
        $this->_amtDamage = $damage;
    }

    /**
     * Get name.
     *
     * @return string $name
     */
    public function getDamage()
    {
        return $this->_amtDamage;
    }

    /**
     * Set speed.
     *
     * @param string $speed sets the ship speed
     *
     * @return string $speed
     */
    public function setSpeed($speed)
    {
        $this->_speed = $speed;
    }

    /**
     * Get speed.
     *
     * @return string
     */
    public function getSpeed()
    {
        return $this->_speed;
    }

    /**
     * Follow hero's ship.
     *
     * @return string
     */
    public function followHeroShip()
    {
        echo "{$this->getName()} follows the hero <br/>";
    }

    /**
     * Displays enemy ship.
     *
     * @return string
     */
    public function displayEnemyShip()
    {
        echo "{$this->getName()} appears on screen <br/>";
    }

    /**
     * Enemy ship shoot.
     */
    public function enemyShipShoots()
    {
        echo "{$this->getName()} shoots the hero and does {$this->getDamage()} of damage at {$this->getSpeed()} Km/h <br/>";
    }
}
