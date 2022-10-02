<?php

error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 1);
date_default_timezone_set('Asia/Jakarta');

ini_set('set_time_limit', 300);
ini_set('memory_limit', '1024M');
ini_set('max_execution_time', 43200);

define('DEBUG', 0);

require dirname(__FILE__) . '/vendor/autoload.php';
require('inc/config.php');
require('lib/tubebuddy.php');

$tubebuddy = new Tubebuddy();

$reader = PHPExcel_IOFactory::createReader('Excel2007');
$reader = $reader->load(FOLDER_EXCEL.FILE_EXCEL.'.xlsx');
$reader->setActiveSheetIndex(0);

$number = 1;
$number_sleep = 1;
while($number > 0) {
    $cells_no = $reader->getActiveSheet()->getCell('A'.($number+1))->getValue();
    $cells_tag = $reader->getActiveSheet()->getCell('B'.($number+1))->getValue();
    $cells_s_volume = $reader->getActiveSheet()->getCell('C'.($number+1))->getValue();

    if(empty($cells_tag) && empty($cells_s_volume)) {
        echo "file ".FILE_EXCEL." not data or is blank\n"; break;
    }

    if($cells_tag && empty($cells_s_volume)) {
        $msg = $tubebuddy->init(trim($cells_tag));
        $tubebuddy->DEBUG($tubebuddy->Json('encode', $msg));
        if (empty($msg->response)) {
            $tubebuddy->DEBUG($tubebuddy->Json('encode', $msg), false, true);
            echo "sorry, daily limit or acsess invalid.\n"; break;
        }

        if (!is_array($tubebuddy->Json('decode', $msg->response))) {
            $tubebuddy->DEBUG($tubebuddy->Json('encode', $msg), false, true);
            echo $tubebuddy->Json('encode', $msg->response)."\n";
        }
        
        $cells = 'B';
        foreach ((array) $tubebuddy->Json('decode', $msg->response)[0] as $key => $value) {
            $set_value = $reader->getActiveSheet()->setCellValue($cells.($number+1), $value);
            $writer = PHPExcel_IOFactory::createWriter($reader, 'Excel2007');
            $writer->save(FOLDER_EXCEL.FILE_EXCEL.'.xlsx');

            ++$cells;
        }

        echo $cells_no."|".$cells_tag."|done\n"; sleep(SLEEP);
        if (fmod($number_sleep/10, 1) == 0.0) sleep(MAX_SLEEP);
        $number_sleep++;
    }

    $number++;
}
