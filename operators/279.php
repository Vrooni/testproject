<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class User
    {
        const AGE = 25;
        public static $name = "Markus";

        public static function greets()
        {
            return "Hello";
        }
    };

    class Person extends User
    {
        public static function hello()
        {
            return parent::greets();
        }
    }


    echo User::greets() . " " . User::$name . " " . User::AGE . "<br>";
    echo Person::hello() . " " . Person::$name;
    ?>

</body>

</html>