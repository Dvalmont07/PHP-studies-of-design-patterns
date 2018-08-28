<?php
/**
 * PHP version 7.2.4
 * EnemyFactory.
 *
 * @category Abstract_Factory
 *
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @version GIT: <git_id>
 *
 * @see   "http://www.seoseedrank.com.br/sobre"
 * @since 1.0.0
 */

/**
 * SandEnemyFactory - The class the creates sand enemies.
 *
 * @category Interface
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
interface IEnemyFactory
{
    /**
     * Creates enemies.
     *
     * @param string $string the type of enemy
     *
     * @return class
     */
    public function createEnemy($string);
}
