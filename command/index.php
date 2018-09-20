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
 use Commands\RemoteControl;
 use Commands\Light\LightOnCommand;
 use Commands\Light\LightOffCommand;
 use Commands\Garage\GarageDoorOpenCommand;
 use Commands\Garage\GarageDoorCloseCommand;
 use Commands\Garage\GarageLightsOnCommand;
 use Commands\Garage\GarageLightsOffCommand;
 use Commands\MacroCommand;

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

/**
 * @todo Implemet Factory here
 */
$remote = new SimpleRemoteControl();
$lightOn = new LightOnCommand();
$LighhtOff = new LightOffCommand();
$garageOpen = new GarageDoorOpenCommand();
$garageClose = new GarageDoorCloseCommand();
$garageLightsOn = new GarageLightsOnCommand();
$garageLightsOff = new GarageLightsOffCommand();

echo '<h1>Simple Remote control</h1>';
$remote->setCommand($lightOn);
$remote->buttonWasPressed();
$remote->setCommand($garageOpen);
$remote->buttonWasPressed();

echo '<h1>Final Remote control</h1>';

//################

//Now using the slots to alocate commands
$remoteControl = new RemoteControl();

//Now using the slots to alocate commands
$remoteControl->setCommand(0, $lightOn, $LighhtOff);
$remoteControl->setCommand(1, $garageOpen, $garageClose);
$remoteControl->setCommand(2, $garageLightsOn, $garageLightsOff);
$remoteControl->lightOnButtonWasPressed(0);
$remoteControl->undoButtonWasPressed();
$remoteControl->lightOffButtonWasPressed(0);
$remoteControl->undoButtonWasPressed();
$remoteControl->upButtonWasPressed(1);
$remoteControl->undoButtonWasPressed();
$remoteControl->downButtonWasPressed(1);
$remoteControl->lightOnButtonWasPressed(2);
$remoteControl->lightOffButtonWasPressed(2);
$remoteControl->undoButtonWasPressed();
$remoteControl->undoButtonWasPressed();

echo '<h1>Macro Command</h1>';

$macro = array($lightOn, $garageOpen, $garageLightsOff);
$macroCommand = new MacroCommand($macro);

$macroCommand->execute();
$macroCommand->undo();

?>

<br/><a href="../">Back</a>
