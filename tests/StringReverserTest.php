<?php declare(strict_types=1);
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\StringReverser;
class StringReverserTest extends TestCase
{
    private StringReverser $reverser;
    protected function setUp(): void
    {
        $this->reverser = new StringReverser();
    }

    public function testSimpleCyrillicWord(): void
    {
        $this->assertEquals(
            'Привет',
            $this->reverser->reverseString('Тевирп')
        );
    }

    public function testSimpleEngWord(): void
    {
        $this->assertEquals(
            'Hello',
            $this->reverser->reverseString('Olleh')
        );
    }

    public function testWordWithHyphen(): void
    {
        $this->assertEquals(
            'third-part',
            $this->reverser->reverseString('driht-trap')
        );
    }

    public function testWordWithApostrophe(): void
    {
        $this->assertEquals(
            "third'part",
            $this->reverser->reverseString("driht'trap")
        );
    }
}