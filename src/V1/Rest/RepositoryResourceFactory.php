<?php

namespace ZFBrasil\Proxposer\Api\Repository\V1\Rest;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZFBrasil\RepositoryManager\Service\RepositoryManager;

class RepositoryResourceFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new RepositoryResource(
            $serviceLocator->get(RepositoryManager::class)
        );
    }
}
