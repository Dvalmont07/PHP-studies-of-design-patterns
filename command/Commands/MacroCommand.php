<?php

/**
 * PHP version 7.2.4
 * MacroCommand - A class tha executes commands.
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

namespace Commands;

/**
 * MacroCommand - A class tha executes commands.
 *
 * @category Command
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class MacroCommand implements ICommand
{
    private $_commands = array();

    /**
     * Undocumented function.
     *
     * @param ICommand $commands x
     */
    public function __construct($commands)
    {
        $this->_commands = $commands;
    }

    /**
     * Undocumented function.
     */
    public function execute()
    {
        for ($i = 0; $i < count($this->_commands); $i++) {
            
            $this->_commands[$i]->execute();
        }
    }

    /**
     * Undocumented function.
     */
    public function undo()
    { for ($i = 0; $i < count($this->_commands); $i++) {
            
            $this->_commands[$i]->undo();
        }
    }
}
