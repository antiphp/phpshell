<?php
/**
 * trait file
 */
namespace AntiPhp\PhpShell\Php\PhpClass;

trait NameAwareTrait
{
    private $name;

    public function setName($name)
    {
        $name = (string)$name;
        $name = trim($name);
        if ($name === '') {
            $name = null;
        }
        $this->name = $name;
    }

    public function getName()
    {
        if ($this->name === null) {
            throw new \BadMethodCallException('Name not set');
        }
        return $this->name;
    }

    public function hasName()
    {
        return $this->name !== null;
    }
}