<?php
    include "app/lib/debug.php";
    include "app/config/pathes.php";
    // require_once __DIR__ .'/vendor/autoload.php';
    use app\core\Router;
    spl_autoload_register(function($class) {
        $class = str_replace('\\','/',$class);
        require_once "{$class}.php";
    });

    // $faker = Faker\Factory::create();
    // $name = $faker->name();
    // $price = $faker->randomNumber(10000);
    $router = new Router();
    $router->run();


?>
