<?php
/**
 * trait file
 */
namespace AntiPhp\PhpShell\Php\PhpNamespace;

trait PhpNamespaceAwareTrait
{
    private $namespace;

    public function hasNamespace()
    {
        return $this->namespace !== null;
    }

    public function getNamespace()
    {
        if ($this->namespace === null) {
            throw new \BadMethodCallException('Namespace not set');
        }
        return $this->namespace;
    }

    public function setNamespace(PhpNamespaceInterface $namespace)
    {
        $this->namespace = $namespace;
    }
}