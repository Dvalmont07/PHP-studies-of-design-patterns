<?php
/**
 * PHP version 7.2.4
 * GeneralProperties - the interface to set the common properties.
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
 * GeneralProperties - the interface to set the common properties.
 *
 * @category Abstract
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
abstract class GeneralProperties
{
    private $_name;
    private $_description;
    private $_type;
    private $_strengths;
    private $_weaknesses;
    private $_environment;

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
     * Get the value of _name.
     *
     * @return string
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * Undocumented function.
     *
     * @param string $_type x
     *
     * @return string
     */
    public function setType($_type)
    {
        $this->_type = $_type;

        return $this;
    }
}
