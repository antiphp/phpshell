<?php
/**
 * class file
 */
namespace AntiPhp\PhpShell\ServiceManager;

use Zend\ServiceManager\InitializerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Initializer implements InitializerInterface
{
    public function initialize($instance, ServiceLocatorInterface $serviceLocator)
    {
        if ($instance instanceof ServiceManagerAwareInterface) {
            $instance->setServiceManager($serviceLocator);
        }
    }
}