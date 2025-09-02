<!--Hello World!

<h1>Hello World!</h1>

<style>
    h1 {
        color: blue;
    }
</style>

<script>
    alert("Hello World")
</script>-->

<?php
    //echo "Hello World!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1> This is my first PHP page </h1> -->
    <?php
        //echo "Hello World!";

        // Variable

        // $a = 5;
        // var_dump($a);

        // var_dump("John");
        // var_dump(3.14);
        // var_dump(true);
        // var_dump([1, 2, 3]);
        // var_dump(null);
        //echo $a;

        // Variable Scope

        // $a = 5;
        //echo $a;

        // function test ()
        // {
        //     static $a = 6;
        //     echo $a;
        //     echo "<br>";
        //     $a++;
        // }

        //  test(); // 6
        // test(); // 6
        // test(); // 6
        // test(); // 7
        // echo $a;

        // Echo and Print

        // echo ("Hello! <br>"), ("Hello! <br>");
        // echo "World! <br>", "World! <br>";
        // print ("Hello! <br>");
        // print "Hello! <br>";
        // // echo print("Hi!");

        // Data Types

        // $a  = "Ceejay"; //String
        // $b = 28; //Integer
        // $c = 3.14; //Float
        // $d = true; //Boolean
        // $e = [1,2,3]; //Array
        // $f = new stdClass(); //Object
        // $g = null; //Null
        // $h = fopen("php_practice.php", "r");

        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

        // Strings

        // $a = "blue";
        // $name = "<h1 style='color:$a'>Ceejay Estabillo";
        // $name = "<h1 style=\"color:$a\">Ceejay Estabillo";
        // $name = "Ceejay Estabillo";

        // // echo strlen($name), "<br>";
        // // echo str_word_count($name), "<br>";
        // // echo strpos($name, "Estabillo"), "<br>";
        // // echo strtoupper($name), "<br>";
        // // echo strtolower($name), "<br>";
        // // echo str_replace("Estabillo", "Lising", $name), "<br>";
        // // echo strrev($name), "<br>";
        // // echo trim($name), "<br>";
        // // echo print_r(explode("e", $name), "<br>");

        // Concatinate

        // $x = "Hello";
        // $y = "World!";
        // echo $x." ".$y ."<br>";
        // echo "$x $y". "<br>";
        // echo '$x $y'. "<br>";

        // Slicing

        // $x = "Hello";
        // echo substr($x, 1, 4), "<br>";
        // echo substr($x, 1), "<br>";
        // echo substr($x, -5, 2), "<br>";

        // Escape Characters

        // $a = "sample";
        // $x = "John \"Pogi\" Doe";
        // echo $x;

        // Numbers

        // $a = -1; //int
        // $b = 1.0; //float
        // $c = "5"; //string

        // echo PHP_INT_MAX, "<br>";
        // echo PHP_INT_MIN, "<br>";
        // echo PHP_INT_SIZE, "<br>";
        // echo is_int($c), "<br>";

        // echo PHP_FLOAT_MAX, "<br>";
        // echo PHP_FLOAT_MIN, "<br>";
        // echo PHP_FLOAT_DIG, "<br>";
        // echo PHP_FLOAT_EPSILON, "<br>";
        // echo is_float($b), "<br>";

        // echo is_numeric($c);

        $a  = "Ceejay"; //String
        $b = 28; //Integer
        $c = 3.14; //Float
        $d = true; //Boolean
        $e = [1,2,3]; //Array
        $f = new stdClass(); //Object
        $g = null; //Null
        $h = fopen("php_practice.php", "r"); //Resource

        
        // $a =  $a;
        // $b =  $b;
        // $c =  $c;
        // $d =  $d;
        // $e =  $e;
        // $f =  $f;
        // $g =  $g;
        // $h =  $h;

        // Casting - String

        // $a = (string) $a;
        // $b = (string) $b;
        // $c = (string) $c;
        // $d = (string) $d;
        // $e =  $e;
        // $f =  $f;
        // $g = (string) $g;
        // $h = (string) $h;

        // Casting - Int

        // $a = (int) $a;
        // $b = (int) $b;
        // $c = (int) $c;
        // $d = (int) $d;
        // $e = (int) $e;
        // $f =  $f;
        // $g = (int) $g;
        // $h = (int) $h;

        // Casting - Float

        // $a = (float) $a;
        // $b = (float) $b;
        // $c = (float) $c;
        // $d = (float) $d;
        // $e = (float) $e;
        // $f =  $f;
        // $g = (float) $g;
        // $h = (float) $h;

        // Casting - Boolean
        
        // $a = (bool) $a;
        // $b = (bool) $b;
        // $c = (bool) $c;
        // $d = (bool) $d;
        // $e = (bool) $e;
        // $f = (bool) $f;
        // $g = (bool) $g;
        // $h = (bool) $h;

        // Casting - Array

        // $a = (array) $a;
        // $b = (array) $b;
        // $c = (array) $c;
        // $d = (array) $d;
        // $e = (array) $e;
        // $f = (array) $f;
        // $g = (array) $g;
        // $h = (array) $h;


        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

        //PHP Math

        // $pi = pi();
        // echo $pi, "<br>";

        // $minNumber = min(300, 80, 4, 98, 3);
        // $maxNumber = max(300, 80, 4, 98, 3);

        // echo $minNumber, "<br>";
        // echo $maxNumber, "<br>";

        // $num = -5;
        // echo abs($num), "<br>";

        // $sqrt = sqrt(9);
        // echo $sqrt, "<br>";

        // $rounded = round(3.49, 1);
        // echo $rounded, "<br>";

        // echo PHP_INT_MAX, "<br>";
        // echo PHP_INT_MIN, "<br>";
        // echo rand(), "<br>";

        // echo rand(5, 30), "<br>";


        //PHP constant

        // define("GREETING", "Hello");
        // define("GREETING", 28);
        // echo GREETING;

        // define("GREETING", 39);
        // $x = 5;
        // function test(){         
        //     echo GREETING;
        // }
        // test()

        //PHP Operators
        //Arithmetic

        //Addition + SUM

        // echo 6 + 5 + 90, "<br>";
        // $x = 2;
        // $y = 2;

        // $y = $x + $y;
        // echo $y;

        //Subtract - difference

        // echo 7 - 2 - 10, "<br>";
        // echo 7 - 2 + 90, "<br>"; //PEMDAS

        //Multiplication * Product
        // echo 6 * 8 * 9, "<br>";

        //Division / Quotient
        // echo 6 / 8, "<br>";

        // MD AS
        // echo 13 + 6 / 2 * 2, "<br>";

        // //Modulus %
        // echo 5 % 2, "<br>";

        //Exponent **
        // echo 4 ** 2;


        // Assignment 
        // $x = 5;

        // +=
        // -=
        // /=
        // *=
        // %=

        // $x = $x + 10;
        // $x += 10;
        // echo $x;

        // Comparison

        // ==
        // var_dump(6 == 7);
        // var_dump(6 == "6");

        // ===
        // var_dump(6 === "6");

        // !=
        // var_dump(100 != 99);

        // !==
        // var_dump(100 !== 100);

        // >
        // var_dump(6 > 4);

        // >=
        // var_dump(6 >= 6);
        
        // <
        // var_dump(6 < 7);

        // <=>
        // echo 0 <=> 1;


        // ++ Increment
        // $x = 5;
        // Pre-increment
        // echo ++$x, "<br>";

        // $y = 5;
        // Post-increment
        // echo $y++, "<br>";
        // echo $y, "<br>";

        // Logical
        // AND &&
        // var_dump(true and true); // True
        // echo "<br>";
        // var_dump(6 == "6" and 6 > 9); // False
        // var_dump(true and false); // False
        // echo "<br>";

        // 0R ||
        // var_dump(false and false); // false
        // echo "<br>";
        // var_dump(6 == "6" |\ 6 > 9); // true
        // echo "<br>";

        // XOR
        // var_dump(false xor false);// true
        // echo "<br>";
        // var_dump(6 == "6" xor 6 > 9);
        // echo "<br>";

        // !
        // var_dump (!true); // false
        // echo "<br>";
        // var_dump(!6 == "6"); // true
        // echo "<br>";

        // String Operator
        // echo "Hello" . "World!";
        // $x = "Hello";
        // $x = $x . "World!";
        // $x .= "World!";
    ?>
</body>
</html>
