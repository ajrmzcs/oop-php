<?php

interface teamMember
{
    /**
     * @param $age
     * @param $type
     * @return mixed
     */
    public function enroll($age, $type);
}


class NewHire
{

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

    public function getAge()
    {
        return $this->age;
    }

    public function getName()
    {
        return $this->name;
    }

}

Class Player implements teamMember
{
    protected $newHire;
    protected $date;

    public function __construct(NewHire $newHire)
    {
        $this->newHire = $newHire;
    }

    public function enroll($age, $type)
    {
        $this->newHire->setAge($age);

        return $this->newHire->getName() . ' join the team as ' . $type;
    }
}

Class TechnicalDirector implements teamMember
{
    protected $newHire;

    public function __construct(NewHire $newHire)
    {
        $this->newHire = $newHire;
    }


    public function enroll($age, $type)
    {

        if ($type !== 'T.D.') {
            throw new Exception('Person MUST be a T.D. to fill this position in this team');
        }

        $this->newHire->setAge($age);

        if ($this->newHire->getAge() < 25) {
            throw new Exception('Person MUST be older than 25 to be a T.D. in this team');
        }

        return $this->newHire->getName() . ' join the team as ' . $type;
    }
}

$newHire = new NewHire('Antonio');
$player = (new Player($newHire))->enroll(19, 'PLAYER');

$person = new NewHire('Jose');
$td = (new TechnicalDirector($newHire))->enroll(34, 'T.D.');

var_dump($player, $td);


