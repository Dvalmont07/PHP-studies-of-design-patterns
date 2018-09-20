<?php
/**
 * PHP version 7.2.4
 * ArmorFactory - The class the creates armors.
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

namespace Factories;

use Enums\ArmorsEnum;
use Armors\FireArmor;
use Armors\IceArmor;

/**
 * ArmorFactory - The class the creates armors.
 *
 * @category Factories
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class ArmorFactory implements IFactory
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
        if ($string == ArmorsEnum::$fireArmor) {
            return new FireArmor();
        } elseif ($string == ArmorsEnum::$iceArmor) {
            return new IceArmor();
        }
    }
}
