<?php
/**
 * PHP version 7.1
 * FileTools - Set of tools to handle files
 *
 * @category  Class
 * @package   Tools
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   GIT: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

/**
 * FileTools - Set of tools to handle files
 *
 * @category  Class
 * @package   Tools
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   Release: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */
class FileTools
{
    private $_fileName;
    private $_dirName;

    /**
     * Populate the privet variables
     *
     * @param string $dirName  location
     * @param string $fileName string
     */
    public function __construct($dirName, $fileName)
    {
        $this->_dirName = $dirName;
        $this->_fileName = $fileName;
    }

    /**
     * Reads a Json file and decodes into a array
     *
     * @return void
     */
    public function readJsonToArray()
    {
        $fileString = $this->_dirName . "/" . $this->_fileName;
        if (file_exists($fileString)) {
            $file = fopen($fileString, 'r');
            $result = json_decode(fread($file, 1024));
        } else {
            $result = null;
        }
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
    public function writeJsonFile($file, $string)
    {
        fwrite($file, json_encode($string));
        fclose($file);
    }

}
