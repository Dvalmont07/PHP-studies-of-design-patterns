<?php
/**
 * PHP version 7.1
 * Index - Root file for Observer Pattern
 *
 * @category  File
 * @package   Observer
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   GIT: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

require_once 'Config.php';
require_once 'autoload.php';

$priceCenter = new PriceCenter();

$grocery = new GroceryStore();
$supermarket = new Supermarket();
$ecommerce = new Ecommerce();

$priceCenter->subscribe($grocery);
$priceCenter->subscribe($supermarket);
$priceCenter->subscribe($ecommerce);
$priceCenter->subscribe($ecommerce);

$priceCenter->unsubscribe($grocery);
$priceCenter->unsubscribe($supermarket);

$priceCenter->subscribe($grocery);

echo "<h1>Number of subscribed Stores: {$priceCenter->countSubscribed()}</h1>";

$priceCenter->updateObservers();