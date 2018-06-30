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

    private $_dirName = "temp";
    private $_fileName = "count.json";
    private $_dirTools = "";
    private $_fileTools = "";

    /**
     * Instantiate classes
     */
    public function __construct()
    {
        $this->_dirTools = new DirectoryTools($this->_dirName);
        $this->_fileTools = new FileTools($this->_dirName, $this->_fileName);
    }

    /**
     * Grava mensagem de erro ocorrido
     *
     * @param array $quntity The number of itens
     *
     * @return void
     */
    private function _writeQuantity($quntity)
    {
        // Create a directory even if not exists
        $this->_dirTools->createDir($this->_dirName);
        $file = fopen($this->_dirName . "/" . $this->_fileName, 'w');
        $message = array('quantity' => $quntity);
        $this->_fileTools->writeJsonFile($file, $message);
    }

    /**
     * Updates observers from a data base reading
     *
     * @return void
     */
    public function updateObservers()
    {
        $getProductList = new ListProducts();
        $getStores = new ListStores();

        // Read the Json file
        $read = $this->_fileTools->readJsonToArray();
        $quantity = $read != null ? $read : json_decode(json_encode(array("quantity" => 0)));

        // Count the number of itens of the array of classes
        $countProducts = count($getProductList->getListProducts());

        echo "Quantity of Products: " . $countProducts . "<br/>";
        try {

            // If quantity changes
            if ($countProducts != $quantity->quantity) {

                foreach ($getStores->getListStores() as $store) {

                    $store->update($getProductList->getListProducts());
                }

                $this->_writeQuantity($countProducts);
            } else {

                echo "Nothing changed";
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
