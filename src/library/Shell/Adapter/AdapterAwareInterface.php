<?php
/**
 * interface file
 */
namespace AntiPhp\PhpShell\Shell\Adapter;

interface AdapterAwareInterface
{
    public function hasAdapter();
    public function getAdapter();
    public function setAdapter(AdapterInterface $adapter);
}