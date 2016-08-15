<?php
/**
 * class file
 */
namespace AntiPhp\PhpShell\SessionStorage;

use AntiPhp\PhpShell\Php\PhpNamespace\PhpNamespaceAwareInterface;
use AntiPhp\PhpShell\Php\PhpNamespace\PhpNamespaceInterface;
use AntiPhp\PhpShell\ServiceManager\ServiceManagerAwareInterface;
use AntiPhp\PhpShell\ServiceManager\ServiceManagerAwareTrait;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Save extends Command implements SaveInterface, ServiceManagerAwareInterface
{
    use ServiceManagerAwareTrait;

    protected function configure()
    {
        $this->setName('save');

        $this->addArgument(
            'key',
            InputArgument::REQUIRED,
            'Key'
        );
        $this->addArgument(
            'value',
            InputArgument::REQUIRED,
            'Value'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $sessionStorage = $this->getServiceManager()->get(SessionStorageInterface::class);

        switch ($input->getArgument('key')) {
            case 'namespace':
                // fall through
            case 'namespace.name':
                $namespace = $this->getServiceManager()->get(PhpNamespaceInterface::class);
                $namespace->setName($input->getArgument('value'));

                if ($sessionStorage instanceof PhpNamespaceAwareInterface) {
                    $sessionStorage->setNamespace($namespace);
                }

                $output->writeln("Namespace: <info>{$namespace->getName()}");
                break;
        }
    }
}