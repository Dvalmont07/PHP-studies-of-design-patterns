<?php
/**
 * PHP version 7.2.4
 * Weapon - Interface that set weapons.
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

namespace Weapons;

use Utilities\GeneralProperties;

/**
 * Weapon - Interface that set weapons.
 *
 * @category Abstract
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
abstract class Weapon extends GeneralProperties
{
    private $_power;
    private $_range;
    private $_isArea;
    private $_reach;

    /**
     * Set the value of $_power.
     *
     * @return float
     */
    public function getPower()
    {
        return $this->_power;
    }

    /**
     * Set the value of $_power.
     *
     * @param float $_power x
     *
     * @return float
     */
    public function setPower($_power)
    {
        $this->_power = $_power;

        return $this;
    }

    /**
     * Get the value of _range.
     *
     * @return float
     */
    public function getRange()
    {
        return $this->_range;
    }

    /**
     * Defines the range of the atack (i.e: 1, 2, 3...).
     *
     * @param float $_range x
     *
     * @return float
     */
    public function setRange($_range)
    {
        $this->_range = $_range;

        return $this;
    }

    /**
     * Get the value of _isArea.
     *
     * @return bool
     */
    public function getIsArea()
    {
        return $this->_isArea;
    }

    /**
     * Defines if an atack is just area or single.
     *
     * @param bool $_isArea x
     *
     * @return bool
     */
    public function setIsArea($_isArea)
    {
        $this->_isArea = $_isArea;

        return $this;
    }

    /**
     * Get the value of _reach.
     *
     * @return string
     */
    public function getReach()
    {
        return $this->_reach;
    }

    /**
     * Defines the reach of the atack (body, air or both).
     *
     * @param string $_reach x
     *
     * @return string
     */
    public function setReach($_reach)
    {
        $this->_reach = $_reach;

        return $this;
    }
}
