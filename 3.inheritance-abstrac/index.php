<?php

abstract class User
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

    public abstract function enroll($age);
}

Class Member extends User
{
    protected $date;
    protected $member = false;

    public function enroll($age)
    {
        $this->setAge($age);
        $this->member = true;

        return $this->name . ' was enrolled as MEMBER, at his/her: ' . $this->getAge() . 'years';
    }
}

Class Administrator extends User
{
    protected $date;
    protected $member = false;

    public function enroll($age)
    {
        $this->setAge($age);
        $this->member = true;

        return $this->name . ' was enrolled as ADMNISTRATOR, at his/her: ' . $this->getAge() . 'years';
    }
}

//$member = new Member('Antonio');
//$enroll = $member->enroll(19);

$admin = new Administrator('Antonio');
$enroll = $admin->enroll(19);

var_dump($enroll);
