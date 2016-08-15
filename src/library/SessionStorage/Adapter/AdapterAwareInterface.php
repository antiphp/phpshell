<?php
/**
 * class file
 */
namespace AntiPhp\PhpShell\SessionStorage\Adapter;

interface AdapterAwareInterface
{
    public function hasAdapter();
    public function getAdapter();
    public function setAdapter(AdapterInterface $adapter);
}