<?php
/**
 * PHP version 7.2.4
 * Armor - Interface that set Armors.
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

namespace Armors;

use Utilities\GeneralProperties;

/**
 * Armor - Interface that set Armors.
 *
 * @category Armors
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
abstract class Armor extends GeneralProperties
{
    private $_defense;

    /**
     * Set the value of $_defense.
     *
     * @return float
     */
    public function getDefense()
    {
        return $this->_defense;
    }

    /**
     * Set the value of $_defense.
     *
     * @param float $_defense x
     *
     * @return float
     */
    public function setDefense($_defense)
    {
        $this->_defense += $_defense;

        return $this;
    }
}
