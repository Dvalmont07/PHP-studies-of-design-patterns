<?php
/**
 * PHP version 7.2.4
 * Itoppings - A interface for type of toppings
 * 
 * @category  Abstract
 * @package   Decorator
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   GIT: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

 abstract class Toppings implements IPizza{

    public abstract function getDescription();
    public abstract function getCost();
}