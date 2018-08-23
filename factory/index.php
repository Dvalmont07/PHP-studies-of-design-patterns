<?php
/**
 * PHP version 7.2.4
 * Index - Root file for Factory Pattern.
 *
 * @category  File
 *
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @version   GIT: <git_id>
 *
 * @see      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */
require_once '../config.php';
require_once '../autoload.php';

$factoryShip = new EnemyFactory();

$enemyShip = $factoryShip->makeEnemyShip();

$enemyShip->displayEnemyShip();
$enemyShip->followHeroShip();
$enemyShip->enemyShipShoots();

?>

<br/><a href="../">Back</a>



