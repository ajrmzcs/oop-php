<?php

//require('scr/Business.php');
//require('scr/Person.php');
//require('scr/Staff.php');

require('vendor/autoload.php');

$founder = new App\Person('John Doe');

$staff = new App\Staff([$founder]);

$business = new \App\Business($staff);

$business->hire(new App\Person('Jane Doe'));

var_dump($business->getStaffMembers());
