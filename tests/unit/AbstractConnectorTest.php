<?php

namespace Rewake\Tests\unit;

use Illuminate\Support\Collection;
use PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer;
use Rewake\Switchboard\AbstractConnector;
use PHPUnit\Framework\TestCase;
use Rewake\Switchboard\ConnectorInterface;
use Rewake\Switchboard\Connectors\RandomUserApi\RandomUserApiConnector;

class AbstractConnectorTest extends TestCase
{
    public function testCollectNullFails()
    {
        $connector = $this->createMock(AbstractConnector::class);
        $this->expectError();
        $connector->collect(null);
    }

    public function testCollectEmptyStringFails()
    {
        $connector = $this->createMock(AbstractConnector::class);
        $this->expectError();
        $connector->collect('');
    }

    public function testCollectEmptyArray()
    {
        $connector = $this->createMock(AbstractConnector::class);
        $this->assertInstanceOf(Collection::class, $connector->collect([]));
    }

    public function testCollectDataMatchesCollectionOutput()
    {
        $array = ["data" => "test"];
        $connector = $this->getMockForAbstractClass(AbstractConnector::class);
        $this->assertEquals($array, $connector->collect($array)->toArray());
    }
}
