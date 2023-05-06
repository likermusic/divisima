<?php 
return [
    PATH . '/' => [
        'controller' => 'main',
        'action' => 'index'
    ],
    PATH . '/cart' => [
        'controller' => 'cart',
        'action' => 'index'
    ],
    PATH . '/signin' => [
        'controller' => 'login',
        'action' => 'index'
    ],

    // Fetch routes
    PATH . 'mainHandler' => [
        'controller' => 'main',
        'action' => 'requestHandler'
    ],
    PATH . 'cartHandler' => [
        'controller' => 'cart',
        'action' => 'requestHandler'
    ],
    // 'posts/edit' => [
    //     'controller' => 'posts',
    //     'action' => 'edit'
    // ]
    // 'posts/delete' => [
    //     'controller' => 'posts',
    //     'action' => 'delete'
    // ]
];
?>

<!-- http://divisima/posts/show -->


<!-- http://divisima/dasdasd -->

