<?php 
interface lincoln 
{
     public function students(string $arg):string ;
     public function students_Number(int $arg):int ;

}

// An abstract class may implement only a portion of an interface.
// Classes that extend the abstract class must implement the rest.

abstract class lincolnStaff implements lincoln
{
    public function students(string $arg): string
    {
        return $arg.'<br>';
    }
}

//the class that extends the abstract class must implement the rest of the method of the interfaces

class CSEStudent extends lincolnStaff
{
    public function students_Number(int $arg): int
    {
        return $arg *2;
    }
}
?>