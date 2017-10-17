<?php
/**
работа с плагином Ckfinder визуального редактора 
 */

namespace Ckfinder;

use Zend\Router\Http\Literal;




return [
	//маршруты
    'router' => [
        'routes' => [
            'ckfinder' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/connector.php',
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
