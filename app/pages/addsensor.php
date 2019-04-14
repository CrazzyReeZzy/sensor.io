<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавить новый датчик</title>
    <meta name="description" content="cardsensor">
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/addsensor.css">
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
    <!-- <section class = "form">
        <form  class = "form-add" action="addsensor.php" method="post" enctype="multipart/form-data">
            <p>Добавить новый датчик</p>
            <label>
                KSS
                <input type="text" name = "kss">
            </label>
            <label>
                Оборудование
                <input type="text" name = "">
            </label>
            <label>
                Полное имя параметра
                <input type="text" name = "">
            </label>
            <label>
                Зав номер
                <input type="number" name = "">
            </label>
            <label>
                PI диаграмма
                <input type="file" name = "" class = "file">
            </label>
            <label>
            Схема подключения внешних проводов
                <input type="file" name = "" id = "External_wiring_diagram" class = "file">
            </label>
            <label>
            План расположения
                <input type="file" name = "" class = "file">
            </label>
            <label>
            Установочный чертеж
                <input type="file" name = "" class = "file">
            </label>
            <label>
            Дата ввода в эксплуатацию
                <input type="date" name = "" id = "Commissioning_date">
            </label>
            <label>
            Предыдущая поверка
                <input type="date" name = "" id = "Previous_calibration">
            </label>
            <label>
            Номер протокола поверки
                <input type="number" name = "">
            </label>
            <label>
            Следующая поверка
                <input type="date" name = "" id = "Next_verification">
            </label>
            <label>
            Единица измерения
                <input type="text" name = "">
            </label>
            <label>
            Начало диапазона измерений
                <input type="number" name = "">
            </label>
            <label>
            Конец диапазона измерений
                <input type="number" name = "">
            </label>
            <label>
            Диапазон измерений<br>
                <input type="number" name = "" id = "Measured_parameter_from">
                ...
                <input type="number" name = "" id = "Measured_parameter_before">
            </label>
            <label>
            Ед.изм
                <input type="seach" name = "" list = "unit">
                <datalist id = "unit">
					<option>Па</option>
                    <option>Градус цельсия</option>
                    <option>м/с</option>
                    <option>рад/с</option>
                    <option>оборот/с</option>
                    <option>кг</option>
                    <option>м*м/с</option>
                    <option>метр</option>
                    <option>куб/мин</option>
                    <option>%</option>
				</datalist>
            </label>
            <label>
            Кон диап
                <input type="text" name = "">
            </label>
            <label>
            Межповерочный интервал
                <input type="number" name = "">
            </label>
            <label>
            Измеряемый параметр
                <input type="search" name = "" list = "parametr">
                <datalist id = "parametr">
					<option>Давление</option>
                    <option>Температура</option>
                    <option>Скорость</option>
                    <option>Ускороение</option>
                    <option>Угловая скорость</option>
                    <option>Угловое ускорение</option>
                    <option>Вибрация</option>
                    <option>Концентрация</option>
                    <option>Расход</option>
                    <option>Уровень</option>
				</datalist>
            </label>
            <label>
            Дата последней поверки, калибровки
                <input type="date" name = "" id = "Date_of_the_last_calibration_check">
            </label>
            <label>
            Поверка/Калибровка
                <input type="search" name = "" list = "pk">
                <datalist id = "pk">
					<option>Поверка</option>
					<option>Колибровка</option>
				</datalist>
            </label>
            <button class="btn" type="submit" >Добавить</button>
        </form>
    </section> -->
    <section class = "section-form">
		<form class="box" action="" method="post">
			<h1>Добавить датчик</h1>
			<input type="text" name="kks" placeholder="KKS" required>
			<input type="text" name="installation" placeholder="Оборудование" required>
			<input type="text" name="Parameter_name" placeholder="Полное имя параметра" required>
			<input type="text" name="Factory_number" placeholder="Заводской номер" required>
            <input type="text" name="Sensor_type" placeholder="Тип датчика" required>
            <!-- <input type="file" name="" id="" placeholder="PI-схема">
            <input type="file" name="" id="" placeholder="Схема подключения внешних проводок">
            <input type="file" name="" id="" placeholder="План расположения">
            <input type="file" name="" id="" placeholder="Установочный чертеж"> -->
            <input type="text" name="Verification_Protocol_Number" id="" placeholder="Номер протокола поверки" required>
            <!-- <input type="date" name="" id="" placeholder="Дата ввода в эксплуатацию">
            <input type="date" name="" id="" placeholder="Предыдущая поверка">
            <input type="date" name="" id="" placeholder="Следующая поверка"> -->
            <input type="text" name="Unit_parameter" id="" placeholder="Ед парам" required>
            <input type="text" name="Beginning_of_range" id="" placeholder="Нач диап" required>
            <input type="text" name="End_of_range" id="" placeholder="Кон диап">
            <input type="text" name="Intertesting_interval" id="" placeholder="Межповерочный интервал" required>
            <input type="text" name="Measured_parameter" id="" placeholder="Измеряемый параметр" required>
            <input type="text" name="Verification_Calibration" id="" placeholder="Поверка/Калибровка" required>
            <!-- <input type="text" name="Measuring_range" id="" placeholder="Диапазон измерений" required> -->
            <!-- Даты !-->
            <label for="">Дата ввода в эксплуатацию</label>
            <input type="date" name="Commissioning_date" id="" placeholder="Дата ввода в эксплуатацию" required>
            <label for="">Предыдущая поверка</label>
            <input type="date" name="Previous_calibration" id="" placeholder="Предыдущая поверка" required>
            <label for="">Следующая поверка</label>
            <input type="date" name="Next_verification" id="" placeholder="Следующая поверка" required>
            <label for="">Дата последней поверки, калибровки</label>
            <input type="date" name="Date_of_the_last_calibration_check" id="" placeholder="Дата последней поверки, калибровки" required>
            <!-- Файлы !-->
            <label for="">PI-схема</label>
            <input type="file" name="PI_scheme" id="" placeholder="PI-схема" required>
            <label for="">Схема подключения внешних проводок</label>
            <input type="file" name="External_wiring_diagram" id="" placeholder="Схема подключения внешних проводок" required>
            <label for="">План расположения</label>
            <input type="file" name="layout_plan" id="" placeholder="План расположения" required>
            <label for="">Установочный чертеж</label>
            <input type="file" name="Installation_drawing" id="" placeholder="Установочный чертеж" required>
			<input type="submit" name="" value="Добавить">
		</form>
    </section>
    
    <!-- Подключение к базе данных !-->
    <?php require_once "../php/connection.php"; ?>
    <!-- Нужно получить все данные из формы!-->
    <?php
        $kks = $_POST['kks'];
        $installation = $_POST['installation'];
        $Parameter_name = $_POST['Parameter_name'];
        $Factory_number = $_POST['Factory_number'];
        $Sensor_type = $_POST['Sensor_type'];
        $Verification_Protocol_Number = $_POST['Verification_Protocol_Number'];
        $Unit_parameter = $_POST['Unit_parameter'];
        $Beginning_of_range = $_POST['Beginning_of_range'];
        $End_of_range = $_POST['End_of_range'];
        $Intertesting_interval = $_POST['Intertesting_interval'];
        $Measured_parameter = $_POST['Measured_parameter'];
        $Verification_Calibration = $_POST['Verification_Calibration'];
        $Commissioning_date = $_POST['Commissioning_date'];
        $Previous_calibration = $_POST['Previous_calibration'];
        $Next_verification = $_POST['Next_verification'];
        $Date_of_the_last_calibration_check = $_POST['Date_of_the_last_calibration_check'];
        $PI_scheme = $_POST['PI_scheme'];
        $External_wiring_diagram = $_POST['External_wiring_diagram'];
        $layout_plan = $_POST['layout_plan'];
        $Installation_drawing = $_POST['Installation_drawing'];
        // Надо высчитать диапазон $Beginning_of_range + $End_of_range
        $Measuring_range = $Beginning_of_range . '...' . $End_of_range;
    ?>
    <!-- Создадим sql запрос для добавления в базу данных строки !-->
    <?php
        $sql = "INSERT INTO `detector` (
            `id`, `KKS`, `installation`,
            `Parameter name`, `Factory number`,
            `Sensor type`, `PI scheme`,
            `External wiring diagram`,
            `layout plan`, `Installation drawing`,
            `Commissioning date`, `Previous calibration`,
            `Verification Protocol Number`, 
            ` Next verification`, `Unit parameter`,
            `Beginning of range`, `End of range`,
            `Intertesting interval`, `Measured parameter`,
            `Date of the last calibration check`,
            `Verification/Calibration`, `Measuring range`)
            VALUES (NULL, '$kks', '$installation', '$Parameter_name',
            '$Factory_number', '$Sensor_type', '$PI_scheme',
            '$External_wiring_diagram', '$layout_plan', '$Installation_drawing',
            '$Commissioning_date', '$Previous_calibration', '$Verification_Protocol_Number',
            '$Next_verification', '$Unit_parameter', '$Beginning_of_range', '$End_of_range',
            '$Intertesting_interval', '$Measured_parameter', '$Date_of_the_last_calibration_check',
            '$Verification_Calibration', '$Measuring_range')";
    ?>
    <!-- Запустим запрос !-->
    <?php

        if ($kks == true) {
            if (mysqli_query($connection, $sql)) {
                echo "New record created successfully";
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($connection);
            }
        }
    ?>
    <!-- Закроем подключение к базе данных !-->
	<?php mysqli_close($connection);  ?>
</body>
</html>