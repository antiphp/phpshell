<?php
/**
 * interface file
 */
namespace AntiPhp\PhpShell\ServiceManager;

use Zend\ServiceManager\ServiceLocatorInterface;

interface ServiceManagerAwareInterface
{
    public function hasServiceManager();
    public function getServiceManager();
    public function setServiceManager(ServiceLocatorInterface $serviceManager);
}