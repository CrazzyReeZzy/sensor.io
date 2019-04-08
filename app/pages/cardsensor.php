<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Карточка датчика</title>
    <meta name="description" content="cardsensor">
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/cardsensor.css">
</head>
<body>
    <!-- Меню !-->
    <header class = "header" id = "header">
		<div class="wrap-header">
			<nav class = "navigation">
				<ul>
					<li><a href="../index.php" target="_blank" rel="noopener noreferrer">Поиск</a></li>
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
	<!-- Подключимся к базе данных !-->
	<?php 
		require_once "../php/connection.php";
		$id = $_GET['id'];
		// Сформируем запрос
		$count = mysqli_query($connection, "SELECT * FROM `detector` WHERE `id` = '$id' ");
		while ($name =  mysqli_fetch_assoc($count)) {
		?>		
    <section class = "info_sensor">
		<div class="wrap-info_sensor">
			<h1>Информация о датчике</h1>
			<div class="table">
				<div>KKS</div>
				<div> <?php echo $name['KKS'] ?> </div>
				<div>Оборудование</div>
				<div><?php echo $name['installation'] ?></div>
				<div>Полное имя параметра</div>
				<div><?php echo $name['Parameter name'] ?></div>
				<div>Заводской номер</div>
				<div><?php echo $name['Factory number'] ?></div>
				<div>Тип датчика</div>
				<div><?php echo $name['Sensor type'] ?></div>
				<div>PI-схема</div>
				<div><?php echo '<a href = "../test.pdf">' . $name['PI scheme'] . '</a>' ?></div>
				<div>Схема подключения внешних проводок</div>
				<div><?php echo '<a href = "../test.pdf">' . $name['External wiring diagram'] . '</a>' ?></div>
				<div>План расположения</div>
				<div><?php echo '<a href = "../test.pdf">' . $name['layout plan'] . '</a>' ?></div>
				<div>Установочный чертеж</div>
				<div><?php echo '<a href = "../test.pdf">' . $name['Installation drawing'] . '</a>' ?></div>
				<div>Дата ввода в эксплуатацию</div>
				<div><?php echo $name['Commissioning date'] ?></div>
				<div>Предыдущая поверка</div>
				<div><?php echo $name['Previous calibration'] ?></div>
				<div>Номер протокола поверки</div>
				<div><?php echo $name['Verification Protocol Number'] ?></div>
				<div>Следующая поверка</div>
				<div><?php echo $name['Next verification'] ?></div>
				<div>Ед парам</div>
				<div><?php echo $name['Unit parameter'] ?></div>
				<div>Нач диап</div>
				<div><?php echo $name['Beginning of range'] ?></div>
				<div>Кон диап</div>
				<div><?php echo $name['End of range'] ?></div>
				<div>Межповерочный интервал</div>
				<div><?php echo $name['Intertesting interval'] ?></div>
				<div>Измеряемый параметр</div>
				<div><?php echo $name['Measured parameter'] ?></div>
				<div>Дата последней поверки, калибровки</div>
				<div><?php echo $name['Date of the last calibration check'] ?></div>
				<div>Поверка/Калибровка</div>
				<div><?php echo $name['Verification/Calibration'] ?></div>
				<div>Диапазон измерений</div>
				<div><?php echo $name['Measuring range'] ?></div>
				<div>Паспорт датчика</div>
				<div><?php echo '<a href = "password.php?id=' . $name['id'] . '">Открыть паспорт</a>' ?></div>
			</div>
		</div>
	</section>
	<?php
		}
	?>
</body>
</html>