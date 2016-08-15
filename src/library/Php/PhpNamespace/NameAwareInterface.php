<?php
/**
 * interface file
 */
namespace AntiPhp\PhpShell\Php\PhpNamespace;

interface NameAwareInterface
{
    public function hasName();
    public function getName();
    public function setName($name);
}