<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta name="viewport" content="width=h1, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
<?php 

$dirScan = scandir(__DIR__);

$dirList = array();

foreach ($dirScan as $value) {
    
    if(is_dir($value) && strpos($value,".")===false){
        array_push($dirList,$value);
    }
}

// var_dump($dirList);
?>
<body>
<h1>Lista de padrões</h1>
<!-- @todo create a directory's list to write dinamicaly -->

<?php
foreach ($dirList as $value) {
    
    echo "<h2><a href='{$value}/'>$value</a></h2>";
    
}

?>

</body>

</html>