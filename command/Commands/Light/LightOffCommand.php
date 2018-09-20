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

use Commands\ICommand;
use Devices\Light;

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
class LightOffCommand extends Light implements ICommand
{
    /**
     * Undocumented function.
     */
    public function execute()
    {
        $this->off();
    }

    /**
     * Undocumented function.
     */
    public function undo()
    {
        $this->on();
    }
}
