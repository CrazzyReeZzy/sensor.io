<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Годовой план поверки и калибровки</title>
    <meta name="description" content="calibrationplan">
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/calibrationplan.css">
</head>
<body>
    <!-- Меню !-->
    <header class = "header" id = "header">
		<div class="wrap-header">
			<nav class = "navigation">
			<ul class="menu">
				<li><a href="search.php">Поиск</a></li>
				<li><a href="addsensor.php">Добавить датчик</a></li>
				<li><a href="serviceplan.php">Месячный план обслуживания</a></li>
				<li><a href="calibrationplan.php">Годовой план поверки и калибровки</a></li>
  			</ul>
			</nav>
			<div class = "notifications">
				<div class = "icon-notifications" tabindex = "0"></div>
				<div class = "window-notifications"></div>
			</div>
		</div>
    </header>
    <!-- БД !-->
    <?php require_once "../php/connection.php"; ?>
    <?php $count = mysqli_query($connection, "SELECT * FROM `detector` ");?>
    <!-- Таблица !-->
    <table class = "info">
        <tr class = "first-str">
				<th>KKS</th>
                 <th>Полное имя параметра</th>
                 <th>Заводской номер</th>
                 <th>Тип датчика</th>
                 <th>Диапазон измерений</th>
                 <!-- <th>Класс точности</th> -->
				 <th>Межповерочный интервал</th>
				 <th>Поверка/Калибровка</th>
                 <th>Предыдущая поверка/калибровка</th>
				 <th>Следующая  поверка/калибровка</th>
        </tr>
        <?php
			while ($name =  mysqli_fetch_assoc($count)) {
			echo  '<tr>';
			echo  '<th>' . '<a href = "' . 'cardsensor.php?id=' . $name['id'] .  '">' . $name['KKS'] . '</a>' .'</th>';
			echo  '<th>' . $name['Parameter name']  .'</th>';
			echo  '<th>' . $name['Factory number']  .'</th>';
            echo  '<th>' . $name['Sensor type']  .'</th>';
            echo  '<th>' . $name['Measuring range']  .'</th>';
            echo  '<th>' . $name['Intertesting interval']  .'</th>';
            echo  '<th>' . $name['Verification/Calibration']  .'</th>';
            echo  '<th>' . $name['Previous calibration']  .'</th>';
            
            trim($name['Verification/Calibration']);
            if ($name['Verification/Calibration'] == 'К' || $name['Verification/Calibration'] == 'Подлежит'){
                if ( strlen($name['Previous calibration']) > 0 ){
                    trim($name['Previous calibration']);
                    $year = substr($name['Previous calibration'],strlen($name['Previous calibration'])-1);
                    $new_year = $year + $name['Intertesting interval'];
                    echo  '<th>' . 'Через ' . $new_year  . ' лет' .'</th>';
                }
            }

			//echo  '<th>' . $name['Next verification']  .'</th>';
			echo '</tr>';
			}
		?>
    </table>
</body>
</html>

<?php
     if ( isset($name['Previous calibration']) ){
        echo "Значение есть";
     } 
?>