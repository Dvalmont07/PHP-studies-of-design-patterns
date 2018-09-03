<?php
/**
 * PHP version 7.2.4
 * HumanEnemyEnum - Lists possible reaches: if it's ground, air or both.
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

/**
 * HumanEnemyEnum - Lists all human enemies.
 *
 * @category Enum
 *
 * @author  Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @see "http://www.seoseedrank.com.br/sobre"
 */
abstract class ReachEnum
{
    public static $ground = 'ground';
    public static $air = 'air';
    public static $both = 'both';
}
