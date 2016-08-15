<?php
/**
 * class file
 */
namespace AntiPhp\PhpShell\Renderer;

use AntiPhp\PhpShell\Php\PhpClass\PhpClassInterface;
use AntiPhp\PhpShell\ServiceManager\ServiceManagerAwareInterface;
use AntiPhp\PhpShell\ServiceManager\ServiceManagerAwareTrait;
use Zend\View\Renderer\RendererInterface;

class ZendView implements ServiceManagerAwareInterface
{
    use ServiceManagerAwareTrait;

    public function __invoke(PhpInterface $phpObject)
    {
        $renderer = $this->getServiceManager()->get(RendererInterface::class);

        if ($phpObject instanceof PhpClassInterface) {
            return $renderer->render('php/class');
        }

        $className = get_class($phpObject);
        throw new \InvalidArgumentException("Rendering not supported [$className]");
    }
}