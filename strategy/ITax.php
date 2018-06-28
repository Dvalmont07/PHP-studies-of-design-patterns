<?php
/**
 * PHP version 7.1
 * Itax - Interface that serves the tax type classes
 *
 * @category  Inteface
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
 * Itax - Interface that serves the tax type classes
 *
 * @category  Inteface
 * @package   Strategy
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   Release: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */
interface Itax
{

    /**
     * Calculate taxes
     *
     * @param double $number value to calculate
     * 
     * @return void
     */
    public function calculate($number);
}
