<?php
/**
работа с плагином Ckfinder визуального редактора 
 */

namespace Mf\Ckfinder;

use Zend\Router\Http\Literal;

return [
  //маршруты
    'router' => [
        'routes' => [
            'ckfinder' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/connection.php',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],

        ],
    ],
    //контроллеры
    'controllers' => [
      'invokables' => [
          Controller\IndexController::class => Controller\IndexController::class,
      ],
    ],
];
