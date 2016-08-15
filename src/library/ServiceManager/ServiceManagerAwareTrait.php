<?php
/**
 * trait file
 */
namespace AntiPhp\PhpShell\ServiceManager;

use Zend\ServiceManager\ServiceLocatorInterface;

trait ServiceManagerAwareTrait
{
    private $serviceManager;

    public function getServiceManager()
    {
        if ($this->serviceManager === null) {
            throw new \BadMethodCallException('Service manager not set');
        }
        return $this->serviceManager;
    }

    public function setServiceManager(ServiceLocatorInterface $serviceManager)
    {
        $this->serviceManager = $serviceManager;
    }

    public function hasServiceManager()
    {
        return $this->serviceManager !== null;
    }

}