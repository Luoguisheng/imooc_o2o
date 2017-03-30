<?php

// 定义index模块的自动生成
return [
/*    'index' => [
        '__dir__' => ['controller','model','view'],
        'controller' => ['User','UserType'],
        'model' => ['User','UserType'],
        'view' => ['index/index','index/test']
    ]*/
    'common' => [
        '__dir__' => ['model'],
        'model'=> ['Category','Admin'],
    ],
    'admin'=> [
        '__dir__' => ['controller','view'],
        'controller'=> ['Index'],
        'view' => ['index/index']
    ],
    'api'=>[
        '__dir__' => ['controller','view'],
        'controller'=>['Index','Image']
    ]


];


