<?php

/**
 * PHP version 7.2.4
 * LightOffCommand - A class tha executes commands.
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

namespace Commands\Light;

use Devices\Light;
use Commands\ICommand;

/**
 * LightOffCommand - A class tha executes commands.
 *
 * @category Command
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class LightOffCommand implements ICommand
{
    private $_command;

    /**
     * Undocumented function.
     */
    public function __construct()
    {
        $this->_command = new Light();
    }

    /**
     * Undocumented function.
     */
    public function execute()
    {
        $this->_command->off();
    }

    public function undo() {
        $this->_command->on();
    }

}
