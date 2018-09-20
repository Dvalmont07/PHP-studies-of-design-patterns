<?php
/**
 * PHP version 7.2.4
 * LenoHumanEnemy - subclass of Character that creates human enemies.
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

use Armors\IHasArmor;
use Enums\ElementalEnum;
use Enums\ArmorsEnum;
use Factories\ArmorFactory;

/**
 * LenoHumanEnemy - subclass of Character that creates human enemies.
 *
 * @category Class
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class LenoHumanEnemy extends HumanEnemy implements IHasArmor
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $strngths = array(ElementalEnum::$water);
        $weaknesses = array(ElementalEnum::$earth);
        $this->setName('Leno');
        $this->setDescription('The killer');
        $this->setPower(50.1);
        $this->setDefense(45.1);
        $this->setSpeed(5.1);
        $this->setEnergy(50.1);
        $this->setDextority(10.1);
        $this->setAlignment('evil');
        $this->setStrengths($strngths);
        $this->setWeaknesses($weaknesses);

        //equips
        $this->equipArmor();
    }

    /**
     * Character can equip armor.
     */
    public function equipArmor()
    {
        $result = ArmorFactory::createFactory(ArmorsEnum::$iceArmor);

        $this->setScreenText("&emsp;{$this->getName()} has {$result->getName()}, {$result->getDescription()} :: defense {$result->getDefense()} <br/>");

        $this->setDefense($result->getDefense());

        return $result;
    }
}
