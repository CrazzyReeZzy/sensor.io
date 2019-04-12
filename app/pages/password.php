<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="password">
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/card.css"> <!-- Подключение файла стилей.-->
    <title>Паспорт датчика</title> 
</head>
<body>

    <!-- Подключимся к базе данных !-->
	<?php 
		require_once "../php/connection.php";
		$id = $_GET['id'];
		// Сформируем запрос
		$count = mysqli_query($connection, "SELECT * FROM `detector` WHERE `id` = '$id' ");
		while ($name =  mysqli_fetch_assoc($count)) {
	?>

<table  class="password" border="1" cellpadding="15" height="50px">
    <tr align="center" >
        <td>Предприятие изготовитель</td>
        <td colspan="3" rowspan="2" style="font-weight: 700; vertical-align: top;">ПАСПОРТ<br>№<?php echo $name['id'] ?><br> <?php echo $name['Measured parameter'] ?></td>
        <td style="vertical-align: top;">№ в Гос. Реестре</td>
    </tr>
    <tr align="center">
        <td style="font-weight: 700" >ООН НПП "Элемер"</td>
        <td style="font-weight: 700; color: brown">324234</td>
    </tr>
    <tr align="center"style="vertical-align: top;">
        <td>Код KKS</td>
        <td colspan="3">Метрологические характеристики</td>
        <td>Тип (марка)</td>
    </tr>
    <tr  align="center">
        <td width="24%" style="font-weight: 700"><?php echo $name['KKS'] ?></td>
        <td width="16%">Пределы измерений</td>
        <td width="16%">Цена деления шкалы</td>
        <td width="16%">Класс или допускаемая погрешность</td>
        <td width="24%" style="font-weight: 700"><?php echo $name['Sensor type'] ?></td>
    </tr>
    <tr  align="center">
         <td width="24%">Дата ввода в эксплуатацию</td>
         <td width="16%" rowspan="2" style="font-weight: 700"><?php echo $name['Measuring range'] ?></td>
         <td width="16%" rowspan="2">1</td>
         <td width="16%" rowspan="2" style="font-weight: 700" >0,5%</td>
         <td width="24%">Заводской номер</td>
    </tr>
    <tr  align="center">
         <td width="24%" style="font-weight: 700"><?php echo $name['Commissioning date'] ?></td>
         <td width="24%" style="font-weight: 700"><?php echo $name['Factory number'] ?></td>
    </tr>
    <tr align="center" height="110px" style="vertical-align: top;">
        <td>Место нахождения <br><br><?php echo $name['installation'] ?></td>
        <td colspan="3">Перечень основных частей комплекта</td>
        <td>Дата изготовления</td>
    </tr>
    <tr align="center">
        <td rowspan="3" height="190px" style="font-weight: 700"><?php echo $name['Parameter name'] ?></td>
        <td colspan="3">Полный комплект</td>
        <td style="font-weight: 700"><?php echo $name['Commissioning date'] ?></td>
    </tr>
    <tr  align="center" style="vertical-align: top;">
            <td colspan="3" >Периодичность калибровки</td>
            <td>Состояние при покупке</td>
    </tr>
     <tr  align="center">
            <td colspan="3" style="font-weight: 700">Раз в 5 лет</td>
            <td style="font-weight: 700">Без замечаний</td>
    </tr>
        

</table>

<table class="password1" border="1" cellpadding="15" height="50px" style="margin-top: 50px;">
        <tr align="center" >
            <td colspan="8" style="font-weight: 700">Результаты проверки</td>
        </tr>
        <tr align="center">
            <td>Дата проверки</td>
            <td>Номер протокола проверки</td>
            <td>Заключение (Годен/не годен)</td>
            <td>Подпись проверявшего</td>
            <td>Дата проверки</td>
            <td>Номер протокола проверки</td>
            <td>Заключение (Годен/не годен)</td>
            <td>Подпись проверявшего</td>
        </tr>
        <tr align="center">
            <td><?php echo $name['Previous calibration'] ?></td>
            <td><?php echo $name['Verification Protocol Number'] ?></td>
            <td>Годен</td>
            <td> <img src = "../img/signa.svg"> </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr align="center">
            <td colspan="8">Сведения о неисправностях, ремонте и тех. обслуживания.</td>
        </tr>
        <tr align="center">
            <td colspan="2">Дата ремонта</td>
            <td colspan="6">Краткая характеристика ремонта</td>
        </tr>
        <tr align="center">
            <td colspan="2">10.08.2013</td>
            <td colspan="6">Плановое обслуживание</td>
        </tr>
        <tr align="center">
            <td colspan="2">10.09.2014</td>
            <td colspan="6">Ремонт выполнен успешно</td>
        </tr>
        <tr align="center">
            <td colspan="2">10.10.2013</td>
            <td colspan="6">Работа выполнена успешно</td>
        </tr>
        <tr>
            <td colspan="4">Начальник отдела:<img src = "../img/signa.svg" style=" width: 10%; margin-left: 250px;" ></td>
            <td colspan="4">Дата выполнения паспорта: <?php echo  date("Y-m-d H:i:s") ?></td>
        </tr>
        
    </table>
    <?php 
        }
    ?>
</body>
</html>