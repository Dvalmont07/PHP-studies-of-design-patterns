<?php
/**
 * PHP version 7.2.4
 * Index - Root file for Decorator Pattern
 * 
 * @category  File
 * @package   Decorator
 * @author    Danilo Lobo Matos <danilo.dejesusmatos@gmail.com>
 * @copyright 2018 Danilo Lobo Matos / Dvalmont07
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   GIT: <git_id>
 * @link      "http://www.seoseedrank.com.br/sobre"
 * @since     1.0.0
 */
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta name="viewport" content="width=h1, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<?php 

/**
 * Reads de directory
 */
$dirScan = scandir(__DIR__);

?>

<body>
	<h1>Patterns List</h1>
	
	<?php
foreach ($dirScan as $value) {
	if (is_dir($value) && strpos($value, ".") === false) {
		echo "<h2><a href='{$value}/'>$value</a></h2>";
	}

}
?>
</body>
</html>