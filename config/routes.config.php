<?php

/**
 * Sample Application Route
 *
 * Most of the routing definitions will be done in module configuration files.
 *
 * @see https://docs.zendframework.com/zend-router/routing/
 *
 */

use Zend\Router\Http\Literal;
use Student\Controller;

return [    
    'student' => [
        'type'          => Literal::class,
        'options'       => [
            'route'     => '/student',
            'defaults'  => [
                'controller'    => Controller\MasterListController::class,
                'action'        => 'index'
            ]
        ],
        'may_terminate' => true,
        'child_routes'  => [
            'admission' => [
                'type'      => Literal::class,
                'options'   => [
                    'route'     => '/admission',
                    'defaults'  => [
                        'controller'    => Controller\AdmissionController::class,
                        'action'    => 'history'
                    ]
                ]
            ],
            'history'   => [
                'type'      => Literal::class,
                'options'   => [
                    'route'     => '/history',
                    'defaults'  => [
                        'action'    => 'history'
                    ]
                ]
            ],
            'scholars'  => [
                'type'      => Literal::class,
                'options'   => [
                    'route'     => '/scholars',
                    'defaults'  => [
                        'action'    => 'scholars'
                    ]
                ]
            ],
            'current'   => [
                'type'      => Literal::class,
                'options'   => [
                    'route'     => '/current',
                    'defaults'  => [
                        'action'    => 'current'
                    ]
                ]
            ],
            'alumni'    => [
                'type'      => Literal::class,
                'options'   => [
                    'route'     => '/alumni',
                    'defaults'  => [
                        'action'    => 'alumni'
                    ]
                ]
            ]
        ]
    ]
 ];
