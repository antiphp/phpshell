<?php
/**
 * class file
 */
namespace AntiPhp\PhpShell\SessionStorage;

use AntiPhp\PhpShell\Php\PhpNamespace\PhpNamespaceAwareInterface;
use AntiPhp\PhpShell\Php\PhpNamespace\PhpNamespaceAwareTrait;

class SessionStorage
    implements
        SessionStorageInterface,
        PhpNamespaceAwareInterface
{
    use PhpNamespaceAwareTrait;
}