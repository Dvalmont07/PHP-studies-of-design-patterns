<?php
/**
 * PHP version 7.1
 * GroceryStore - Observer of Price Center
 *
 * @category  Class
 * @package   Observer
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   GIT: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */
//require_once 'ITax.php';
require_once 'IObserver.php';

/**
 * GroceryStore - Observer of Price Center
 *
 * @category  Class
 * @package   Observer
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   Release: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */
class GroceryStore implements IObserver
{
    /**
     * Use updated data
     *
     * @param array $products list of products
     *
     * @return void
     */
    public function update($products)
    {
        echo "<div><h1>Grocery store: </h1>";
        foreach ($products as $value) {

            echo "<div>Product: " . $value->name . "<br/>";
            echo "Price: " . $value->price . "</div><br/>";

        }
        echo "<div>";

    }
}
