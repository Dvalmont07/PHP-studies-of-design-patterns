<?php
/**
 * PHP version 7.1
 * Icms - Class that calculates ICSM tax
 *
 * @category  Class
 * @package   Strategy
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   GIT: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

namespace Strategy;

/**
 * PHP version 7.1
 * Icms - Class that calculates ICSM tax
 *
 * @category  Class
 * @package   Strategy
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   Release: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */
class IcmsTax implements ITax
{
    /**
     * Function that calculates ICMS
     *
     * @param double $number double number
     *
     * @return void
     */
    public function calculate($number)
    {
        return $number * ICMS;
    }

}
