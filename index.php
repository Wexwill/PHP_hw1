<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    echo 'TASK 1' . '<br />';
    date_default_timezone_set('Europe/Moscow');
    $hours = date("G");
    $minutes = date("i");
    $seconds = date("s");
    echo 'Секунд в сутках: ' . ($hours * 3600 + $minutes * 60 + $seconds);
    echo '<hr />';

    echo 'TASK 2' . '<br />';
    $a = 3;
    echo $a;
    echo '<hr />';

    echo 'TASK 3' . '<br />';
    $a = 10;
    $b = 2;
    echo $a + $b . '<br />';
    echo $a - $b . '<br />';
    echo $a * $b . '<br />';
    echo $a / $b . '<br />';
    echo '<hr />';

    echo 'TASK 4' . '<br />';
    $c = 15;
    $d = 2;
    $result = $c + $d;
    echo $result;
    echo '<hr />';

    echo 'TASK 5' . '<br />';
    $x = 2;
    $y = 6;
    $z = 9;
    $result = ($x + 1) * 4 - 2 * ($z - 2 * $x ** 2 + $y ** 2);
    // $result = ++$x * 4 - 2 * ($z - 2 * $x ** 2 + $y ** 2);
    echo $result;
    echo '<hr />';

    echo 'TASK 6' . '<br />';
    $a = 4;
    $b = 8;
    $c = 3;
    echo ($a + $b) / $c . '<br />';
    echo ($a + $c) / $b . '<br />';
    echo ($b + $c) / $a;
    echo '<hr />';

    echo 'TASK 7' . '<br />';
    $a = 4;
    $b = 8;
    $c = 3;
    echo ($a + $b) / $c . '<br />';
    echo ($a + $c) / $b . '<br />';
    echo ($b + $c) / $a;
    echo '<hr />';
    
    echo 'TASK 8' . '<br />';
    $a = 10;
    $b = 2;
    $c = 5;
    echo $a + $b + $c;
    echo '<hr />';

    echo 'TASK 9' . '<br />';
    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo $result;
    echo '<hr />';

    echo 'TASK 10' . '<br />';
    $text = 'Привет, Мир!';
    echo $text;
    echo '<hr />';

    echo 'TASK 11' . '<br />';
    $text1 = 'Привет, ';
    $text2 = 'Мир!';
    echo "{$text1}{$text2}";
    echo '<hr />';

    echo 'TASK 12' . '<br />';
    $name = 'Andrey';
    echo 'Привет, ' . $name . '!';
    echo '<hr />';

    echo 'TASK 13' . '<br />';
    $name = 'Andrey';
    echo 'Привет, ' . $name . '!';
    echo '<hr />';

    echo 'TASK 14' . '<br />';
    $text = 'abcde';
    echo $text[0] . ' ' . $text[2] . ' ' . $text[4];
    echo '<hr />';

    echo 'TASK 15' . '<br />';
    $text = 'abcde';
    $text[0] = '!';
    echo $text;
    echo '<hr />';

    echo 'TASK 16' . '<br />';
    $num = '12345';
    $result = +$num[0] + +$num[1] + +$num[2] + +$num[3] + +$num[4]; 
    echo $result;
    echo '<hr />';

    echo 'TASK 17' . '<br />';
    $a = 60 * 60;
	$b = $a * 24;
	$c = $b * 30;
	$d = $c * 365;
	$e = date("Y");
	$f = $e - 2000;
	$g = $d * $f + date("n") * $c + date("z") * $b + date("H") * $a + date("s");

	echo 'В часе: ' . $a . ' секунд. ';
	echo 'В сутках: ' . $b . ' секунд. ';
	echo 'В месяце: ' . $c . ' секунд. ';
	echo 'В году: ' . $d . ' секунд. ';
	echo 'С начала 2000 года прошло: ' . $g . ' секунд. </p>';
    echo '<hr />';

    echo 'TASK 18' . '<br />';
    $hour = date("H");
    $minutes = date("i");
	$seconds = date("s");
    echo "{$hour}:{$minutes}:{$seconds}";
    echo '<hr />';

    echo 'TASK 19' . '<br />';
    $a = 10;
    echo $a ** 2;
    echo '<hr />';

    echo 'TASK 20' . '<br />';
    $var = 1;
    $var += 12;
    $var -= 14;
    $var *= 5;
    $var /= 7;
    $var = ++$var;
    $var = --$var;
    echo $var;
    echo '<hr />';

    echo 'TASK 21' . '<br />';
    define('SURNAME', 'Надежкин');
    $name = 'Андрей';
    $patronymic = 'Сергеевич';
    $surname = SURNAME;
    $age = 24;
    var_dump(defined($surname));
    echo '<br />Меня зовут ' . $surname . '(' . $name[0] . '.' . $patronymic[0] . '.)<br />Мне ' . $age . ' года.';
    echo '<hr />';

    echo 'TASK 22' . '<br />';
    $text = 'Я';
    $text .= ' хочу';
    $text .= ' знать';
    $text .= ' PHP!';
    echo $text;
    echo '<hr />';

    echo 'TASK 23' . '<br />';
    $var = 10;
    $var = ++$var;
    $var = ++$var;
    $var = --$var;
    echo $var;
    echo '<hr />';

?>
</body>
</html>