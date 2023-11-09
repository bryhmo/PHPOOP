<?php

interface Students_List
{
    // public function getRegisterStudent();
    // the function that implement the interface needs to redeclare the method but the variable constant is been inherited
    const student1 = 'This is an interface constant'.'<br>';
}

//prints : interface constant
// echo Students_List::student1;

class One_Student implements Students_List
{
    const oneStudent = 'this is the class of constant'.'<br>';
}

// Prints: Class constant
echo One_Student::oneStudent;
echo One_Student::student1;
?>