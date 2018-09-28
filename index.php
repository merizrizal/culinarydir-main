<?php
require(__DIR__ . '/environments/local-settings/env.php');
	
ini_set('max_execution_time', 0);
ini_set('memory_limit', '1000M');

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/engine/common/config/bootstrap.php');
require(__DIR__ . '/engine/frontend/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(   
    require(__DIR__ . '/engine/common/config/main.php'),
    require(__DIR__ . '/engine/common/config/main-local.php'),
    require(__DIR__ . '/engine/frontend/config/main.php'),
    require(__DIR__ . '/engine/frontend/config/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
