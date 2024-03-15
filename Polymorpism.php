<?php

    interface Greetable {
        public function greet();
    }

    class English implements Greetable {
        public function greet() {
            echo "Hello, nice to meet you!";
        }
    }

    class German implements Greetable {
        public function greet() {
            echo "Guten Tag, es freut mich Sie kennenzulernen!";
        }
    }

    class French implements Greetable {
        public function greet() {
            echo "Bonjour, ravi de vous rencontrer!";
        }
    }

    function greetSomeone(Greetable $person) {
        $person->greet();
    }

    $englishPerson = new English();
    $germanPerson = new German();
    $frenchPerson = new French();

    greetSomeone($englishPerson); // Output: Hello, nice to meet you!
    greetSomeone($germanPerson); // Output: Guten Tag, es freut mich Sie kennenzulernen!
    greetSomeone($frenchPerson); // Output: Bonjour, ravi de vous rencontrer!

?>