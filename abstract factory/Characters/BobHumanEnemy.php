<?php
/**
 * PHP version 7.2.4
 * BobHumanEnemy - subclass of Character that creates human enemies.
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

namespace Characters;

use Weapons\IHasWeapon;
use Enums\ElementalEnum;
use Enums\WeaponsEnum;
use Factories\WeaponFactory;

/**
 * BobHumanEnemy - subclass of Character that creates human enemies.
 *
 * @category Class
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class BobHumanEnemy extends HumanEnemy implements IHasWeapon
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $power = 10.1;
        $strngths = array(ElementalEnum::$fire);
        $weaknesses = array(ElementalEnum::$water);
        $this->setName('Bob');
        $this->setDescription('A mad lad');
        $this->setPower($power);
        $this->setPower($this->equipWeapon()->getPower());
        $this->setSpeed(45.1);
        $this->setDefense(11.1);
        $this->setEnergy(50.1);
        $this->setDextority(30.1);
        $this->setAlignment('evil');
        $this->setStrengths($strngths);
        $this->setWeaknesses($weaknesses);
    }

    /**
     * Character can equip weapon.
     */
    public function equipWeapon()
    {
        $weapon = WeaponFactory::createFactory(WeaponsEnum::$katanaSword);

        $this->setScreenText("&emsp;{$this->getName()} has {$weapon->getName()}, {$weapon->getDescription()} :: pwr {$weapon->getPower()} <br/>");

        return $weapon;
    }
}
