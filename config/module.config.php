<?php
/**
работа с плагином Ckfinder визуального редактора 
 */

namespace Mf\Ckfinder;

use Laminas\Router\Http\Literal;

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
        'ckfinder1111' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/connector.php',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        'ckfinder222' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/connector',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'ckfinder333' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/connection',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
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
