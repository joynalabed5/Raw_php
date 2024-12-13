//In a class, variables are called properties and functions are called methods!

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
?>


// An Easy Concept of oop


<?php
class Person {
    // Properties to store the first and last name of a person
    public $firstName; // Will hold the first name
    public $lastName;  // Will hold the last name

    // Method to set the full name (assigns values to firstName and lastName)
    public function setFullName($firstName, $lastName) {
        $this->firstName = $firstName; // Assign the provided first name to the object's property
        $this->lastName = $lastName;   // Assign the provided last name to the object's property
    }

    // Method to get the full name (combines firstName and lastName)
    public function getFullName() {
        return $this->firstName . " " . $this->lastName; // Combine firstName and lastName with a space in between and return it
    }
}

// Create an instance of the Person class
$person = new Person(); // A new person object is created with firstName and lastName as null initially

// Set the full name for the person object
$person->setFullName("John", "Doe"); 
// Here:
// 1. The "setFullName" method is called with arguments "John" and "Doe".
// 2. Inside the method:
//    - $this->firstName is set to "John"
//    - $this->lastName is set to "Doe"

// Get and display the full name of the person
echo $person->getFullName(); 
// Here:
// 1. The "getFullName" method is called.
// 2. Inside the method:
//    - The firstName ("John") and lastName ("Doe") are combined into a single string "John Doe" with a space in between.
// 3. The combined string "John Doe" is returned and displayed on the screen.

?>