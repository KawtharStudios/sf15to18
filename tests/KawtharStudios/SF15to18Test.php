<?php

namespace KawtharStudios;

use PHPUnit\Framework\TestCase;

class SF15to18Test extends TestCase
{
    public static function provideTestDate(): array
    {
        return [
            // ['15-char' , '18-char']
            0 => ['001550V000WOQZi', '001550V000WOQZiACP'],
            1 => ['00255E00S0QO6Ki', '00255E00S0QO6KiAJL'],
            2 => ['00355DW080XO9Ei', '00355DW080XO9EiADL'],
            3 => ['00455C00K0IOBRi', '00455C00K0IOBRiAJP'],
            4 => ['00555B50R0PO2Bi', '00555B50R0PO2BiAJL'],
            5 => ['00655A0010QO1Ai', '00655A0010QO1AiABL']
        ];
    }

    /**
     * @dataProvider provideTestDate
     */
    public function test_convert(string $char15, string $expected): void
    {
        $this->assertEquals($expected, SF15to18::convert($char15));
    }
}
