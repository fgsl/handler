<?php
/**
 * Fgsl Handler
 * @author Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 */
namespace Fgsl\Test\Handler;

use PHPUnit\Framework\TestCase;
use Fgsl\Handler\Model\AclFactory;
use Fgsl\Handler\AclHandler;
use Fgsl\Handler\AclHandlerFactory;
use Fgsl\Handler\LogoutHandler;
use Fgsl\Handler\LogoutHandlerFactory;
use Fgsl\Handler\Middleware\SessionMiddleware;

/**
 *  test case.
 *  @covers AclFactory
 *  @covers AclHandler
 *  @covers AclHandlerFactory
 *  @covers LogoutHandler
 *  @covers LogoutHandlerFactory
 *  @covers SessionMiddleware
 */
class HandlerTest extends TestCase
{
    public function testInstances()
    {
        $this->assertTrue(class_exists(AclFactory::class));
        $this->assertTrue(class_exists(AclHandler::class));
        $this->assertTrue(class_exists(AclHandlerFactory::class));
        $this->assertTrue(class_exists(LogoutHandler::class));
        $this->assertTrue(class_exists(LogoutHandlerFactory::class));
        $this->assertTrue(class_exists(SessionMiddleware::class));
    }    
}