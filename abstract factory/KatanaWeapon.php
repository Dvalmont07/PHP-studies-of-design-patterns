<?php
/**
 * PHP version 7.2.4
 * KatanaWeapon - Subclass of Weapon.
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
 * KatanaWeapon - Subclass of Weapon.
 *
 * @category Class
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class KatanaWeapon extends Weapon
{
    /**
     * Undocumented function.
     */
    public function __construct()
    {
        $this->setName('Katana Sowrd');
        $this->setDescription('An ancient mistical sorwd');
        $this->setPower(2.5);
        $this->setRange(1);
        $this->setReach(ReachEnum::$ground);
        $this->setWeaknesses(ElementalEnum::$neutral);
        $this->setStrengths(ElementalEnum::$neutral);
        $this->setEnvironment(ElementalEnum::$neutral);
    }
}
