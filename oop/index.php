<?php 
class User {
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

class employee extends User {
    public function __construct($name, $email, $password, $title) {
      parent::__construct($name, $email, $password);
      $this->title = $title;
    }
  
    public function getTitle() {
      return $this->title;
    }
  }
  
  $employee1 = new employee('John','sak@gmail.com','123456','Manager');
  echo $employee1->getTitle();
  var_dump($employee1);

// $heroPerson = new Person('Heroo', 'Balam', 20000);
// echo $heroPerson->getName();

?>