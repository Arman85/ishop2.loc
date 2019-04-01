<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.03.2019
 * Time: 17:03
 */

namespace app\controllers;

use app\models\AppModel;
use ishop\base\Controller;

class AppController extends Controller
{

    public function __construct($route)
    {
        parent::__construct($route);
        // Делаю обЪект класса AppModel
        new AppModel();
    }

}