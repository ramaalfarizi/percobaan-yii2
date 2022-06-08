<?php

namespace app\components;

use Yii;
use backend\models\Statistic;
use Yii\base\Component;
use yii\web\Request;

class StatisticComponent extends Component
{
    const ON_SAVE_STAT = "save-stat";

    public static function UserInfo()
    {
        $request = new Request();
        $statisticModel = new Statistic();

        $statisticModel['id'] = NULL;
        $statisticModel['user_ip'] = $request->getUserIP();
        $statisticModel['user_host'] = $request->getUserHost();
        $statisticModel['path_info'] = $request->getPathInfo();
        $statisticModel['query_string'] = $request->getQueryString();
        $statisticModel->save();
    }
}
