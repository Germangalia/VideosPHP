<?php
require 'src/Person.php';
require 'src/Business.php';
require 'src/Staff.php';


$jeffrey = new Person ('Jeffrey Way');

$staff = new Staff([$jeffrey]);

$laracasts = new Business($staff);

$laracasts->hire(new Person 'Jane Due');

var_dump($laracasts->getStuffMembers());
?>