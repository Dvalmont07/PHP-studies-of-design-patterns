<?php
/**
* PHP version 7.2.4
* TomatoTopping - A topping type tomato
* 
* @category  class
* @package   Decorator
* @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
* @copyright 2018 Danilo Lobo Matos / Dvalmont07
* @license   http://opensource.org/licenses/gpl-license.php GNU Public License
* @version   GIT: <git_id>
* @link      "http://www.seoseedrank.com.br/sobre"
* @since     1.0.0
*/

class TomatoTopping extends Toppings{
    
    private $_pizza;
    
    public function __construct(IPizza $pizza){
        
        $this->_pizza = $pizza;
        
    }   
    public function getDescription(){
        return $this->_pizza->getDescription() . " Adding tomato Topping <br/>";
    }
    
    public function getCost(){
        
      return  $this->_pizza->getCost() + 2;
    }
    
}