<?php
/**
 * PHP version 7.2.4
 * FireArmor - Subclass of Armor.
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
 * FireArmor - Subclass of armor.
 *
 * @category Class
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class FireArmor extends Armor
{
    /**
     * Undocumented function.
     */
    public function __construct()
    {
        $this->setName('The Magma Armor');
        $this->setDescription('A light armor resistent against fire');
        $this->setDefense(2);
        $this->setWeaknesses(ElementalEnum::$water);
        $this->setStrengths(ElementalEnum::$fire);
    }
}
