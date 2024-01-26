<?php

echo "Decimal :";
var_dump(1234);
echo "Octal : ";
var_dump(01234);
echo "Hexadecimal : ";
var_dump(0x1A);
echo "Binary : ";
var_dump(0b11111111);
echo "Underscore di Number";
var_dump(1_234_567);

echo "Floating Point : ";
var_dump(1.234);
echo "Floating Point dengan E notation Plus (1.2 * 1000) : ";
var_dump(1.2e3);
echo "Floating Point dengan E notation Minus (7 * 0.001) : ";
var_dump(7e-3);
echo "Underscore di Floating Poin : ";
var_dump(1_234.567);

echo "Integer Overflow 32 Bit : ";
var_dump(2147483648);
echo "Integer Overflow 64 Bit : ";
var_dump(9223372036854775808);