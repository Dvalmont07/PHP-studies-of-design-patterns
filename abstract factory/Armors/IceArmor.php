<?php
/**
 * PHP version 7.2.4
 * IceArmor - Subclass of Armor.
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

namespace Armors;

use Enums\ElementalEnum;

/**
 * IceArmor - Subclass of armor.
 *
 * @category Class
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class IceArmor extends Armor
{
    /**
     * Undocumented function.
     */
    public function __construct()
    {
        $this->setName('The Ice Armor');
        $this->setDescription('A light armor resistent against water and wind');
        $this->setDefense(1.5);
        $this->setWeaknesses(ElementalEnum::$fire);
        $this->setStrengths(ElementalEnum::$water, ElementalEnum::$wind);
    }
}
