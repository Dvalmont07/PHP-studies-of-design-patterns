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

    private static $_dirName = "temp";
    private static $_fileName = "count.json";

    /**
     * Create Directory
     *
     * @return void
     */
    protected function createDir()
    {
        // Verify if directory exists
        if (!is_dir(self::$_dirName)) {
            mkdir(self::$_dirName, 0774, true);
        }
    }

    /**
     * Grava mensagem de erro ocorrido
     *
     * @param array $quntity The number of itens
     *
     * @return void
     */
    public function writeQuantity($quntity)
    {
        // Create a directory even if not exists
        self::createDir(self::$_dirName);
        $file = fopen(self::$_dirName . "/" . self::$_fileName, 'w');
        $message = array('quantity' => $quntity);
        self::writeJsonFile($file, $message);
    }

    /**
     * Reads a Json file and decodes into a array
     *
     * @return void
     */
    public function jsonToArray()
    {
        $fileString = self::$_dirName . "/" . self::$_fileName;
        if (file_exists($fileString)) {
            $file = fopen($fileString, 'r');
            $result = json_decode(fread($file, 1024));
        } else {
            $result = json_encode(array("quantity" => 0));
        }

        var_dump($result);
        return $result;
    }

    /**
     * Grava string no arquivo previamente aberto
     *
     * @param file   $file   [arquivo aberto com atriburo 'a']
     * @param string $string x
     *
     * @return void
     */
    protected function writeJsonFile($file, $string)
    {
        fwrite($file, json_encode($string));
        fclose($file);
    }

    /**
     * Updates observers
     *
     * @return void
     */
    public function updateObservers()
    {
        $getProductList = new ListProducts();
        $getStores = new ListStores();

        // Read the Json file
        $quantity = self::jsonToArray();

        // Count the number of itens of the array of classes
        $countProducts = count($getProductList->getListProducts());

        echo "Quantity of Products: " . $countProducts . "<br/>";
        try {

            // If quantity changes
            if ($countProducts != $quantity->quantity) {

                foreach ($getStores->getListStores() as $store) {

                    $store->update($getProductList->getListProducts());
                }

                self::writeQuantity($countProducts);
            } else {

                echo "Nada atualizado";
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
