<?php

namespace Helper
{
    class InputHelper {
        static public function input(string $info): string
        {
            echo "$info : ";
            $result = fgets(STDIN);
            return trim($result);

        }
    }
}