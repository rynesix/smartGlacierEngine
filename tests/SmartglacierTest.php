<?php
/**
 * Tests for smartGlacier
 */

use PHPUnit\Framework\TestCase;
use Smartglacier\Smartglacier;

class SmartglacierTest extends TestCase {
    private Smartglacier $instance;

    protected function setUp(): void {
        $this->instance = new Smartglacier(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Smartglacier::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
