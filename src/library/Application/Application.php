<?php
/**
 * class file
 */
namespace AntiPhp\PhpShell\Application;

use Symfony\Component\Console\Application as SymfonyApplication;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use Zend\ServiceManager\Config;
use Zend\ServiceManager\ServiceManager;

class Application
{
    public function run()
    {
        $application = new SymfonyApplication();
        $application->setName('AntiPHP PHP-Shell', '1.0.0-alpha');
        $application->setCatchExceptions(false);
        $application->setAutoExit(false);

        $serviceManagerConfig = new Config(require __DIR__ . '/../../config/service_manager.php');
        $serviceManager = new ServiceManager($serviceManagerConfig);
        $application->add($serviceManager->get(\AntiPhp\PhpShell\SessionStorage\SaveInterface::class));
        $application->add($serviceManager->get(\AntiPhp\PhpShell\Php\PhpClass\CreateInterface::class));

        while (true) {
            try {
                $input  = new StringInput(readline());
                $output = new ConsoleOutput();

                $application->run($input, $output);
            } catch (\Exception $e) {
                $output->writeln("<error>{$e->getMessage()}</error>");
            }
        }
    }
}