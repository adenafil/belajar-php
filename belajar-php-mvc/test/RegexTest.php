<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC;

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public function testRegex()
    {
        $path = "/products/12345/cetagories/abcd";

        $pattern = "#/products/([0-9a-zA-Z]*)/cetagories/([0-9a-zA-Z]*)#";

        $result = preg_match($pattern, $path, $variable);

        self::assertTrue($result == true, "Waduh Gagal boss" );

        var_dump($variable);

        array_shift($variable);

        var_dump($variable);
    }
}