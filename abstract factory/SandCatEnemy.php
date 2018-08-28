<?php
/**
 * PHP version 7.2.4
 * SandCatEnemy - Subclass of Enemy.
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
 * The enemy: Sand cat.
 *
 * @category Class
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class SandCatEnemy extends Enemy
{
    /**
     * Undocumented function.
     */
    public function __construct()
    {
        $this->setName('Sand Cat');
        $this->setAtack(10);
        $this->setSpeed(20);
    }
}
