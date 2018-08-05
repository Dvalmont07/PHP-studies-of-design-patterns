<?php
/**
 * PHP version 7.2.4
 * IPizza - Interface class
 * 
 * @category  Interface
 * @package   Decorator
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

/**
 * IPizza - Interface class
 * 
 * @category  Interface
 * @package   Decorator
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

interface IPizza
{
    /**
     * Get description
     * 
     * @return string 
     */
    public function getDescription();
  
    /**
     * Get Cost
     * 
     * @return float 
     */
    public function getCost();
}