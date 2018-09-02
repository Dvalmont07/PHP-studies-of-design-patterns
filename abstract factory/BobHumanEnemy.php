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
class BobHumanEnemy extends HumanEnemy
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $strngths = array('fire');
        $weaknesses = array('wather');
        $this->setName('Bob');
        $this->setDescription('A mad lad');
        $this->setPower(10.1);
        $this->setSpeed(45.1);
        $this->setDefense(10.1);
        $this->setEnergy(50.1);
        $this->setDextority(30.1);
        $this->setAlignment('evil');
        $this->setStrengths($strngths);
        $this->setWeaknesses($weaknesses);
    }
}
