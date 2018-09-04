<?php

/**
 * PHP version 7.2.4
 * LightOnCommand - A class tha executes commands.
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

use Devices\Light;

/**
 * Light - The device class.
 *
 * @category Command
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
class LightOnCommand implements ICommand {

    private $_light;

    /**
     * Undocumented function.
     *
     * @param Light $class x
     */
    public function __construct() {
        $this->_light = new Light();
    }

    /**
     * Undocumented function.
     */
    public function execute() {
        $this->_light->on();
    }

}
