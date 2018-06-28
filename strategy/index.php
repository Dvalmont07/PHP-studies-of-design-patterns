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

$value = 400.05;

$icms = new TaxCalculator();
$iss = new TaxCalculator();
$xpto = new TaxCalculator();

echo "That's ICMS tax: <strong>R$ " . $icms->calculate($value, new IcmsTax) . "</strong><br/>";
echo "That's ISS tax: <strong>R$ " . $iss->calculate($value, new IssTax) . "</strong><br/>";
echo "That's XPTO tax: <strong>R$ " . $xpto->calculate($value, new XptoTax) . "</strong><br/>";
