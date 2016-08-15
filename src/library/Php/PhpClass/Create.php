<?php
/**
 * class file
 */
namespace AntiPhp\PhpShell\Php\PhpClass;

use AntiPhp\PhpShell\Php\PhpNamespace\PhpNamespaceAwareInterface;
use AntiPhp\PhpShell\ServiceManager\ServiceManagerAwareInterface;
use AntiPhp\PhpShell\ServiceManager\ServiceManagerAwareTrait;
use AntiPhp\PhpShell\SessionStorage\SessionStorageInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zend\View\Renderer\RendererInterface;

class Create extends Command implements CreateInterface, ServiceManagerAwareInterface
{
    use ServiceManagerAwareTrait;

    protected function configure()
    {
        $this->setName('create_class');

        $this->addArgument(
            'name',
            InputArgument::REQUIRED,
            'Class name'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $class = $this->getServiceManager()->get(PhpClassInterface::class);
        $class->setName($input->getArgument('name'));

        $sessionStorage = $this->getServiceManager()->get(SessionStorageInterface::class);
        if ($class instanceof PhpNamespaceAwareInterface && $sessionStorage instanceof PhpNamespaceAwareInterface) {
            $namespace = $sessionStorage->getNamespace();
            $class->setNamespace($namespace);
        }

        $renderer = $this->getServiceManager()->get(RendererInterface::class);
        $output->writeln($renderer($class));
    }
}