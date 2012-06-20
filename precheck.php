<?php

/**
 * pChart
 *
 * @author Jean-Damien Pogolotti
 * @author Ralf Hertsch <ralf.hertsch@phpmanufaktur.de>
 * @link http://www.pchart.net/
 * @link http://phpmanufaktur.de
 * @copyright 2011 - 2012
 * @license http://www.pchart.net/license
 */

// include class.secure.php to protect this file and the whole CMS!
if (defined('WB_PATH')) {
  if (defined('LEPTON_VERSION'))
    include(WB_PATH.'/framework/class.secure.php');
}
else {
  $oneback = "../";
  $root = $oneback;
  $level = 1;
  while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
    $root .= $oneback;
    $level += 1;
  }
  if (file_exists($root.'/framework/class.secure.php')) {
    include($root.'/framework/class.secure.php');
  }
  else {
    trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
  }
}
// end include class.secure.php


// Checking Requirements
$PRECHECK['PHP_VERSION'] = array('VERSION' => '5.2.0', 'OPERATOR' => '>=');

if (extension_loaded('gd')) {
	$required = 'gd';
	$actual = 'gd';
}
elseif (extension_loaded('gd2')){
	$required = 'gd2';
	$actual = 'gd2';
}
else {
	$required = 'gd';
	$actual = 'none';
}
$PRECHECK['CUSTOM_CHECKS'] = array(
	'GD library' => array(
		'REQUIRED' => $required,
		'ACTUAL' => $actual,
		'STATUS' => ($actual === $required)
	)
);

?>