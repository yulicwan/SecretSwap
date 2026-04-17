<?php
/**
 * Tests for SecretSwap
 */

use PHPUnit\Framework\TestCase;
use Secretswap\Secretswap;

class SecretswapTest extends TestCase {
    private Secretswap $instance;

    protected function setUp(): void {
        $this->instance = new Secretswap(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Secretswap::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
