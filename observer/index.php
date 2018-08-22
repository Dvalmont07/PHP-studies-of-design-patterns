<?php
/**
 * PHP version 7.1
 * Index - Root file for Observer Pattern
 * 
 * @category  File
 * @package   Observer
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   GIT: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */

require_once 'Config.php';
require_once '../autoload.php';

$priceCenter = new PriceCenter();

$priceCenter->updateObservers();

?>
<br/><a href="../">Back</a>


