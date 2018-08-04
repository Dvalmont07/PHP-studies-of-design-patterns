<?php
/**
 * PHP version 7.2.4
 * concretePizza - A concrete class of IPizza
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

 class concretePizza implements IPizza{

  
    public function getDescription(){
        return "This is a base pizza <br/>";
    }

    public function getCost(){
        return 10.00;
    }

 }