<?php

namespace App;

class App
{
    /**
     * Example for command: php index andor
     * this is the source link: https://dev.to/erikaheidi/bootstrapping-a-cli-php-application-in-vanilla-php-4ee
     * $argv is a predefined php variable available in PHP scripts executed from the command line.
     */
    public function runCommand(array $argv)
    {
        $name = "World";
        if (isset($argv[1])) {
            $name = $argv[1];
        }

        echo "Hello $name!!!\n";
    }

    /**
     * Example for command: php index 3 4
     * Output will be: 12
     * $argv is a predefined php variable available in PHP scripts executed from the command line.
     * $argv contains an array of all the arguments passed to the script when running from the command line.
     * Note: The first argument $argv[0] is always the name that was used to run the script.
     * https://www.php.net/manual/en/reserved.variables.argv.php
     */
    public function multiply(array $argv)
    {
        // var_dump($argv);
        if (isset($argv[1])) {
            $number1 = $argv[1];
        }
        if (isset($argv[2])) {
            $number2 = $argv[2];
        }

        echo $number1 * $number2;
    }
}


