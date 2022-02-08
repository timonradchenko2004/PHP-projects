<?
/*
Задание 1.
Вывести на страницу «Hello World» (echo и print).
*/

//echo "Hello World <br>";
//print("Hello World");


/* 
Задание 2.
ESCAPE последовательности: вывести «Hello World»
в различных вариациях:
a) «Hello» в первой строке, «World» во второй;
b) «Hello» в первой строке, «World» во второй и с табуляцией;
c) Вывести на страницу строку: «Hello World. \”It’s my
page!”\»;
d)Вывести на страницу строку: <h1>Hello</h1> <h3>
World</h3> <b>I</b> <i>am</i> <u>a new PHP
developer</u>;
e) Вывести на страницу строку: <script>alert(‘Hello
World’); </script>.
*/

//a)
//echo "Hello\nWorld";

//b)
//echo "Hello\n\tWorld";

//c)
//echo 'Hello World. "It\'s my page!"';

//d)
//echo "<h1>Hello</h1><h3>World</h3> <b>I</b> <i>am</i> <u>a new PHP developer</u>";

//e
//echo "<script> alert('Hello World'); </script>";

/*
Задание 3.
Вывести значение, противоположное введенному 
в переменную (input "5", output "-5").
*/

$input = 5;
echo $input * -1;
