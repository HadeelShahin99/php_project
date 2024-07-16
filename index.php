<?php

// comment out the following two lines when deployed to production
//Debug and Environment Mode Configuration
defined('YII_DEBUG') or define('YII_DEBUG', true);  //to display detailed error messages and logs
defined('YII_ENV') or define('YII_ENV', 'dev'); //affects the configuration and behavior of the application.

require __DIR__ . '/../vendor/autoload.php';  //composer dependency manager =>to make sure that all the libraries and classes you install via Composer are available in your application
//making it easy to use them without needing to manually include each file.
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php'; //This line includes the Yii framework itself , sets up the Yii framework and provides the core functionalities needed for the application to run
//__DIR__: The magic constant returns the directory of the current script === ex: web

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();   //yii2 runs a single instance of the application class //this line runs the application
//this line run() handling web request

//entry script file

/*What is the vendor Directory?
The vendor directory is a special folder created and managed by Composer.
It contains all the external libraries and dependencies that your project requires.
 When you install packages or libraries using Composer, they are downloaded and placed in this directory.*/

//vendor: Contains all the installed libraries and the autoload setup.

