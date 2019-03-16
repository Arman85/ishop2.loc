<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.03.2019
 * Time: 11:26
 */

define("DEBUG", 1); // для дебага, которая будет указывать как ведет себя приложение, т.е. толи это режим разработки приложения, толи это режим продакшн.
define("ROOT", dirname(__DIR__)); //будет указывать на корень нашего сайта, ishop2.loc
define("WWW", ROOT . '/public'); // будет указывать на папку public
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/ishop/core');
define("LIBS", ROOT . '/vendor/ishop/core/libs');
define("CASHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'default'); // в ней будет хранится шаблон нашего сайта по умолчанию.

// Начало, вычисляем путь главной страницы.
// http://ishop2.loc/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

/* http://ishop2.loc/public/здесь мы вырезали index.php
 #[^/]+$# - регулярное выражение, означает что мы ищем все кроме слеша, начиная с конца строки. После этого идет пустая строка,
тоесть на нее мы замещаем найденое.
а третьим параметром передаем переменную в которой нужно все это произвести.
*/
$app_path = preg_replace("#[^/]+$#", '', $app_path);

// Теперь вырезаем строку public. Таким образом получим url главной страницы.
$app_path = str_replace("/public/", '', $app_path);

define("PATH", $app_path);
// Конец, вычисляем путь главной страницы.

// Путь к админке
define("ADMIN", PATH . '/admin');

// Подключаем автозагрузчик композера, для того что бы мы могли работать с классами, не подключаю их каждого по отдельности.
require_once ROOT . '/vendor/autoload.php';