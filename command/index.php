<?php

/**
 * PHP version 7.2.4
 * Index - Root file for Abstract Factory Pattern.
 *
 * @category Abstract_Factory
 *
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @version GIT: <git_id>
 *
 * @see   "http://www.seoseedrank.com.br/sobre"
 * @since 1.0.0
 */
use Commands\SimpleRemoteControl;
use Commands\LightOnCommand;

/**
 * PHP version 7.2.4
 * Index - Root file for Factory Pattern.
 *
 * @category File
 *
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @version GIT: <git_id>
 *
 * @see   "http://www.seoseedrank.com.br/sobre"
 * @since 1.0.0
 */
require_once 'Config/config.php';
require_once '../autoload.php';

$remote = new SimpleRemoteControl();
$lightOn = new LightOnCommand();
$garageOpen = new Commands\GarageDoorOpenCommand();

$remote->setCommand($lightOn);
$remote->buttonwasPressed();

$remote->setCommand($garageOpen);
$remote->buttonwasPressed();
?>

<br/><a href="../">Back</a>
