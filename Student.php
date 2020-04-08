<?php 
class Student
{
    public $name;

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
}


?>