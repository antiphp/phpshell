<?php
/**
 * trait file
 */
namespace AntiPhp\PhpShell\SessionStorage\Adapter;

trait AdapterAwareTrait
{
    private $adapter;

    public function setAdapter(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function getAdapter()
    {
        if ($this->adapter === null) {
            throw new \BadMethodCallException('Adapter not set');
        }
        return $this->adapter;
    }

    public function hasAdapter()
    {
        return $this->adapter !== null;
    }
}