<?php
/**
 * PHP version 7.2.4
 * Light - The device class.
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
 * Light - The device class.
 *
 * @category Devices
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class Light
{
    /**
     * Undocumented function.
     *
     * @return string
     */
    public function on()
    {
        echo 'The light is ON<br/>';
    }

    /**
     * Undocumented function.
     *
     * @return string
     */
    public function off()
    {
        echo 'The light is OFF<br/>';
    }
}
