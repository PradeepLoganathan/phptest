<?php 
class Student
{
    public $name;
    public $address;

    function __construct()
    {        
        $this->name = 'defaultstudentname';
    }

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        echo $this->name;
        return $this->name;
    }

    function set_address($address)
    {
        $this->address = $address;
    }

    function get_address()
    {
        echo $this->address;
        return $this->address;
    }
}


?>