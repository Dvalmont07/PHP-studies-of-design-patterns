<?php
/**
 * PHP version 7.1
 * DirectoryTools - Set of tools to handle directories
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
 * DirectoryTools - Set of tools to handle directories
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
class DirectoryTools
{
    private $_dirName = "";

    /**
     * Sets the directory name
     *
     * @param string $dirName location
     */
    public function __construct($dirName)
    {
        $this->_dirName = $dirName;
    }

    /**
     * Create Directory
     *
     * @return void
     */
    public function createDir()
    {
        // Verify if directory exists
        if (!is_dir($this->_dirName)) {
            mkdir($this->_dirName, 0774, true);
        }
    }

}
