<?php

/**
 * The Service Manager component can be configured by passing an associative array to the component's constructor.
 *
 * @see https://zendframework.github.io/zend-servicemanager/configuring-the-service-manager/
 */


use Student\Repository\Catalog\StudentListRepositoryInterface;
use Student\Factory\Repository\StudentListRepositoryFactory;
use Student\Factory\Service\MasterListServiceFactory;
use Student\Service\Catalog\MasterListService;

return [
    'factories'             => [
        StudentListRepositoryInterface::class   => StudentListRepositoryFactory::class,
        MasterListService::class                => MasterListServiceFactory::class,
    ],
    'services'              => [],
    'abstract_factories'    => [],
    'delegators'            => [],
    'shared'                => [],
    'shared_by_default'     => true
];
