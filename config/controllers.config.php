<?php

/**
 * We inform the application about controllers we expect to have in the application.
 *
 * @see https://zendframework.github.io/zend-mvc/quick-start/#create-a-route
 */

use Student\Controller;
use Student\Factory;

return [
    'factories' => [
        Controller\MasterListController::class   => Factory\Controller\MasterListControllerFactory::class,
    ]
];
