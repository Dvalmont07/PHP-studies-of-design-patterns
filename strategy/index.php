<?php
/**
 * PHP version 7.1
 * Index - Root file
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

require_once 'Config.php';
require_once 'autoload.php';


$icms = new TaxCalculator();
$iss = new TaxCalculator();

echo $icms->calculate(500, new IcmsTax) . "<br/>";
echo $iss->calculate(500, new IssTax) . "<br/>";
