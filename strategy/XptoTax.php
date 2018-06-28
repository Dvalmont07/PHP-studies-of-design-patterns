<?php
/**
 * PHP version 7.1
 * XptoTax - Class that calculates ISS Xpto
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



/**
 * PHP version 7.1
 * XptoTax - Class that calculates ISS Xpto
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
class XptoTax implements ITax
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
        return $number * XPTO;
    }

}
