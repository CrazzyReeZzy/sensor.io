<?php
function file_excess($file_name,$number_colon) {
    trim($file_name);
    $link = '../documents/1070.01-010-СУ/';
    if ($number_colon == 1){
        $number_lun = substr($file_name,strlen($file_name)-1); // число после буквы л 1070.01-010-СУ.01 л. 4 -- 4
        $file_name = substr($file_name,0,strlen($file_name)-3);
        $file_name = $file_name . $number_lun;// Название файла без точки в формате 1070.01-010-СУ.01 л4
        // Из предыдущей строки надо взять 4 и пятый символ c конца строки
        $number_dir = substr($file_name,0,strlen($file_name)-2);
        $number_dir = substr($number_dir,17,strlen($number_dir)-2); // Получил чистую цифру
        trim($number_dir);
        // В данном столбце она может быть 01 или 13
        if ($number_dir == 01){
            $link = '../documents/1070.01-010-СУ/1070.01-010-СУ.01 Схемы автоматизации/1070.01-010-СУ.01/' . $file_name . '.PDF';
        }
        if ($number_dir == 13){
            $link = '../documents/1070.01-010-СУ/1070.01-010-СУ.13 Загазованность помещения в р-не ВК №2/1070.01-010-СУ.13/' . $file_name . '.PDF';
        }
    }
    if ($number_colon == 2){
        $file_name = substr($file_name,0,strlen($file_name)-2);
        $file_name = $file_name . $number_dir;
        $link = '../documents/1070.01-010-СУ/1070.01-010-СУ.02 Схемы электрические/1070.01-010-СУ.02/' . $file_name . '.pdf';
    }
    return $link;
}
//1070.01-010-СУ.01 л. 4
?>
