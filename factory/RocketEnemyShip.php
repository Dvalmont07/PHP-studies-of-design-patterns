<?php
/**
 * PHP version 7.2.4
 * RocketEnemyShip - Subclass of EnemyShip.
 *
 * @category Simple_Factory
 *
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @version GIT: <git_id> *
 *
 * @see   "http://www.seoseedrank.com.br/sobre"
 * @since 1.0.0
 */

/**
 * Index - Root file for Factory Pattern.
 *
 * @category Simple_Factory
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class RocketEnemyShip extends EnemyShip
{
    /**
     * Undocumented function.
     */
    public function __construct()
    {
        $this->setName('Rocket Ship');
        $this->setDamage('20');
        $this->setSpeed('100');
    }
}
