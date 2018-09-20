<?php

/**
 * PHP version 7.2.4
 * GarageDoor - The device class.
 *
 * @category Command
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

namespace Devices;

/**
 * GarageDoor - The device class.
 *
 * @category Devices
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class GarageDoor
{
    /**
     * Undocumented function.
     */
    public function up()
    {
        echo 'The garage door is UP<br/>';
    }

    /**
     * Undocumented function.
     */
    public function down()
    {
        echo 'The garage door is DOWN<br/>';
    }

    /**
     * Undocumented function.
     *
     * @return string
     */
    public function lightsOn()
    {
        echo 'The garage light is ON<br/>';
    }

    /**
     * Undocumented function.
     *
     * @return string
     */
    public function lightsOff()
    {
        echo 'The garage light is OFF<br/>';
    }
}
