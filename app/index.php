<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sensor</title>
    <meta name="description" content="sensor">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<!-- Меню !-->
    <header class = "header" id = "header">
		<div class="wrap-header">
			<nav class = "navigation">
				<ul>
					<li><a href="index.php" target="_blank" rel="noopener noreferrer">Поиск</a></li>
					<li><a href="#" target="_blank" rel="noopener noreferrer">Добавить датчик</a></li>
					<li><a href="#" target="_blank" rel="noopener noreferrer">Месячный план обслуживания</a></li>
					<li><a href="#" target="_blank" rel="noopener noreferrer">Годовой план поверки и калибровки</a></li>
				</ul>
			</nav>
			<div class = "notifications">
				<div class = "icon-notifications" tabindex = "0"></div>
				<div class = "window-notifications"></div>
			</div>
		</div>
	</header>
	<!-- Форма поиска !-->
	
	<!-- Подключение к базе данных !-->
	<?php require_once "php/connection.php"; ?>
	<!-- Основной скрипт для вывода информации !-->
	<?php
		$count = mysqli_query($connection, "SELECT * FROM `detector` ");
		while ($name =  mysqli_fetch_assoc($count)) {
            $name['Full parameter name'] = iconv("Windows-1251","UTF-8",$name['Full parameter name']);
            //$name1['autor'] = iconv("Windows-1251","UTF-8",$name1['autor']);
			echo '<br>';
			echo  $name['id']  . ' -- id' .'<br>';
			echo  $name['KKS']  . '-- KSS' .'<br>';
			echo  $name['installation']  . ' -- Оборудование' . '<br>';
			echo  $name['Parameter name']  . ' -- Полное имя параметра' . '<br>';
			echo  $name['Factory number']  . ' -- Заводской номер' .'<br>';
			echo  $name['Sensor type']  . ' -- Тип датчика' . '<br>';
			echo  $name['PI scheme']  . '-- PI-схема' .'<br>';
			echo  $name['External wiring diagram']  . ' -- Схема подключения внешних проводок' . '<br>';
			echo  $name['layout plan']  . '-- План расположения' . '<br>';
			echo  $name['Installation drawing'] . '-- Установочный чертеж' . '<br>';
			echo  $name['Commissioning date']  . ' -- Дата ввода в эксплуатацию' . '<br>';
			echo  $name['Previous calibration']  . ' - -Предыдущая поверка' . '<br>';
			echo  $name['Verification Protocol Number']  . '-- Номер протокола поверки'. '<br>';
			echo  $name['Next verification']  . '-- Следующая поверка'. '<br>';
			echo  $name['Unit parameter']  . '-- Ед парам' . '<br>';
			echo  $name['Beginning of range']  . '-- Нач диап' . '<br>';
			echo  $name['End of range']  . '-- Кон диап' . '<br>';
			echo  $name['Intertesting interval']  . '-- Межповерочный интервал' . '<br>';
			echo  $name['Measured parameter']  . ' -- Измеряемый параметр' . '<br>';
			echo  $name['Date of the last calibration check']  . '-- Дата последней поверки, калибровки	' . '<br>';
			echo  $name['Verification/Calibration']  . '-- Поверка/Калибровка' . '<br>';
			echo  $name['Measuring range']  . '-- Диапазон измерений' . '<br>';
			echo '<br>';
		}
	?>
	<!-- Закроем подключение к базе данных !-->
	<?php mysqli_close($connection);  ?>
</body>
    <!--script !-->
    <script src="libs/jquery/jquery-1.11.2.min.js"></script>
</html>
