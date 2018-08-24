<?php
/**
 * PHP version 7.2.4
 * BigUFOEnemyShip - Subclass of EnemyShip.
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
 * Index - Root file for Factory Pattern.
 *
 * @category Abstract
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
abstract class Enemy
{
    private $_name;
    private $_atack;
    private $_defense;
    private $_talent;

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
     * Set the value of $_atack.
     *
     * @return string
     */
    public function getAtack()
    {
        return $this->_atack;
    }

    /**
     * Set the value of $_atack.
     *
     * @param string $_atack x
     *
     * @return string
     */
    public function setAtack($_atack)
    {
        $this->_atack = $_atack;

        return $this;
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
}
