<?php

$rows = 10;
$cols = 10;

echo "<H2>Таблица умножения на for</H2>";

for ($tr=1; $tr<=$rows; $tr++){
    echo 'Таблица умноженияя на ' . "$tr <br>";
    for ($td=1; $td<=$cols; $td++){
        echo "$tr" . ' * ' . "$td = ". $tr*$td. "<br>";
    }
}

echo "<H2>Таблица умножения на while</H2>";
$tr = 0;
$td = 0;
while (++$tr <= $rows){
    echo 'Таблица умноженияя на ' . "$tr <br>";
    while (++$td <= $cols){
        echo "$tr" . ' * ' . "$td = ". $tr*$td. "<br>";
    }
    $td = 0;
}

echo '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){
        echo '<td>'. "$tr" . ' * ' . "$td = ". $tr*$td .'</td>';
    }
    echo '</tr>';
}

echo '</table>';

?>