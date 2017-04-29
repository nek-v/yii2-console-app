<?php

namespace app\commands;

use yii\console\Controller;
use yii\helpers\Console;

class HelloController extends Controller {

    public function actionIndex($message = 'Hello world') {
        // color string
        $this->stdout('Execute: ', Console::BOLD);
        $this->stdout(realpath(__FILE__)."\r\n", Console::FG_YELLOW);
        // 
        echo $message."\r\n";
    }

}
