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
use Factories\HumanEnemyFactory;
use Enums\ElementalEnum;
use Enums\HumanEnemyEnum;

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

$environment = ElementalEnum::$fire;
$enemy = HumanEnemyFactory::createFactory(HumanEnemyEnum::$bob);

$enemy->setEnvironment($environment);
$enemy->executeMoves();

$enemy = HumanEnemyFactory::createFactory(HumanEnemyEnum::$leno);
$enemy->setEnvironment($environment);
$enemy->executeMoves();

?>

<br/><a href="../">Back</a>
