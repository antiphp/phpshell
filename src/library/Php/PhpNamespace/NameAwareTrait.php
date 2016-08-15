<?php
/**
 * trait file
 */
namespace AntiPhp\PhpShell\Php\PhpNamespace;

trait NameAwareTrait
{
    private $name;

    public function setName($name)
    {
        if ($name !== null) {
            if (!is_array($name)) {
                $name = explode("\\", $name);
            }
            $name = array_map('trim', $name);
            $name = array_filter($name);
            $name = implode("\\", $name);
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