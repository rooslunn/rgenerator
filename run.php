#!/usr/bin/env php

<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 9/13/16
 * Time: 11:19
 */

if (php_sapi_name() !== 'cli') {
    echo "Program should be run from command line\n";
}

require_once __DIR__ . '/vendor/autoload.php';

use Provectus\RGenerator\ReportGenerator;

$generator = new ReportGenerator();
$generator->run();