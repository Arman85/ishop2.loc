<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.03.2019
 * Time: 16:02
 */

namespace app\controllers;


use ishop\Cache;

class MainController extends AppController
{

    //public $layout = 'test';

    public function indexAction()
    {

        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');

    }

}