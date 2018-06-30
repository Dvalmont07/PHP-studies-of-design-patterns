<?php
/**
 * PHP version 7.1
 * ListProducts - Lists products
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

/**
 * ListProducts - Lists products
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

class ProductList
{
    /**
     * Retuns a list of products
     *
     * @return array
     */
    public function getProductList()
    {
        // This can be a database table
        $products = array(
            new Product("Coke", 5.0, 15, "Ice cold"),
            new Product("Chips", 8.0, 25, "Nice & Crisp"),
            new Product("Cheese", 20.10, 11, "Cream Taste"),
            new Product("Banana", 15.16, 31, "The yellow one"),
        );
        return $products;
    }
}
