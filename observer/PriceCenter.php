<?php
/**
 * PHP version 7.1
 * PriceCenter - Observable Class
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
 * PriceCenter - Observable Class
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
class PriceCenter
{
    /**
     * Todo list
     *
     * @todo Update when inserts a subscriber
     */

    private $_dirName = "temp";
    private $_fileName = "count.json";
    private $_dirTools = "";
    private $_fileTools = "";
    private $_stores = array();

    /**
     * Instantiate classes
     */
    public function __construct()
    {
        $this->_dirTools = new DirectoryTools($this->_dirName);
        $this->_fileTools = new FileTools($this->_dirName, $this->_fileName);
    }

    /**
     * Subscribe store to the listners list
     *
     * @param class $class a product class to be pushed/add into the array
     *
     * @return void
     */
    public function subscribe($class)
    {

        try {
            $key = array_search($class, $this->_stores);
            if ($key === false) {
                array_push($this->_stores, $class);
                echo "The observer {$class->className} was successfully subscribed <br/>";
            } else {
                echo "The observer {$class->className} is already subscribed <br/>";
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

    }

    /**
     * Unubscribe store to the listners list
     *
     * @param class $class a product class to be pulled/removed from the array
     *
     * @return void
     */
    public function unsubscribe($class)
    {

        try {
            $key = array_search($class, $this->_stores);
            if ($key !== false) {
                unset($this->_stores[$key]);
                echo "The observer {$class->className} was unsubscribed <br/>";
            } else {
                echo "The observer {$class->className} can't be unsubscribed <br/>";
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

    }

    /**
     * Grava mensagem de erro ocorrido
     *
     * @param array $productsQuantity    The number of products
     * @param array $subscribersQuantity The number of stores
     *
     * @return void
     */
    private function _writeQuantity($productsQuantity, $subscribersQuantity)
    {
        // Create a directory even if not exists
        $this->_dirTools->createDir($this->_dirName);
        $file = fopen($this->_dirName . "/" . $this->_fileName, 'w');

        $message = array(
            'productsQuantity' => $productsQuantity,
            'subscribersQuantity' => $subscribersQuantity,
        );
        $this->_fileTools->writeJsonFile($file, $message);
    }

    /**
     * Updates observers from a data base reading
     *
     * @return void
     */
    public function updateObservers()
    {
        $productList = new ProductList();
        $getProductList = $productList->getProductList();
        $countSubscribed = $this->countSubscribed();

        // Read the Json file
        $read = $this->_fileTools->readJsonToArray();
        $quantity = $read != null ? $read : json_decode(json_encode(array('productsQuantity' => 0, 'subscribersQuantity' => 0)));

        // Count the number of itens of the array of classes
        $countProducts = count($getProductList);

        echo "<h1>Quantity of Products: " . $countProducts . "</h1>";
        try {

            // If quantity changes
            if ($countProducts != $quantity->productsQuantity || $countSubscribed != $quantity->subscribersQuantity) {

                foreach ($this->_stores as $store) {

                    $store->update($getProductList);
                }

                $this->_writeQuantity($countProducts, $countSubscribed);
            } else {

                echo "Nothing changed";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Returns the number of subscribed stores
     *
     * @return int
     */
    public function countSubscribed()
    {
        return count($this->_stores);
    }
}
