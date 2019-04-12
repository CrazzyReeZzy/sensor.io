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
			<input type="text" name="kks" placeholder="KKS">
			<input type="text" name="type" placeholder="Оборудование">
			<input type="text" name="parameter" placeholder="Полное имя параметра">
			<input type="text" name="" placeholder="Заводской номер">
            <input type="text" name="unitparameter" placeholder="Тип датчика">
            <input type="text" name="" id="" placeholder="PI-схема">
            <input type="text" name="" id="" placeholder="Схема подключения внешних проводок">
            <input type="text" name="" id="" placeholder="План расположения">
            <input type="text" name="" id="" placeholder="Установочный чертеж">
            <input type="text" name="" id="" placeholder="Дата ввода в эксплуатацию">
            <input type="text" name="" id="" placeholder="Предыдущая поверка">
            <input type="text" name="" id="" placeholder="Номер протокола поверки">
            <input type="text" name="" id="" placeholder="Следующая поверка">
            <input type="text" name="" id="" placeholder="Ед парам">
            <input type="text" name="" id="" placeholder="Нач диап">
            <input type="text" name="" id="" placeholder="Кон диап">
            <input type="text" name="" id="" placeholder="Межповерочный интервал">
            <input type="text" name="" id="" placeholder="Измеряемый параметр">
            <input type="text" name="" id="" placeholder="Дата последней поверки, калибровки">
            <input type="text" name="" id="" placeholder="Поверка/Калибровка">
			<input type="submit" name="" value="Добавить">
		</form>
	</section>
</body>
</html>