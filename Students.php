<?php 

class Students
{
    private $StudentsList = array();

    public function __construct()
    {

    }

    public function AddStudent($student)
    {
        array_push($this->StudentsList, (object)$student);
    }

    public function ListStudents()
    {
        foreach ($this->StudentsList as $item) 
        {
            echo $item->name;
          
        }
    }
}

?>