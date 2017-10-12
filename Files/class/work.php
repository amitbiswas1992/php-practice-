<?php

include 'person.php';

$person = new Person;

$person->name = 'Abid';

$person->age = 20;

echo $person->sentence();
