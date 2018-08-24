<?php
/**
 * PHP version 7.2.4
 * BigUFOEnemyShip - Subclass of EnemyShip
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
 * Index - Root file for Factory Pattern
 * 
 * @category Class
 * @author   Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @see      "http://www.seoseedrank.com.br/sobre" 
 */

class BigUFOEnemyShip extends EnemyShip
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setName('Big UFO');
        $this->setDamage('30');
        $this->setSpeed('400');
    }
}
