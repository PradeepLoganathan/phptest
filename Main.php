<?php 
include 'Student.php';
include 'Students.php';

$abhi = new Student;
$abhi->set_name('Abhinav');

$cait = new Student;
$cait->set_name('Caitlin');

$dan = new Student;
$dan->set_name('danielle');


$StudentsDb = new Students;

$StudentsDb->AddStudent($abhi);
$StudentsDb->AddStudent($cait);
$StudentsDb->AddStudent($dan);

$StudentsDb->ListStudents();
?>