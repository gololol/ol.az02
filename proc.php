<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ol
 * Date: 06.03.15
 * Time: 10:07
 * To change this template use File | Settings | File Templates.
 */
// Создание коротких имён
$vSome  =   $_POST['vSome'];
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="test/html; charset=windows-1251" />
    <title>proc</title>
</head>
<body>
<h2>Результат оброботки переменных</h2>
<?php
    echo '$vSome: '.$vSome.' тип: '.gettype($vSome)."<br />";
    echo '<br />';
    echo 'Установить переменной тип float'.'<br />';
    settype($vSome, 'float');
    echo 'Проверка типа'.'<br />';
    echo '$vSome: '.$vSome.' тип: '.gettype($vSome)."<br /><br />";
    $a = 1;
    echo '$a: '.$a.' type: '.gettype($a).' Переменная $a имеет тип integer, т.к. она создана так: $a = 1; <br />';
    $a = $vSome;
    echo '$a: '.$a.' type: '.gettype($a).'<br />';    echo 'После $a = $vSome; $a уже имеет тип переменной $vSome'.'<br />';
?>
</body>
</html>