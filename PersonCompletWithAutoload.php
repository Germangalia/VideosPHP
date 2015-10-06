<?php
require 'vendor\autoload.php';


$jeffrey = new Acme\Person ('Jeffrey Way');

$staff = new Acme\Staff([$jeffrey]);

$laracasts = new Acme\Business($staff);

$laracasts->hire(new Acme\Person 'Jane Due');

var_dump($laracasts->getStuffMembers());