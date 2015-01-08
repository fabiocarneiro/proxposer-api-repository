<?php

namespace ZFBrasil\Proxposer\Api\Repository;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use ZF\Apigility\ApigilityModuleInterface;

class Module implements ConfigProviderInterface, ApigilityModuleInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfig()
    {
        return require __DIR__ . '/../module.config.php';
    }
}
