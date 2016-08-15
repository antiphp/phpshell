<?php
/**
 * trait file
 */
namespace AntiPhp\PhpShell\SessionStorage;

trait SessionStorageAwareTrait
{
    private $sessionStorage;

    public function setSessionStorage(SessionStorageInterface $sessionStorage)
    {
        $this->sessionStorage = $sessionStorage;
    }

    public function getSessionStorage()
    {
        if ($this->sessionStorage === null) {
            throw new \BadMethodCallException('Session storage not set');
        }
        return $this->sessionStorage;
    }

    public function hasSessionStorage()
    {
        return $this->sessionStorage !== null;
    }
}