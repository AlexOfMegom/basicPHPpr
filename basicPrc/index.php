<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



//Комментарии
//Создать файл php. В начале файла добавить 2 комментария (однострочный и многострочный) с именем автора и датой выполнения. Напечатать приветствие при помощи echo.


// Выполнил Шалыгин Алексей 26.10.21

/*
    Выполнил Шалыгин Алексей
    26.10.21
*/

echo "Привет, я - скрипт PHP!<br>";
echo "<br>";

//Именование переменных
//    Придумайте и запишите имена переменных для таких сущностей: название телеканала, адрес производителя, цвет автомобиля, температура воды, модель телефона. Следуйте правилам именования переменных. Используйте lowerCamelCase для имен, составленных из двух и более слов.
echo "Придумайте и запишите имена переменных для таких сущностей: название телеканала, адрес производителя, цвет автомобиля, температура воды, модель телефона. Следуйте правилам именования переменных. Используйте lowerCamelCase для имен, составленных из двух и более слов.";
echo "<br>";
$tv;
$manufacturAdress;
$colorCar;
$tempWater;
$modelFone;
echo "<br>";

//Работа с переменными
//Создайте 3 переменных с произвольными именами на свой выбор. Присвойте им значения 3, 5, 8 соответственно. Выведите значения этих переменных на страницу.
echo "Создайте 3 переменных с произвольными именами на свой выбор. Присвойте им значения 3, 5, 8 соответственно. Выведите значения этих переменных на страницу.";
echo "<br>";
$x = 3;
$y = 5;
$z = 8;

echo "x = $x, y = $y, z = $z <br>";
echo "<br>";

//    Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).
echo "Создайте переменные a=10 и b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления). ";
echo "<br>";

$a=10;
$b=2;
echo "Cуммa, разность, произведение и частное (результат деления) - a и b"."<br>";
echo $a+$b."<br>",
$a-$b."<br>",
$a*$b."<br>",
$a/$b."<br>";
echo "<br>";

//    Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат присвойте переменной $result. Выведите на экран значение переменной $result.
echo "Создайте переменные ".'$c=15'." и ".'$b=2'.". Просуммируйте их, а результат присвойте переменной ".'$result'.". Выведите на экран значение переменной ".'$result'.".";   
echo "<br>";
$c = 15;
$d = 2;
$result = $c + $d;
echo "result = $result"."<br>";
echo "<br>";

//    Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.
echo " Создайте переменные a=17 и b=10. Отнимите от ".'$a'." переменную ".'$b'." и результат присвойте переменной ".'$c'.". Затем создайте переменную ".'$d'.", присвойте ей значение 7. Сложите переменные ".'$c'." и ".'$g'.", а результат запишите в переменную ".'$result'.". Выведите на экран значение переменной ".'$result'.".
";   
echo "<br>";
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result= $c + $d;
echo "result = $result"."<br>";
echo "<br>";

//    Найдите значение такого выражения: 2+6+2/5-1. Запишите его в переменную с именем $result и выведите на страницу.
echo " Найдите значение такого выражения: 2+6+2/5-1. Запишите его в переменную с именем result и выведите на страницу.";   
echo "<br>";
$result = 2+6+2/5-1;
echo "result = $result"."<br>";
echo "<br>";

//    Создайте переменную $text и присвойте ей значение 'Привет, Мир!'. Выведите значение этой переменной на экран.
echo " Создайте переменную text и присвойте ей значение 'Привет, Мир!'. Выведите значение этой переменной на экран.";   
echo "<br>";
$text = "Привет, Мир!";
echo $text."<br>";
echo "<br>";

//    Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.
echo "Создайте переменную name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.";   
echo "<br>";
$name = "Алексей";
echo "Привет, $name ! "."<br>";
echo "<br>";

//    Создайте переменную $age и присвойте ей ваш возраст. Выведите на экран 'Мне %Возраст% лет!'.
echo "Создайте переменную age и присвойте ей ваш возраст. Выведите на экран 'Мне %Возраст% лет!";   
echo "<br>";
//todo Лучше использовать другой тип данных
$age = 29;
echo "Мне  $age лет! "."<br>";
echo "<br>";

echo " Написать код, который будет формировать строку и выводить ее на экран, подставляя в нее значения переменных ".'$a'." и ".'$b'.".";   
echo "<br>";
/*   Написать код, который будет формировать строку и выводить ее на экран, подставляя в нее значения переменных $a и $b.
        Например:
        Дано: a = 10, b = 5.
        Результат: 5 из 10ти студентов посетили лекцию.
        Условия
        Строки в PHP можно формировать используя одинарные ' и двойные " кавычки.
        Решите эту задачу двумя способами с применением одинарных и двойных кавычек.
*/ 
// todo в каких случах нужно выводить через ${}, а когда можно обойтись без этого.
$a = 10;
$b = 5;
echo "${b} из ${a}ти студентов посетили лекцию"."<br>";
echo $b.' из '.$a.'ти студентов посетили лекцию'."<br>";
echo "<br>";

//    Создайте переменную $text и присвойте ей значение 'abcde'. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.
echo "Создайте переменную text и присвойте ей значение 'abcde'. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'. ";   
echo "<br>";
$text = 'abcde';
echo $text[0]."<br>";
echo $text[2]."<br>";
echo $text[4]."<br>";
echo "<br>";

//    Дана произвольная строка, например, 'abcde'. Поменяйте первую букву (то есть букву 'a') этой строки на '!'.
echo "Дана произвольная строка, например, 'abcde'. Поменяйте первую букву (то есть букву 'a') этой строки на '!'.";   
echo "<br>";
$text[0] = '!';
echo $text."<br>";
echo "<br>";

//    Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.
//todo переделать на реализацию без встроенных в php функций
echo "Создайте переменную num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.";   
echo "<br>";
$num = '12345';

$leng = strlen($num);
$sum  = 0;
for ($i = 0; $i <=$leng ; $i++){
    $sum += $i; 
}

echo $sum;
// echo array_sum(str_split($num))."<br>";
echo "<br>";

/* Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=. Количество строк кода при этом не должно измениться.
        $var = 47;
        $var = $var + 7;
        $var = $var - 18;
        $var = $var * 10;
        $var = $var / 20;
        echo $var;
 */

echo "Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=. Количество строк кода при этом не должно измениться.";   
echo "<br>";
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var."<br>";
echo "<br>";

/*  Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться.
        $text = 'Я';
        $text = $text.' хочу';
        $text = $text.' знать';
        $text = $text.' PHP!';
        echo $text;
 */

echo " Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться.";   
echo "<br>";
$text = 'Я';
$text .=' хочу';
$text .= ' знать';
$text .= ' PHP!';
echo $text."<br>";
echo "<br>";

/*Константы
    Создайте 2 константы с произвольными именами со значениями 41 и 33.
    Найдите и выведите сумму этих констант. */
//todo Изучить, как правильно именовать констранты
//todo Объявить одну константку через define и рассказать, в чем разница определения через define и через const (помимо синтаксиса).
    echo "Создайте 2 константы с произвольными именами со значениями 41 и 33.Найдите и выведите сумму этих констант";   
echo "<br>";
const x = 41;
define('y',33);

// define(x,41);
// define(y,33);
// echo x;
echo x+y."<br>";
echo "<br>";


//Массивы

//Создайте массив $arr=['a', 'b', 'c']. Выведите значение массива на экран с помощью функции var_dump().
echo "Создайте массив arr=['a', 'b', 'c']. Выведите значение массива на экран с помощью функции var_dump().";   
echo "<br>";
$arr=['a', 'b', 'c'];
var_dump($arr);
echo "<br>";

// С помощью массива $arr из предыдущего номера выведите на экран содержимое первого, второго и третьего элементов.
echo "С помощью массива arr из предыдущего номера выведите на экран содержимое первого, второго и третьего элементов.";   
echo "<br>";
$arr=['a', 'b', 'c'];
echo $arr[0]."<br>";
echo $arr[1]."<br>";
echo $arr[2]."<br>";
echo "<br>";

//    Создайте массив $arr=['a', 'b', 'c', 'd'] и с его помощью выведите на экран строку 'a+b, c+d'.
echo "Создайте массив arr=['a', 'b', 'c', 'd'] и с его помощью выведите на экран строку 'a+b, c+d'.";   
echo "<br>";
$arr=['a', 'b', 'c', 'd'];
echo $arr[0].'+'.$arr[1].','.$arr[2].'+'.$arr[3]."<br>";
echo "<br>";

//    Заполните массив $arr числами от 1 до 5. Не объявляйте массив, а просто заполните его присваиванием $arr[] = новое значение.
echo " Заполните массив arr числами от 1 до 5. Не объявляйте массив, а просто заполните его присваиванием arr[] = новое значение.";   
echo "<br>";
// todo прописывать индексы явно не нужно, если  не преслудуется цель назначить конкретные специальные индексы
echo "<br>";
$arrs[] = 1;
$arrs[] = 2;
$arrs[] = 3;
$arrs[] = 4;
$arrs[] = 5;
var_dump($arrs);
echo "<br>";
echo "<br>";

echo " Создайте массив arr. Выведите на экран элемент с ключом 'c'. ";   
echo "<br>";
//    Создайте массив $arr. Выведите на экран элемент с ключом 'c'. 
//     $arr = ['a'=>1, 'b'=>2, 'c'=>3];

echo "<br>";

$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr["c"]."<br>";
echo "<br>";


/*
  Создайте массив $arr. Найдите сумму элементов этого массива.
        $arr = ['a'=>1, 'b'=>2, 'c'=>3];
 */
echo "  Создайте массив arr. Найдите сумму элементов этого массива. ";   
echo "<br>";
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr["a"]+$arr["b"]+$arr["c"]."<br>";
echo "<br>";

//    Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели (понедельник - должен иметь ключ 1, вторник - 2 и т.д.). Выведите на экран текущий день недели.
//    Пусть теперь номер дня недели хранится в переменной $day, например там лежит число 3. Выведите день недели, соответствующий значению переменной $day.
echo " Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели (понедельник - должен иметь ключ 1, вторник - 2 и т.д.). Выведите на экран текущий день недели. ";   
// todo тут Warning будет, почему? 
echo ' Пусть теперь номер дня недели хранится в переменной $day, например там лежит число 3. Выведите день недели, соответствующий значению переменной $day.';   
echo "<br>";
// todo это не ассоциативный массив
$week = ['1'=>'понедельник', '2'=>'вторник','3'=>'среда','4'=>'четверг','5'=>'пятница','6'=>'суббота','7'=>'воскресение'];
$dateToDay = date('l');

if( $dateToDay == "Monday" ){
    echo $week['1']."<br>";
}
if( $dateToDay == "Tuesday" ){
    echo $week['2']."<br>";
}
if( $dateToDay == "Wednesday" ){
    echo $week['3']."<br>";
}
if( $dateToDay == "Thursday" ){
    echo $week['4']."<br>";
}
if( $dateToDay == "Friday" ){
    echo $week['5']."<br>";
}
if( $dateToDay == "Saturday" ){
    echo $week['6']."<br>";
}
if( $dateToDay == "Sunday" ){
    echo $week['7']."<br>";
}

$day = 3;


foreach ($week as $key=>$value) {
    if($key == $day){
        echo $value."<br>";
    }
}
echo "<br>";


/*Создайте многомерный массив $arr. С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный'.
        $arr = [
	        'cms'=>['joomla', 'wordpress', 'drupal'],
	        'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
        ];
 */

echo "  Создайте многомерный массив $arr. С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный' ";   
echo "<br>";
$arr = [
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];


echo $arr['cms'][0]."<br>";
echo $arr['cms'][2]."<br>";


echo $arr['colors']["green"]."<br>";
echo $arr['colors']["red"]."<br>";
echo "<br>";

/*
Создайте двухмерный массив. Первые два ключа - это 'ru' и 'en'. Пусть первый ключ содержит элемент, являющийся массивом названий дней недели по-русски, а второй - по-английски. Выведите с помощью этого массива понедельник по-русски и среду по английски (пусть понедельник - это первый день).
Пусть теперь в переменной $lang хранится язык (она принимает одно из значений или 'ru', или 'en' - либо то, либо то), а в переменной $day - номер дня. Выведите словом день недели, соответствующий переменным $lang и $day. То есть: если, к примеру, $lang = 'ru' и $day = 3 - то выведем 'среда'.
*/

echo "  Создайте двухмерный массив. Первые два ключа - это 'ru' и 'en'. Пусть первый ключ содержит элемент, являющийся массивом названий дней недели по-русски, а второй - по-английски. Выведите с помощью этого массива понедельник по-русски и среду по английски (пусть понедельник - это первый день). ";   
echo "Пусть теперь в переменной lang хранится язык (она принимает одно из значений или 'ru', или 'en' - либо то, либо то), а в переменной day - номер дня. Выведите словом день недели, соответствующий переменным lang и day. То есть: если, к примеру, lang = 'ru' и day = 3 - то выведем 'среда'.
";   
echo "<br>";

$arr = [
    'ru'=>[1=>'понедельник', 2=>'вторник',3=>'среда',4=>'четверг',5=>'пятница',6=>'суббота',7=>'воскресение'],
    'en'=>[1=>'Monday', 2=>'Tuesday',3=>'Wednesday',4=>'Thursday',5=>'Friday',6=>'Saturday',7=>'Sunday']
];

echo $arr['ru'][1]."<br>";
echo $arr['en'][3]."<br>";

$day = 2;
$lang = 'en';

// todo в задании нужно было просто подставить переменные в качестве ключей массива Исправил

// foreach ($arr as $keyDay=>$item){
//         if ($keyDay == $lang){
//             foreach ($item as $key => $value){
//                 if($key == $day){
//                     echo  $value;
//                     }
//                 }
//             }
// }

echo $arr[$lang][$day]."<br>";





        ?>
</body>
</html>