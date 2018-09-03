<?php
/**
 * PHP version 7.2.4
 * WeaponFactory - The class the creates sand enemies.
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
 * WeaponFactory - The class the creates sand enemies.
 *
 * @category Class
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class WeaponFactory implements IFactory
{
    /**
     * Creates Human enemies.
     *
     * @param string $string the type of the enemy
     *
     * @return class
     */
    public static function createFactory($string)
    {
        if ($string == WeaponsEnum::$katanaSword) {
            return new KatanaWeapon();
        } elseif ($string == WeaponsEnum::$thunderBow) {
            return new BowWeapon();
        }
    }
}
