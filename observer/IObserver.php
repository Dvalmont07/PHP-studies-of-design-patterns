<?php
/**
 * PHP version 7.1
 * Ibserver - Interface that serves the observers type classes
 *
 * @category  Inteface
 * @package   Observer
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   GIT: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

/**
 * PHP version 7.1
 * Ibserver - Interface that serves the observers type classes
 *
 * @category  Inteface
 * @package   Observer
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   Release: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */
interface IObserver
{

    // /**
    //  * Subscribe to Price Central
    //  *
    //  * @return void
    //  */
    // public function subscribe();
    // /**
    //  * Unsubscribe from Price Central
    //  *
    //  * @return void
    //  */
    // public function unsubscribe();

    /**
     * Use updated data
     *
     * @param array $products list of products
     * 
     * @return void
     */
    public function update($products);
}
