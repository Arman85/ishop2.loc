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
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [4]);
        //debug($post);
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');

        $name = 'John';
        $age = 30;
        $names = [ 'Andrey', 'Jane', 'Mike'];
        $cache = Cache::instance();
        //$cache->set('test', $names);
        //$cache->delete('test');
        $data = $cache->get('test');
        debug($data);
//        Если не получили данные, то закешируем данные.
        if(!$data){
            $cache->set('test', $names);
        }
        $this->set( compact('name', 'age', 'names', 'posts'));
    }

}