<?php
/**
 * PHP version 7.2.4
 * UFOEnemyShip - Subclass of EnemyShip.
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
class UFOEnemyShip extends EnemyShip
{
    public function __construct()
    {
        $this->setName('UFO Ship');
        $this->setDamage('10');
        $this->setSpeed('200');
    }
}
