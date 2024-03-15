<?php

    interface Flyable {
        public function fly();
    }

    abstract class Animal {
        abstract public function makeSound();
    }

    class Dog extends Animal {
        public function makeSound() {
            echo "Woof woof!";
        }
    }

    class Cat extends Animal {
        public function makeSound() {
            echo "Meow!";
        }
    }

    class Bird extends Animal implements Flyable {
        public function makeSound() {
            echo "Tweet tweet!";
        }

        public function fly() {
            echo "Flapping wings!";
        }
    }

    function makeSound(Animal $animal) {
        $animal->makeSound();
    }

    function fly(Flyable $flyable) {
        $flyable->fly();
    }

    $dog = new Dog();
    $cat = new Cat();
    $bird = new Bird();

    makeSound($dog); // Output: Woof woof!
    makeSound($cat); // Output: Meow!
    makeSound($bird); // Output: Tweet tweet!

    fly($bird); // Output: Flapping wings!

?>