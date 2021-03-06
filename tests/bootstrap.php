<?php

/**
 * MetaPalettes for the Contao Open Source CMS
 *
 * @link      https://github.com/bit3/contao-meta-palettes SCM
 * @copyright 2013 bit3 UG
 * @author    Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @package   MetaPalettes
 * @license   LGPL-3.0+
 */

error_reporting(E_ALL);

function includeIfExists($file)
{
	return file_exists($file) ? include $file : false;
}

if ((!$loader = includeIfExists(__DIR__.'/../vendor/autoload.php')) && (!$loader = includeIfExists(__DIR__.'/../../../autoload.php'))) {
	echo 'You must set up the project dependencies, run the following commands:'.PHP_EOL.
		'curl -sS https://getcomposer.org/installer | php'.PHP_EOL.
		'php composer.phar install'.PHP_EOL;
	exit(1);
}
