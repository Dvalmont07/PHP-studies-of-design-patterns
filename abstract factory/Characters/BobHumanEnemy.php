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
use Armors\IHasArmor;
use Enums\ElementalEnum;
use Enums\WeaponsEnum;
use Enums\ArmorsEnum;
use Factories\WeaponFactory;
use Factories\ArmorFactory;

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
class BobHumanEnemy extends HumanEnemy implements IHasWeapon, IHasArmor
{
    private $_basePpower = 10.1;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $strngths = array(ElementalEnum::$fire);
        $weaknesses = array(ElementalEnum::$water);
        $this->setName('Bob');
        $this->setDescription('The mad lad');
        $this->setPower($this->_basePpower);
        $this->setSpeed(45.1);
        $this->setDefense(11.1);
        $this->setEnergy(50.1);
        $this->setDextority(30.1);
        $this->setAlignment('evil');
        $this->setStrengths($strngths);
        $this->setWeaknesses($weaknesses);

        //Equips
        $this->equipWeapon();
        $this->equipArmor();
    }

    /**
     * Undocumented function.
     *
     * @return class
     */
    public function equipWeapon()
    {
        $result = WeaponFactory::createFactory(WeaponsEnum::$katanaSword);

        $this->setScreenText("&emsp;{$this->getName()} has {$result->getName()}, {$result->getDescription()} :: power {$result->getPower()} <br/>");

        $this->setPower($result->getPower());

        return $result;
    }

    /**
     * Undocumented function.
     *
     * @return class
     */
    public function equipArmor()
    {
        $result = ArmorFactory::createFactory(ArmorsEnum::$fireArmor);

        $this->setScreenText("&emsp;{$this->getName()} has {$result->getName()}, {$result->getDescription()} :: defense {$result->getDefense()} <br/>");

        $this->setDefense($result->getDefense());

        return $result;
    }
}
