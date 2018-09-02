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
abstract class Character
{
    private $_name;
    private $_power;
    private $_defense;
    private $_speed;
    private $_talent;

    private $_description;
    private $_energy;
    private $_dextority;
    private $_alignment;
    private $_strengths;
    private $_weaknesses;
    private $_environment;

    /**
     * The enemy atacks the hero.
     *
     * @return string
     */
    public function atack()
    {
        $sumAtack = $this->getPower() + $this->checkEnvironment();
        echo "{$this->getName()} atacks hero with {$sumAtack} of power and {$this->getSpeed()} of speed <br/>";
    }

    /**
     * Check if the environment is the properly type and aply pennalyties or bonuses.
     *
     * @return float
     */
    public function checkEnvironment()
    {
        $result = 0;
        if (in_array($this->_environment, $this->getWeaknesses())) {
            $result -= ENVIRONMENT_MODIFIER;
        } elseif (in_array($this->_environment, $this->getStrengths())) {
            $result += ENVIRONMENT_MODIFIER;
        }

        return $result;
    }

    /**
     * Undocumented function.
     *
     * @param string $_environment x
     *
     * @return string
     */
    public function setEnvironment($_environment)
    {
        $this->_environment = $_environment;

        return $this;
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
     * Set the value of $_name.
     *
     * @param string $_name x
     *
     * @return string
     */
    public function setName($_name)
    {
        $this->_name = $_name;

        return $this;
    }

    /**
     * Get the value of _name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
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
        $this->_power = $_power;

        return $this;
    }

    /**
     * Set the value of $_atack.
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
        $this->_defense = $_defense;

        return $this;
    }

    /**
     * Display enemy on the screen.
     *
     * @return string
     */
    public function displayEnemy()
    {
        echo "{$this->getName()} is showm on the screen <br/>";
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
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * Set the value of _description.
     *
     * @param string $_description description of the character
     *
     * @return string
     */
    public function setDescription($_description)
    {
        $this->_description = $_description;

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
     * @return array
     */
    public function getStrengths()
    {
        return $this->_strengths;
    }

    /**
     * Set the value of _description.
     *
     * @param array $_strengths array of elements
     *
     * @return array
     */
    public function setStrengths($_strengths)
    {
        $this->_strengths = $_strengths;

        return $this;
    }

    /**
     * Get the value of _description.
     *
     * @return array
     */
    public function getWeaknesses()
    {
        return $this->_weaknesses;
    }

    /**
     * Set the value of _description.
     *
     * @param array $_weaknesses array of elements
     *
     * @return array
     */
    public function setWeaknesses($_weaknesses)
    {
        $this->_weaknesses = $_weaknesses;

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
}
