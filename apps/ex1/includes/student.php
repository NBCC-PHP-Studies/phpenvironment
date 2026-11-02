<?php
    class Student {
        // Properties
        public $firstName;
        public $lastName;

        // Constructor
        public function __construct($firstName, $lastName) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

        // Method
        public function getFullName() {
            return $this->firstName . " " . $this->lastName;
        }
    }
?>