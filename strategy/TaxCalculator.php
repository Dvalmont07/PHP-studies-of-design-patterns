<?php
/**
 * PHP version 7.1
 * TaxCalculator - Class that calculates taxes
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
 * TaxCalculator - Class that calculates taxes
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
class TaxCalculator
{
    /**
     * Receives number and class and delegates
     *
     * @param double $number value to be calculated
     * @param class  $class  class to be used
     *
     * @return void
     */
    public function calculate($number, $class)
    {
        // Transforms the number to show only 2 decimal 
        return number_format((float) $class->calculate($number), 2, '.', '');
    }

}
