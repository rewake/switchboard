<?php

namespace Rewake\Tests\unit;

use Rewake\Switchboard\ConnectorInterface;
use Rewake\Switchboard\Switchboard;
use PHPUnit\Framework\TestCase;

class SwitchboardTest extends TestCase
{
    public function testCanCreateSwitchboardClass()
    {
        $this->assertInstanceOf(Switchboard::class, new Switchboard());
    }

    public function testConnect()
    {
        $connector = $this->getMockClass(ConnectorInterface::class);
        $this->assertInstanceOf(Switchboard::class, Switchboard::connect($connector));
    }

    public function testSetSource()
    {
        $sb = new Switchboard();
        $connector = $this->createMock(ConnectorInterface::class);

        $sb->setSource($connector);
        $this->assertEquals($connector, $sb->source);
    }
}
