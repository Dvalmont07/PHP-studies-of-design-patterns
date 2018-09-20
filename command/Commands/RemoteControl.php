<?php

/**
 * PHP version 7.2.4
 * RemoteControl - A class tha executes commands.
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
 * RemoteControl - A class tha executes commands.
 *
 * @category Command
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class RemoteControl
{
    private $_slots = 7;
    private $_onComands = array();
    private $_offComands = array();
    private $_undoCommand;

    /**
     * Undocumented function.
     */
    public function __construct()
    {
        $noCommand = new NoCommand();

        for ($i = 0; $i < $this->_slots; ++$i) {
            $this->_onComands[$i] = $noCommand;
            $this->_offComands[$i] = $noCommand;
        }

        $this->_undoCommand = $noCommand;
    }

    /**
     * Undocumented function.
     *
     * @param int      $slot       x
     * @param ICommand $onCommand  x
     * @param ICommand $offCommand x
     */
    public function setCommand(Int $slot, ICommand $onCommand, ICommand $offCommand)
    {
        $this->_onComands[$slot] = $onCommand;
        $this->_offComands[$slot] = $offCommand;
    }

    /**
     * Undocumented function.
     *
     * @param int $slot x
     */
    public function lightOnButtonWasPressed(Int $slot)
    {
        $this->_onComands[$slot]->execute();

        $this->_undoCommand = $this->_onComands[$slot];
    }

    /**
     * Undocumented function.
     *
     * @param int $slot x
     */
    public function lightOffButtonWasPressed(Int $slot)
    {
        $this->_offComands[$slot]->execute();
        $this->_undoCommand = $this->_offComands[$slot];
    }

    /**
     * Undocumented function.
     *
     * @param int $slot x
     */
    public function downButtonWasPressed(Int $slot)
    {
        $this->_offComands[$slot]->execute();
    }

    /**
     * Undocumented function.
     *
     * @param int $slot x
     */
    public function upButtonWasPressed(Int $slot)
    {
        $this->_onComands[$slot]->execute();
        $this->_undoCommand = $this->_onComands[$slot];
    }

    /**
     * Undocumented function.
     */
    public function undoButtonWasPressed()
    {
        $this->_undoCommand->undo();
    }
}
