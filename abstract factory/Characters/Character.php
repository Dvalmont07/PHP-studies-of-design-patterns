<?php
/**
 * PHP version 7.2.4
 * Character - the interface to create characters.
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

use Utilities\GeneralProperties;

/**
 * Character - the interface to create characters.
 *
 * @category Abstract
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
abstract class Character extends GeneralProperties
{
    private $_screenText;
    private $_power;
    private $_defense;
    private $_speed;
    private $_talent;
    private $_energy;
    private $_dextority;
    private $_alignment;

    /**
     * The enemy atacks the hero.
     *
     * @return string
     */
    public function atack()
    {
        $sumAtack = $this->getPower() + $this->checkEnvironment();
        $this->setScreenText("&emsp;{$this->getName()} atacks hero with: {$sumAtack} of power and {$this->getSpeed()} of speed <br/>");

        echo $this->getScreenText();
    }

    /**
     * Undocumented function.
     */
    public function executeMoves()
    {
        $this->displayEnemy();
        $this->atack();
    }

    /**
     * Set the value of $_power.
     *
     * @param string $_power x
     *
     * @return string
     */
    public function setPower($_power)
    {
        $this->_power += $_power;

        return $this;
    }

    /**
     * Set the value of $_power.
     *
     * @return string
     */
    public function getPower()
    {
        return $this->_power;
    }

    /**
     *  Get the value of _defense.
     *
     * @return string
     */
    public function getDefense()
    {
        return $this->_defense;
    }

    /**
     * Set the value of _defense.
     *
     * @param string $_defense x
     *
     * @return string
     */
    public function setDefense($_defense)
    {
        $this->_defense += $_defense;

        return $this;
    }

    /**
     * Display enemy on the screen.
     *
     * @return string
     */
    public function displayEnemy()
    {
        echo "<h1>{$this->getName()}, {$this->getDescription()}, is showm on the screen </h1>";
        echo "&emsp;Base power: {$this->getPower()}<br/>";
        echo "&emsp;Base defense: {$this->getDefense()}<br/>";
        echo "&emsp;Base speed: {$this->getSpeed()}<br/>";
    }

    /**
     * Get the value of _speed.
     *
     * @return float
     */
    public function getSpeed()
    {
        return $this->_speed;
    }

    /**
     * Set the value of _speed.
     *
     * @param float $_speed the amount of speed of the character
     *
     * @return float
     */
    public function setSpeed($_speed)
    {
        $this->_speed = $_speed;

        return $this;
    }

    /**
     * Get the value of _description.
     *
     * @return float
     */
    public function getEnergy()
    {
        return $this->_energy;
    }

    /**
     * Set the value of _description.
     *
     * @param float $_energy description of the character
     *
     * @return float
     */
    public function setEnergy($_energy)
    {
        $this->_energy = $_energy;

        return $this;
    }

    /**
     * Get the value of _description.
     *
     * @return float
     */
    public function getDextority()
    {
        return $this->_dextority;
    }

    /**
     * Set the value of _dextority.
     *
     * @param float $_dextority the dextority of the character
     *
     * @return float
     */
    public function setDextority($_dextority)
    {
        $this->_dextority = $_dextority;

        return $this;
    }

    /**
     * Get the value of _alignment.
     *
     * @return string
     */
    public function getAlignment()
    {
        return $this->_alignment;
    }

    /**
     * Set the value of _alignment.
     *
     * @param string $_alignment this shows if the characters is good, evil
     *
     * @return string
     */
    public function setAlignment($_alignment)
    {
        $this->_alignment = $_alignment;

        return $this;
    }

    /**
     * Get the value of _screenText.
     *
     * @return string
     */
    public function getScreenText()
    {
        return $this->_screenText;
    }

    /**
     * Set the value of _screenText.
     *
     * @param string $_screenText this shows if the characters is good, evil
     *
     * @return string
     */
    public function setScreenText($_screenText)
    {
        $this->_screenText .= $_screenText;

        return $this;
    }
}
