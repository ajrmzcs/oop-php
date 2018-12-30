<?php

Class Employee
{
    public $name;
    public $hourlyWage;
    public $active = false;
    public $tax;

    public function __construct($name, $hourlyWage)
    {
        $this->name = $name;
        $this->hourlyWage = $hourlyWage;
    }

    public function activate()
    {
        $this->active = true;
    }

    public function getMonthlySalary()
    {
        if ($this->active) {

            $salary = $this->hourlyWage * 8 * 6 * 4;
            return "Employee $this->name, has a monthly salary of: $salary";

        } else {

            return 'Employee must be active to get a monthly salary';

        }
    }
}

$employee = new Employee('Antonio', 25);
//$employee->activate();
$salary = $employee->getMonthlySalary();

echo 'Name: ' . $employee->name . "\n";
echo "Hourly wage: $employee->hourlyWage \n";
echo $salary;
