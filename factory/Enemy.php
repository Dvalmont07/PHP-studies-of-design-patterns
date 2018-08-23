<?php

/**
 * PHP version 7.2.4
 * Enemy - Interface class
 * 
 * @category  Abstract
 * @package   Factory
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

/**
 * Enemy - Interface class
 * 
 * @category  Abstract
 * @package   Factory
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

abstract class IEnemy
{
    protected $name;
    protected $amtDamege;

    function followHeroShip()
    {
        return "Enemy follows the hero";
    }

    function displayEnemyShip()
    {
        return "Enemy appears on screen";
    }

    function enemyShipShoots()
    {
        return "Enemy shoots the hero";
    }

    function setDamage(Float $damage)
    {
        $this->$damage = $damage;
    }

    function getDamage()
    {
        return $this->$damage;
    }


}