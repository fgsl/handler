<?php
/**
 * Fgsl Handler
 * @author Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 */
declare(strict_types=1);

namespace Fgsl\Handler;

use Fgsl\Handler\Model\AclFactory;
use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Mezzio\Router\RouterInterface;
use Mezzio\Template\TemplateRendererInterface;

abstract class AbstractAclHandlerFactory
{
    protected $handlerName = null;
    
    public function __invoke(ContainerInterface $container) : RequestHandlerInterface
    {
        $router   = $container->get(RouterInterface::class);
        $template = $container->get(TemplateRendererInterface::class);
        
        $acl = $container->get(AclFactory::class);

        $handlerName = $this->handlerName;
        return new $handlerName($acl, $router, $template);
    }
}