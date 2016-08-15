<?php
/**
 * interface file
 */
namespace AntiPhp\PhpShell\Php\PhpNamespace;

interface PhpNamespaceAwareInterface
{
    public function hasNamespace();
    public function getNamespace();
    public function setNamespace(PhpNamespaceInterface $namespace);
}