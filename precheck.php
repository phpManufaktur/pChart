<?php

/**
 * pChart
 * 
 * @author Jean-Damien Pogolotti
 * @link http://www.pchart.net/
 * @copyright 2011
 * @license http://www.pchart.net/license
 * @version $Id$
 */

// prevent this file from being accessed directly
if (!defined('WB_PATH')) die('invalid call of '.$_SERVER['SCRIPT_NAME']);

// Checking Requirements

$PRECHECK['WB_VERSION'] = array('VERSION' => '2.8', 'OPERATOR' => '>=');
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