<?php
/**
 * PHP version 7.2.4
 * GarageLightsOnCommand - A class tha executes commands.
 *
 * @category Command
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

namespace Commands\Garage;

use Commands\ICommand;
use Devices\GarageDoor;

/**
 * GarageLightsOnCommand - A class tha executes commands.
 *
 * @category Command
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class GarageLightsOnCommand extends GarageDoor implements ICommand
{
    /**
     * Undocumented function.
     */
    public function execute()
    {
        $this->lightsOn();
    }

    /**
     * Undocumented function.
     */
    public function undo()
    {
        $this->lightsOff();
    }
}
