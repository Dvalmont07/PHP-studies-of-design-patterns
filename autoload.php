<?php
/**
 * PHP version 7.1
 * __autoload - loads class includes without the need of write it down on every file
 *
 * @category  File
 * @package   Strategy
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   GIT: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

/**
 * __autoload - loads class includes without the need of write it down on every file
 *
 * @param string $class the class that will be loaded
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @version Release: <git_id>
 * @since   1.0.0
 * @return  void
 */
function myAautoload($class)
{
    $class = $class . ".php";

    if (!file_exists($class)) {

        throw new Exception("Filepath '{$class}' not found ");
    }
    include_once "{$class}";
}

spl_autoload_register("myAautoload");
