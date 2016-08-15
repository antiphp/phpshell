<?php
/**
 * interface file
 */
namespace AntiPhp\PhpShell\SessionStorage;

interface SessionStorageAwareInterface
{
    public function hasSessionStorage();
    public function getSessionStorage();
    public function setSessionStorage(SessionStorageInterface $sessionStorage);
}