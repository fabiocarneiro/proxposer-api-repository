<?php

use Doctrine\Common\Collections\ArrayCollection;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject;
use Zend\Mvc\Router\Http\Segment;
use ZFBrasil\RepositoryManager\Model\SelectableRepository;
use ZFBrasil\Proxposer\Api\Repository;
use ZFBrasil\Proxposer\Api\Repository\V1\Rest\RepositoryResource;
use ZFBrasil\Proxposer\Api\Repository\V1\InputFilter\Repository as InputFilter;
use ZFBrasil\RepositoryManager\DTO\Repository as DTO;
use ZFBrasil\Proxposer\Api\Repository\V1\Rest\RepositoryResourceFactory;

return [
    'router' => [
        'routes' => [
            'api.rest.repository' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/repository[/:id]',
                    'constraints' => [
                        'id' => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => 'ZFBrasil\Proxposer\Api\Repository\V1\Rest\Controller',
                    ],
                ],
            ],
        ]
    ],
    'service_manager' => [
        'factories' => [
            RepositoryResource::class => RepositoryResourceFactory::class
        ]
    ],
    'zf-rest' => [
        'ZFBrasil\Proxposer\Api\Repository\V1\Rest\Controller' => [
            'listener' => RepositoryResource::class,
            'route_name' => 'api.rest.repository',
            'route_identifier_name' => 'id',
            'collection_name' => 'repository',
            'resource_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => 'page_size',
            'entity_class' => DTO::class,
            'entity_identifier_name' => 'id',
            'service_name' => Repository::class,
            'collection_class' => ArrayCollection::class,
            'entity_http_methods' => [
                0 => 'GET',
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'api.rest.repository',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'ZFBrasil\Proxposer\Api\Repository\V1\Rest\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'ZFBrasil\Proxposer\Api\Repository\V1\Rest\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'ZFBrasil\Proxposer\Api\Repository\V1\Rest\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'renderer' => [
            'hydrators' => [
                SelectableRepository::class => DoctrineObject::class,
            ],
        ],
        'metadata_map' => [
            SelectableRepository::class => [
                'hydrator' => DoctrineObject::class,
                'route_name' => 'api.rest.repository',
                'is_collection' => false,
                'route_identifier_name' => 'id',
                'entity_identifier_name' => 'id',
            ],
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'ZFBrasil\Proxposer\Api\Repository\V1\Rest\Controller' => [
                'resource' => [
                    'GET' => false,
                    'POST' => false,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ],
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
    'zf-content-validation' => [
        'ZFBrasil\Proxposer\Api\Repository\V1\Rest\Controller' => [
            'input_filter' => InputFilter::class,
        ],
    ],
];
