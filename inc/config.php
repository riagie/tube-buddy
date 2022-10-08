<?php

/**
 * Kumpulan Konstan
 * @package Platform
 * @access public
 * @author 
 * @copyright (c) 2022
 * 
*/

define('VERSION', '1.0.0');

/**
 * API PATH CONFIGURATION
*/
define('ROOT', dirname(dirname(__FILE__)). '/' );

/**
 * API CONFIG CONFIGURATION
*/
define('CHANNEL_ID', 'UCJu5ADV3DtGIrhAJvcwIKsQ');
define('CHANNEL_TOKEN', '79587b35-7261-4944-b275-548c2349ef20');
define('FOLDER_EXCEL', 'src/');
define('FILE_EXCEL', 'tubebuddy');

/**
 * API GLOBAL CONFIGURATION
 */
define('MAX_TIMEOUT', 30);
define('SLEEP', 3);
define('MAX_SLEEP', 20);

define('ERROR', 3); // fatal
define('INFO', 3); // result
define('WARNING', 3); // notif
define('STAT', 3); // time excute
define('TRACE', 3); // role progress excute
define('SPECIAL', 1); // notif to email

define('LOGS_ERROR', 'logs/' . date('Ymd') . '-error.log');
define('LOGS_INFO', 'logs/' . date('Ymd') . '-info.log');
define('LOGS_WARNING', 'logs/' . date('Ymd') . '-warning.log');
define('LOGS_STAT', 'logs/' . date('Ymd') . '-stat.log');
define('LOGS_TRACE', 'logs/' . date('Ymd') . '-trace.log');

define('LOG_LEVEL', ERROR | INFO | WARNING | STAT | TRACE);