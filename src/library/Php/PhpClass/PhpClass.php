<?php
/**
 * class file
 */
namespace AntiPhp\PhpShell\Php\PhpClass;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;

class PhpClass
    implements
        PhpClassInterface,
        ServiceLocatorAwareInterface,
        NameAwareInterface
{
    use ServiceLocatorAwareTrait;
    use NameAwareTrait;
}