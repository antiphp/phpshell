<?php
/**
 * class file
 */
namespace AntiPhp\PhpShell\SessionStorage;

use Zend\ServiceManager\InitializerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Initializer implements InitializerInterface
{
    public function initialize($instance, ServiceLocatorInterface $serviceLocator)
    {
        if ($instance instanceof SessionStorageAwareInterface) {
            $instance->setSessionStorage($serviceLocator->get(SessionStorageInterface::class));
        }
    }

}