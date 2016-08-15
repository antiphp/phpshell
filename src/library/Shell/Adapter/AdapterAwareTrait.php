<?php
/**
 * trait file
 */
namespace AntiPhp\PhpShell\Shell\Adapter;

trait AdapterAwareTrait
{
    /**
     * @var AdapterInterface
     */
    private $adapter;

    /**
     * @param AdapterInterface $adapter
     */
    public function setAdapter(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @return AdapterInterface
     */
    public function getAdapter()
    {
        if ($this->adapter === null) {
           throw new \BadMethodCallException('Adapter not set');
        }
        return $this->adapter;
    }

    /**
     * @return bool
     */
    public function hasAdapter()
    {
        return $this->adapter !== null;
    }
}