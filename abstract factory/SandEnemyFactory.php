<?php
/**
 * PHP version 7.2.4
 * SandEnemyFactory - The class the creates sand enemies.
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
 * @category Class
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class SandEnemyFactory implements IEnemyFactory
{
    public $enemy;

    /**
     * Creates enemies.
     *
     * @param string $string the type of the enemy
     *
     * @return class
     */
    public function createEnemy($string)
    {
        if ($string == 'bird') {
            $enemy = new SandBirdEnemy();
        } elseif ($string == 'cat') {
            $enemy = new SandCatEnemy();
        } elseif ($string == 'bear') {
            $enemy = new SandBearEnemy();
        }

        return $enemy;
    }
}
