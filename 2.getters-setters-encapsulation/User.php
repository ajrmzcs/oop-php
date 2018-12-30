<?php

class User
{
    /**
     * http://php.net/manual/en/language.oop5.visibility.php
     * public can be accessed everywhere
     * protected can be accessed only within the class itself and by inheriting and parent classes
     * private may only be accessed by the class that defines the member
     */

    protected $name, $age = 0;

    /**
     * User constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param $age
     * @throws Exception
     */
    public function setAge($age)
    {
        if (!is_int($age) || $age < 18) {

            throw new Exception('Invalid age or lesser than 18');

        }

        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

}


$user = new User('Antonio');

//$user->age = 27;
$user->setAge(36);
//$user->setAge("19A");
$age = $user->getAge();
//$age = $user->age;

//echo "User is $age y.old";
echo "User is $age y.old";
