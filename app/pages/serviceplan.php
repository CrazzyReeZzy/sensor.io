<!DOCTYPE html>
<?php require_once "../php/connection.php"; ?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Месячный план обслуживания</title>
    <meta name="description" content="serviceplan">
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/serviceplan.css">
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
	<?php $count = mysqli_query($connection, "SELECT * FROM `detector`");?>
    <!-- Таблица !-->
    <table class = "info">
        <tr class = "first-str">
				 <th>KKS</th>
				 <th>Оборудование</th>
				 <th>Тип датчика</th>
                 <th>Заводской номер</th>
                 <th>Вид работы</th>
                 <th>Переодичность работы, мес</th>
				 <th>ФИО исполнителя</th>
				 <th>Дата следующего обслуживания</th>
				 <th>Отметка об исполнении</th>
        </tr>
        <?php
			while ($name =  mysqli_fetch_assoc($count)) {
				echo  '<tr>';
				echo  '<th>' . '<a href = "' . 'cardsensor.php?id=' . $name['id'] .  '">' . $name['KKS'] . '</a>' .'</th>';
				echo  '<th>' . $name['installation']  .'</th>';
				echo  '<th>' . $name['Sensor type']  .'</th>';
				echo  '<th>' . $name['Factory number']  .'</th>';
				//echo  '<th>' . $name['Measured parameter']  .'</th>';
				if ($name['Measured parameter'] == Расход) {
					echo  '<th>' . 'Продувка импульсных линий '  .'</th>';
					echo  '<th>' . '1 раз в 3 месяца'  .'</th>';
					echo  '<th>' . 'Евлеев А.О'  .'</th>';
					echo  '<th>' . '01.05.2019'  .'</th>';
					if ( $name['Status'] == 111 || $name['Status'] == 011 || $name['Status'] == 001 || $name['Status'] == 100 || $name['Status'] == 110 ){
						echo '<th> <input type="checkbox" name="formDoor[]" id="" checked "> </th>';
					}else {
						echo '<th> <input type="checkbox" name="formDoor[]" id=""  "> </th>';
					}

					echo '</tr>';
					//Вторая строка
					echo  '<tr>';
					echo  '<th>' . '<a href = "' . 'cardsensor.php?id=' . $name['id'] .  '">' . $name['KKS'] . '</a>' .'</th>';
					echo  '<th>' . $name['installation']  .'</th>';
					echo  '<th>' . $name['Sensor type']  .'</th>';
					echo  '<th>' . $name['Factory number']  .'</th>';
					echo  '<th>' . 'Очистка от пыли '  .'</th>';
					echo  '<th>' . '1 раз в 3 месяца'  .'</th>';
					echo  '<th>' . 'Евлеев А.О'  .'</th>';
					echo  '<th>' . '01.05.2019'  .'</th>';
					if (  $name['Status'] == 011 || $name['Status'] == 010 || $name['Status'] == 111 || $name['Status'] == 110 ){
						echo '<th> <input type="checkbox" name="formDoor[]" id="" checked "> </th>';
					}else {
						echo '<th> <input type="checkbox" name="formDoor[]" id=""  "> </th>';
					}
					echo '</tr>';
					//Третья строка
					echo  '<tr>';
					echo  '<th>' . '<a href = "' . 'cardsensor.php?id=' . $name['id'] .  '">' . $name['KKS'] . '</a>' .'</th>';
					echo  '<th>' . $name['installation']  .'</th>';
					echo  '<th>' . $name['Sensor type']  .'</th>';
					echo  '<th>' . $name['Factory number']  .'</th>';
					echo  '<th>' . 'Протяжка контактов (проверка разъемов)'  .'</th>';
					echo  '<th>' . '1 раз в полгода'  .'</th>';
					echo  '<th>' . 'Евлеев А.О'  .'</th>';
					echo  '<th>' . '01.08.2019'  .'</th>';
					if ( $name['Status'] == 111 || $name['Status'] == 011 || $name['Status'] == 001 || $name['Status'] == 101){
						echo '<th> <input type="checkbox" name="formDoor[]" id="" checked "> </th>';
					}else {
						echo '<th> <input type="checkbox" name="formDoor[]" id=""  "> </th>';
					}
					echo '</tr>';
				}
				if ($name['Measured parameter'] == Давление) {
					echo  '<th>' . 'Продувка импульсных линий '  .'</th>';
					echo  '<th>' . '1 раз в 3 месяца'  .'</th>';
					echo  '<th>' . 'Евлеев А.О'  .'</th>';
					echo  '<th>' . '01.05.2019'  .'</th>';
					if ( $name['Status'] == 111 || $name['Status'] == 011 || $name['Status'] == 001 || $name['Status'] == 100 || $name['Status'] == 110 ){
						echo '<th> <input type="checkbox" name="formDoor[]" id="" checked "> </th>';
					}else {
						echo '<th> <input type="checkbox" name="formDoor[]" id=""  "> </th>';
					}
					echo '</tr>';
					//Вторая строка
					echo  '<tr>';
					echo  '<th>' . '<a href = "' . 'cardsensor.php?id=' . $name['id'] .  '">' . $name['KKS'] . '</a>' .'</th>';
					echo  '<th>' . $name['installation']  .'</th>';
					echo  '<th>' . $name['Sensor type']  .'</th>';
					echo  '<th>' . $name['Factory number']  .'</th>';
					echo  '<th>' . 'Очистка от пыли '  .'</th>';
					echo  '<th>' . '1 раз в 3 месяца'  .'</th>';
					echo  '<th>' . 'Алексеев И.О'  .'</th>';
					echo  '<th>' . '01.05.2019'  .'</th>';
					if ( $name['Status'] == 011 || $name['Status'] == 010 || $name['Status'] == 111 || $name['Status'] == 110 ){
						echo '<th> <input type="checkbox" name="formDoor[]" id="" checked "> </th>';
					}else {
						echo '<th> <input type="checkbox" name="formDoor[]" id=""  "> </th>';
					}
					echo '</tr>';
				}
				if ($name['Measured parameter'] == Температура) {
					echo  '<th>' . 'Проверка сопротивления изоляции '  .'</th>';
					echo  '<th>' . '1 раз в полгода'  .'</th>';
					echo  '<th>' . 'Дудочкин И.В'  .'</th>';
					echo  '<th>' . '01.08.2019'  .'</th>';
					if ( $name['Status'] == 111 || $name['Status'] == 011 || $name['Status'] == 001 || $name['Status'] == 100 || $name['Status'] == 110){
						echo '<th> <input type="checkbox" name="formDoor[]" id="" checked "> </th>';
					}else {
						echo '<th> <input type="checkbox" name="formDoor[]" id=""  "> </th>';
					}
					echo '</tr>';
					//Вторая строка
					echo  '<tr>';
					echo  '<th>' . '<a href = "' . 'cardsensor.php?id=' . $name['id'] .  '">' . $name['KKS'] . '</a>' .'</th>';
					echo  '<th>' . $name['installation']  .'</th>';
					echo  '<th>' . $name['Sensor type']  .'</th>';
					echo  '<th>' . $name['Factory number']  .'</th>';
					echo  '<th>' . 'Очистка от пыли '  .'</th>';
					echo  '<th>' . '1 раз в 3 месяца'  .'</th>';
					echo  '<th>' . 'Дудочкин И.В'  .'</th>';
					echo  '<th>' . '01.05.2019'  .'</th>';
					if ( $name['Status'] == 011 || $name['Status'] == 010 || $name['Status'] == 111 || $name['Status'] == 110){
						echo '<th> <input type="checkbox" name="formDoor[]" id="" checked "> </th>';
					}else {
						echo '<th> <input type="checkbox" name="formDoor[]" id=""  "> </th>';
					}
					echo '</tr>';
					//Третья строка
					echo  '<tr>';
					echo  '<th>' . '<a href = "' . 'cardsensor.php?id=' . $name['id'] .  '">' . $name['KKS'] . '</a>' .'</th>';
					echo  '<th>' . $name['installation']  .'</th>';
					echo  '<th>' . $name['Sensor type']  .'</th>';
					echo  '<th>' . $name['Factory number']  .'</th>';
					echo  '<th>' . 'Протяжка контактов (проверка разъемов)'  .'</th>';
					echo  '<th>' . '1 раз в полгода'  .'</th>';
					echo  '<th>' . 'Дудочкин И.В'  .'</th>';
					echo  '<th>' . '01.08.2019'  .'</th>';
					if ($name['Status'] == 111 || $name['Status'] == 011 || $name['Status'] == 001 || $name['Status'] == 101 ){
						echo '<th> <input type="checkbox" name="formDoor[]" id="" checked "> </th>';
					}else {
						echo '<th> <input type="checkbox" name="formDoor[]" id=""  "> </th>';
					}
					echo '</tr>';
				}
				if ($name['Measured parameter'] == Концентрация) {
					echo  '<th>' . 'Проверка «нуля» '  .'</th>';
					echo  '<th>' . '1 раз в 3 месяца'  .'</th>';
					echo  '<th>' . 'Иванов И.И'  .'</th>';
					echo  '<th>' . '01.05.2019'  .'</th>';
					if ( $name['Status'] == 111 || $name['Status'] == 011 || $name['Status'] == 001 || $name['Status'] == 100 || $name['Status'] == 110 ){
						echo '<th> <input type="checkbox" name="formDoor[]" id="" checked "> </th>';
					}else {
						echo '<th> <input type="checkbox" name="formDoor[]" id=""  "> </th>';
					}
					echo '</tr>';
					//Вторая строка
					echo  '<tr>';
					echo  '<th>' . '<a href = "' . 'cardsensor.php?id=' . $name['id'] .  '">' . $name['KKS'] . '</a>' .'</th>';
					echo  '<th>' . $name['installation']  .'</th>';
					echo  '<th>' . $name['Sensor type']  .'</th>';
					echo  '<th>' . $name['Factory number']  .'</th>';
					echo  '<th>' . 'Очистка от пыли '  .'</th>';
					echo  '<th>' . '1 раз в 3 месяца'  .'</th>';
					echo  '<th>' . 'Иванов И.И'  .'</th>';
					echo  '<th>' . '01.05.2019'  .'</th>';
					if ( $name['Status'] == 011 || $name['Status'] == 010 || $name['Status'] == 111 || $name['Status'] == 110 ){
						echo '<th> <input type="checkbox" name="formDoor[]" id="" checked "> </th>';
					}else {
						echo '<th> <input type="checkbox" name="formDoor[]" id=""  "> </th>';
					}
					echo '</tr>';
					//Третья строка
					echo  '<tr>';
					echo  '<th>' . '<a href = "' . 'cardsensor.php?id=' . $name['id'] .  '">' . $name['KKS'] . '</a>' .'</th>';
					echo  '<th>' . $name['installation']  .'</th>';
					echo  '<th>' . $name['Sensor type']  .'</th>';
					echo  '<th>' . $name['Factory number']  .'</th>';
					echo  '<th>' . 'Протяжка контактов (проверка разъемов)'  .'</th>';
					echo  '<th>' . '1 раз в полгода'  .'</th>';
					echo  '<th>' . 'Иванов И.И'  .'</th>';
					echo  '<th>' . '01.08.2019'  .'</th>';
					// if ( $name['Status'] == 111 || $name['Status'] == 011 || $name['Status'] == 001 || $name['Status'] == 101 ){
					// 	echo '<th> <input type="checkbox" name="formDoor[]" id="" checked "> </th>';
					// }else {
					// 	echo '<th> <input type="checkbox" name="formDoor[]" id=""  "> </th>';
					// }
					// echo '</tr>';
					echo '<th> <input type="checkbox" name="formDoor[]" id=""  "> </th>';
				}
				echo '</tr>';
			}
		?>
    </table>
</body>
</html>
<?php mysqli_close($connection);  ?>