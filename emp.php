<?php

class Employee
{
    public function __call($method, $arguments)
    {
        if($method == "details")
        {
            echo "Employee Details:<br>";

            foreach($arguments as $value)
            {
                echo $value . "<br>";
            }
        }
    }
}

$obj = new Employee();

$obj->details("Rahul Sharma");

echo "<br>";

$obj->details("Rahul Sharma", 35000, "IT Department");

?>