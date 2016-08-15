<?php
/**
 * class file
 */
namespace AntiPhp\PhpShell\Shell;

use AntiPhp\PhpShell\Shell\Adapter\AdapterAwareInterface;
use AntiPhp\PhpShell\Shell\Adapter\AdapterAwareTrait;
use Symfony\Component\Console\Output\ConsoleOutput;

class Shell implements AdapterAwareInterface
{
    use AdapterAwareTrait;

    public function __invoke()
    {
    }
}