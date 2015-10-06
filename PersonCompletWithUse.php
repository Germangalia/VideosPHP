<?php
use Acme\Person; 
use Acme\Business; 
use Acme\Staff; 

$jeffrey = new Person ('Jeffrey Way');

$staff = new Staff([$jeffrey]);

$laracasts = new Business($staff);

$laracasts->hire(new Person 'Jane Due');

var_dump($laracasts->getStuffMembers());