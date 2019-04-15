<?php
function file_excess($file_name,$number_dir) {
    trim($file_name);
    $link = '../documents/1070.01-010-СУ/';
    if ($number_dir == 1){
        $number_lun = substr($file_name,strlen($file_name)-1);
        $file_name = substr($file_name,0,strlen($file_name)-3);
        $file_name = $file_name . $number_lun;
        $link = '../documents/1070.01-010-СУ/1070.01-010-СУ.01 Схемы автоматизации/1070.01-010-СУ.01/' . $file_name . '.PDF';
    }
    if ($number_dir == 2){
        $file_name = substr($file_name,0,strlen($file_name)-2);
        $file_name = $file_name . $number_dir;
        $link = '../documents/1070.01-010-СУ/1070.01-010-СУ.02 Схемы электрические/1070.01-010-СУ.02/' . $file_name . '.pdf';
    }
    return $link;
}
//1070.01-010-СУ.01 л. 4
?>
