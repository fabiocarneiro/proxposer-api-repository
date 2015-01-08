<?php

namespace ZFBrasil\Proxposer\Api\Repository;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\DependencyIndicatorInterface;
use ZF\Apigility\ApigilityModuleInterface;
use ZFBrasil\Proxposer\Api;

class Module implements ConfigProviderInterface, DependencyIndicatorInterface, ApigilityModuleInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfig()
    {
        return require __DIR__ . '/../module.config.php';
    }

    /**
     * Expected to return an array of modules on which the current one depends
     * on
     *
     * @return array
     */
    public function getModuleDependencies()
    {
        return [
            Api::class
        ];
    }
}
