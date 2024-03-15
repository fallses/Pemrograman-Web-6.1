<?php
    // Interface definition
    interface Animal {
        public function makeSound();
    }

    //Class Definition
    class Cat implements Animal {
        public function makeSound() {
            echo "meow";
        }
    }

    class Dog implements Animal {
        public function makeSound() {
            echo "bark";
        }
    }
    class Mouse implements Animal {
        public function makeSound() {
            echo "Squeak";
        }
    }

    //create a list of animals
    $cat = new Cat ();
    $dog = new Dog ();
    $mouse = new Mouse ();
    $animals = array($cat, $dog, $mouse);

    // Tell the animals to make a sound
    foreach($animals as $animal) {
        $animal->makeSound();
    }
?>