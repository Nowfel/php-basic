<?php 
class Person {
    public $firstName;
    public $lastName;
    public $salary;

    public function __construct($firstName, $lastName, $salary) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }

    function getName() {
        return $this->firstName;
      }
    
}

$heroPerson = new Person('hasan', 'sakib', 20000);
var_dump($heroPerson);
echo $heroPerson->getName();

?>