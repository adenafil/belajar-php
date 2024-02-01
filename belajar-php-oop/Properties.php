<?php

require "./data/Person.php";

/**
 * Manipulasi Properties
 * 
 * -Fields yang ada di object, bisa kita manpulasi
 * -Untuk memanipulasi data field, sama seperti cara pada variable
 * -Untuk mengakses field, kita butuh kata kunci -> setelah nama object dan diikuti nama fieldsnya
 */

//  Kode : Manipulasi Properties
$person = new Person();
$person->name = "ade";
$person->address = "Berau";
// $person->country = "Indonesia";

var_dump($person);

echo "Name : {$person->name}\n";
echo "Address : {$person->address}\n";
echo "Country : {$person->country}";