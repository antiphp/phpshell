<?php
/**
 * interface file
 */
namespace AntiPhp\PhpShell\Php\PhpClass;

interface NameAwareInterface
{
    public function hasName();
    public function getName();
    public function setName($name);
}