<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sensor</title>
    <meta name="description" content="sensor">
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/main.css">
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
				<div class = "window-notifications">
					<h2>Уведомления</h2>
					<div class = "notifications-table">
						<div>KSS</div>
						<div>Описание проблемы</div>
						<div>KSS</div>
						<div>Описание проблемы</div>
						<div>KSS</div>
						<div>Описание проблемы</div>
						<div>KSS</div>
						<div>Описание проблемы</div>
					</div>
					<button class = "close">Закрыть</button>
				</div>
			</div>
			<a href="../index.php" class = "out">Выйти</a>
		</div>
	</header>
	<!-- Форма поиска !-->
	<!--<section class = "control">
		<form class = "wrap-control" action="index.php" method="POST">
			Поиск
			<label>
				KKS
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
				Диапазон измерений : <br>
				Начало диапазона:
				<input type="number" name="rangebegin" id="rangebegin"><br>
				Конец диапазона:
				<input type="number" name="rangeend" id = "rangeend"><br>
				Единица измерения:
				<input type="search" list = "unit" name="unitparameter" id="unitparameter">
				<datalist id = "unit">
					<option>Па</option>
					<option>кгс/см2</option>
					<option>?С</option>
					<option>т/ч</option>
					<option>МПа</option>
					<option>%</option>
				</datalist>	 
			</label>
			<br>
			<div class= "btn-seach"><button class="btn" type="submit" >Поиск</button></div>
		</form>
	</section>!-->
	<section class = "section-form">
		<form class="box" action="" method="post">
			<h1>Поиск</h1>
			<input type="text" name="kks" placeholder="KKS">
			<input type="text" name="type" placeholder="Тип датчика">
			<input type="text" name="parameter" placeholder="Измеряемый параметр">
			<input type="text" name="range" placeholder="Диапазон измерений">
			<input type="text" name="unitparameter" placeholder="Единица измерения">
			<input type="submit" name="" value="Найти">
		</form>
	</section>
	<!-- <p>*Для перехода в карточку датчика нажмите по ссылке KKS.</p> -->
	<!-- Подключение к базе данных !-->
	<?php require_once "../php/connection.php"; ?>
	<!-- Основной скрипт для вывода информации !-->
	<?php
		//Получим данные из формы
		$kks = $_POST['kks'];
		$type = $_POST['type'];
		$parameter = $_POST['parameter'];
		$range = $_POST['range'];
		$unitparameter = $_POST['unitparameter'];
		// Сформируем запрос
		$count = mysqli_query($connection, "SELECT * FROM `detector` WHERE `KKS` LIKE '%$kks%'  AND  `Sensor type` LIKE '%$type%' AND  `Parameter name` LIKE '%$parameter%' AND  `Unit parameter` LIKE '%$unitparameter%' ");
		// Проверим была ли найдена хоты бы одна строчка
		if ( (mysqli_num_rows($count) == 0 ) ) {
			echo '<br>Нет результатов!'; // Если ничего не было найдено , выведем нет результатов
		}
		?>
		 <!-- Создадим первую строчку таблицы !-->
		 <table class = "info">
			 <tr class = "first-str">
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
						echo  '<th>' . '<a href = "' . 'cardsensor.php?id=' . $name['id'] .  '">' . $name['KKS'] . '</a>' .'</th>';
						echo  '<th>' . $name['installation']  .'</th>';
						echo  '<th>' . $name['Parameter name']  .'</th>';
						echo  '<th>' . $name['Factory number']  .'</th>';
						echo  '<th>' . $name['Sensor type']  .'</th>';
						echo  '<th>' . '<a href = "../test.pdf">' . $name['PI scheme'] . '</a>' .'</th>';
						echo  '<th>' . '<a href = "../test.pdf">' . $name['External wiring diagram'] . '</a>' .'</th>';
						echo  '<th>' . '<a href = "../test.pdf">' . $name['layout plan'] . '</a>' .'</th>';
						echo  '<th>' . '<a href = "../test.pdf">'. $name['Installation drawing'] . '</a>' .'</th>';
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
	<script src="../js/common.js"></script>
</html>
