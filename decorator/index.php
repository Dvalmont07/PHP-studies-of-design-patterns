<?php
/**
 * PHP version 7.2.4
 * Index - Root file for Decorator Pattern
 * 
 * @category  File
 * @package   Decorator
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   GIT: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

require_once '../config.php';
require_once '../autoload.php';

$pizza = new ConcretePizza();

$moz = new MozzarelaDecorator($pizza);
$moz = new MozzarelaDecorator($moz);
$moz = new TomatoDecorator($moz);
$moz = new TomatoDecorator($moz);
$moz = new SouceDecorator($moz);


echo "<h1>Showing Pizzas</h1>";

echo "<h2>Get Description:</h2> {$moz->getDescription()} <br/>";
echo "Get Cost: {$moz->getCost()}  <br/>";


