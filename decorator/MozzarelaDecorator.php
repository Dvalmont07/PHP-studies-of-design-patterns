<?php
/**
 * PHP version 7.2.4
 * MozzarelaDecorator - Class that uses decorator
 * 
 * @category  Class
 * @package   Decorator
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   GIT: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

/**
 * MozzarelaDecorator - Class that uses decorator
 * 
 * @category  Class
 * @package   Decorator
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

class MozzarelaDecorator extends ToppingsDecorator
{
    
    private $_pizza;
    
    /**
     * Construct
     * 
     * @param class $pizza 
     * 
     * @return float 
     */
    public function __construct(IPizza $pizza)
    {        
        $this->_pizza = $pizza;        
    }   

    /**
     * Get Description
     * 
     * @return float 
     */
    public function getDescription()
    {
        return $this->_pizza->getDescription() . " Adding Moz Topping <br/>";
    }
    
    /**
     * Get Cost
     * 
     * @return float 
     */
    public function getCost()
    {
        return  $this->_pizza->getCost() + .50;
    }
    
}