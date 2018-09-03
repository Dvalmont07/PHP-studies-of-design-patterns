<?php
/**
 * PHP version 7.2.4
 * BowWeapon - Subclass of Weapon.
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
 * BowWeapon - Subclass of Weapon.
 *
 * @category Class
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class BowWeapon extends Weapon
{
    /**
     * Undocumented function.
     */
    public function __construct()
    {
        $this->setName('The Thunder Bow');
        $this->setDescription('A short bow');
        $this->setPower(1);
        $this->setRange(5);
        $this->setReach(ReachEnum::$both);
        $this->setWeaknesses(ElementalEnum::$earth);
        $this->setStrengths(ElementalEnum::$lightning);
    }
}
