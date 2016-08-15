<?php
/**
 * terminal script
 */
namespace AntiPhp\PhpShell;

use AntiPhp\PhpShell\Application\Application as PsApplication;

require __DIR__ .'/../vendor/autoload.php';

$application = new PsApplication();
$application->run();
