<?php

class User
{
    public $name;
    public $email;
    public $password;

    function set_name($name)
    {
        $this->name = $name;
    }

    function set_email($email)
    {
        $this->email = $email;
    }

    function set_password($password)
    {
        $this->password = $password;
    }

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}

$user1 = new User("John Doe", "test@test.com", "12345678");


var_dump($user1);

class Employees extends User
{
    public $salary;
    public $designation;

    public function __construct($name, $email, $password, $salary, $designation)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->salary = $salary;
        $this->designation = $designation;
    }
}

$employee = new Employees("Jane Dee", "test1@test.com", "12345678", "500$", "Manager");

var_dump($employee);
?>