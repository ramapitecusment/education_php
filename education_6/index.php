<?php $host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'test';

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name);

?>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
    </tr>
    <?php
    $query = "SELECT * FROM workers";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    $result = '';
    foreach ($data as $elem) {
        $result .= '<tr>';

        $result .= '<td>' . $elem['id'] . '</td>';
        $result .= '<td>' . $elem['name'] . '</td>';
        $result .= '<td>' . $elem['age'] . '</td>';
        $result .= '<td>' . $elem['salary'] . '</td>';

        $result .= '</tr>';
    }

    echo $result;
    ?>
</table>