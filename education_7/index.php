<html>

<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>WORKER</title>
</head>

<body>
    <div class="container">
    <form method="POST" action="index.php">
        <div style = "display: block; padding-top: 10px;"> 
        <input type="text" name="name" class="text" placeholder="Имя">
        <input type="text" name="age" class="text" placeholder="Возраст">
        <input type="text" name="salary" class="text" placeholder="Зарплата">
        <input type="submit" name="send" class="button" value="Добавить">
        <input type="submit" name="find" class="button" value="Найти">
        <input type="submit" name="clear" class="button" value="Очистить">
        </div>
    </form>



        <?php
        $connection = mysqli_connect('localhost', 'root', '', 'WORKER');
        function table($result)
        {
            echo '<table border = "1">';
            echo "<tr><td>Рабочий</td><td>Возраст</td><td>Зарплата</td></tr>";
            while ($row = mysqlI_fetch_array($result)) {
                echo "<tr ><td style = 'padding:5px 2px;'>" . $row['WORKER_NAME'] . "</td>
                <td style = 'padding:5px 2px;'>" . $row['WORKER_AGE'] . "</td>
                <td style = 'padding:5px 2px;'>" . $row['WORKER_SALARY'] . "</td></tr>";
            }

            echo "</table>";
        }

        if (isset($_POST['clear'])) {
            $case = 'clear';
        }

        if (isset($_POST['send'])) {
            $name = mysqli_real_escape_string($connection, trim($_POST['name']));
            $age = mysqli_real_escape_string($connection, trim($_POST['age']));
            $salary = mysqli_real_escape_string($connection, trim($_POST['salary']));
            if (!empty($name) && !empty($age) && !empty($salary)) {
                $query = "INSERT INTO WORKER (WORKER_NAME, WORKER_AGE, WORKER_SALARY) VALUES ('$name', $age, $salary)";
                $result = mysqli_query($connection, $query);
                $case = 'clear';
            }
        }

        if (isset($_POST['find'])) {
            $name = mysqli_real_escape_string($connection, trim($_POST['name']));
            if (!empty($name)) {
                $case = 'find';
            }
        }

        switch ($case) {
            case 'find':
                $query = "SELECT * FROM WORKER WHERE LOWER(WORKER_NAME)  LIKE '$name%'";
                break;

            default:
                $query = "SELECT * FROM WORKER";
                break;
        }
        $result = mysqli_query($connection, $query);
        table($result);

        ?>
    </div>

</body>

</html>