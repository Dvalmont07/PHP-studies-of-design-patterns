<?php
/**
 * PHP version 7.1
 * Ecommerce - Observer of Price Center
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

require_once 'IObserver.php';

/**
 * Ecommerce - Observer of Price Center
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
class Ecommerce extends Store implements IObserver
{

    /**
     * Set the class nmame
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        $this->className = "E-commerce";
    }

    /**
     * Use updated data
     *
     * @param array $products list of products
     *
     * @return void
     */
    public function update($products)
    {
        echo "<div><h2>New {$this->className}: </h2>";
        foreach ($products as $value) {
            echo "<div>Product: " . $value->name . "<br/>";
            echo "Quantity: " . $value->descrption . "</div><br/>";
        }
        echo "</div>";

    }
}
