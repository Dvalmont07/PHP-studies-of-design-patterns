<?php
/**
 * PHP version 7.2.4
 * SimpleRemoteControl - A class tha executes commands.
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
 * SimpleRemoteControl - A class tha executes commands.
 *
 * @category Command
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class SimpleRemoteControl
{
    private $_slot;

    /**
     * Undocumented function.
     *
     * @param ICommand $command x
     */
    public function setCommand(ICommand $command)
    {
        $this->_slot = $command;
    }

    /**
     * Undocumented function.
     */
    public function buttonwasPressed()
    {
        $this->_slot->execute();
    }
}
