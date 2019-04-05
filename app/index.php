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
	<section class = "control">
		<form class = "wrap-control" action="index.php" method="POST">
			<label>
				KKS<br>
				<input type="text" name="kks" id="kss">
			</label>
			<br>
			<label>
				Тип датчика<br>
				<input type="text" name="type" id="type">
			</label>
			<br>
			<label>
				Измеряемый параметр<br>
				<input type="text" name="parameter" id="parameter">
			</label>
			<br>
			<label>
				Диапазон измерений<br>
				<input type="text" name="range" id="range">
			</label>
			<br>
			<div class= "btn-seach"><button class="btn" type="submit" >Поиск</button></div>
		</form>
	</section>
	<!-- Подключение к базе данных !-->
	<?php require_once "php/connection.php"; ?>
	<!-- Основной скрипт для вывода информации !-->
	<?php
		//Получим данные из формы
		$kks = $_POST['kks'];
		$type = $_POST['type'];
		$parameter = $_POST['parameter'];
		$range = $_POST['range'];
		// Сформируем запрос
		$count = mysqli_query($connection, "SELECT * FROM `detector` WHERE `KKS` LIKE '%$kks%'  AND  `Sensor type` LIKE '%$type%' AND  `Parameter name` LIKE '%$parameter%' ");
		// Проверим была ли найдена хоты бы одна строчка
		if ( (mysqli_num_rows($count) == 0 ) ) {
			echo '<br>Нет результатов!'; // Если ничего не было найдено , выведем нет результатов
		}
		?>
		 <!-- Создадим первую строчку таблицы !-->
		 <table class = "info">
			 <tr>
				 <th>KKS</th>
				 <th>Оборудование</th>
				 <th>Полное имя параметра</th>
				 <th>Заводской номер</th>
				 <th>Тип датчика</th>
				 <th>PI-схема</th>
				 <th>Схема подключения внешних проводок</th>
				 <th>План расположения</th>
				 <th>Установочный чертеж</th>
				 <th>Дата ввода в эксплуатацию</th>
				 <th>Предыдущая поверка</th>
				 <th>Номер протокола поверки</th>
				 <th>Следующая поверка</th>
				 <th>Ед парам</th>
				 <th>Нач диап</th>
				 <th>Кон диап</th>
				 <th>Межповерочный интервал</th>
				 <th>Измеряемый параметр</th>
				 <th>Дата последней поверки, калибровки</th>
				 <th>Поверка/Калибровка</th>
				 <th>Диапазон измерений</th>
			 </tr>
				<?php
					while ($name =  mysqli_fetch_assoc($count)) {
						echo  '<tr>';
						echo  '<th>' . $name['KKS'] .'</th>';
						echo  '<th>' . $name['installation']  .'</th>';
						echo  '<th>' . $name['Parameter name']  .'</th>';
						echo  '<th>' . $name['Factory number']  .'</th>';
						echo  '<th>' . $name['Sensor type']  .'</th>';
						echo  '<th>' . $name['PI scheme']  .'</th>';
						echo  '<th>' . $name['External wiring diagram']  .'</th>';
						echo  '<th>' . $name['layout plan']  .'</th>';
						echo  '<th>' . $name['Installation drawing'] .'</th>';
						echo  '<th>' . $name['Commissioning date']  .'</th>';
						echo  '<th>' . $name['Previous calibration']  .'</th>';
						echo  '<th>' . $name['Verification Protocol Number']  .'</th>';
						echo  '<th>' . $name['Next verification']  .'</th>';
						echo  '<th>' . $name['Unit parameter']  .'</th>';
						echo  '<th>' . $name['Beginning of range']  .'</th>';
						echo  '<th>' . $name['End of range']  .'</th>';
						echo  '<th>' . $name['Intertesting interval']  .'</th>';
						echo  '<th>' . $name['Measured parameter']  .'</th>';
						echo  '<th>' . $name['Date of the last calibration check']  .'</th>';
						echo  '<th>' . $name['Verification/Calibration']  .'</th>';
						echo  '<th>' . $name['Measuring range']  .'</th>';
						echo '</tr>';
					}
				 ?>
		 </table>
	
	<!-- Закроем подключение к базе данных !-->
	<?php mysqli_close($connection);  ?>
</body>
    <!--script !-->
    <script src="libs/jquery/jquery-1.11.2.min.js"></script>
</html>

<?php /*
$count = mysqli_query($connection, "SELECT * FROM `detector` ");
		while ($name =  mysqli_fetch_assoc($count)) {
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
*/ ?>