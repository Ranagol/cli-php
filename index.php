<?php

/* THE TASK
Here we want to create a simple php CLI app, that is able to execute commands with arguments.
We user composer for class autoloading.

*/

require __DIR__ . '/vendor/autoload.php';

use App\App;

$app = new App();

/**
 * Example for command: php index andor
 * this is the source link: https://dev.to/erikaheidi/bootstrapping-a-cli-php-application-in-vanilla-php-4ee
 * $argv is a predefined php variable available in PHP scripts executed from the command line.
 * The $argv is the key, how we get our arguments from the command line command to our php script.
 */
// $app->runCommand($argv);

/**
 * Example for command: php index 3 4
 * Output will be: 12
 * $argv is a predefined php variable available in PHP scripts executed from the command line.
 * The $argv is the key, how we get our arguments from the command line command to our php script.
 */
$app->multiply($argv);
