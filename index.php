<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачки по PHP от простого к сложному</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>
            Задачки по РНР от простого к сложному
        </h1>
    </header>
    <section class="begin">
        <div class="">
            <p>
                Здесь мы будем решать задачки по РНР от простого к сложному.
            </p>
            <p>
                Мы будем не только решать задачки, но и писать код к решению этих задачек.<br>
                Начнем с простых и далее будем переходить к более сложным.
            </p>
            <p>
                Ко всем задачам будет будет код решения, но не ко всем задачам он будет виден через браузер.<br>
                К некоторым задачам будет написано только решение, но без кода или как правильно решить задачу.
            </p>
            <p>
                Код решения задач будет в этом же файле.<br>
                Какая часть кода возможно будет закомментирована, чтобы не загружать сервер.<br>
                Условия задачи будут записаны всегда, а решения по мере необходимости и целесообразности по решению автора.
            </p>
        </div>
    </section>
    <section class="tasks">
        <h2>
            Задачи для решения
        </h2>
        <div class="tasks1">
            <h4>
                Работа с переменными
            </h4>
            <div class="">
                <p>
                    Создайте переменную <b>$a</b> и присвойте ей значение <b>3</b>.<br>
                    Выведите значение этой переменной на экран.
                </p>
                <div class="code_php">
                    <?php
                    $a = 3;
                    echo $a;
                    ?>
                </div>
            </div>
            <div class="">
                <p>
                    Создайте переменные <b>$a=10</b> и <b>$b=2</b>.<br>
                    Выведите на экран их сумму, разность, произведение и частное (результат деления).
                </p>
                <div class="code_php">
                    <?php
                    $a = 10;
                    $b = 2;
                    echo $a + $b . "<br>" . $a - $b . "<br>" . $a * $b . "<br>" . $a / $b;
                    ?>
                </div>
            </div>
            <div class="">
                <p>
                    Создайте переменные <b>$c=15</b> и <b>$d=2</b>.<br>
                    Просуммируйте их, а результат присвойте переменной <b>$result</b>.<br>
                    Выведите на экран значение переменной <b>$result</b>.
                </p>
                <div class="code_php">
                    <?php
                    $c = 15;
                    $d = 2;
                    $result = $c + $d;
                    echo $result;
                    ?>
                </div>
            </div>
            <div class="">
                <p>
                    Создайте переменные <b>$a=10, $b=2</b> и <b>$c=5</b>.<br>
                    Выведите на экран их сумму.
                </p>
                <div class="code_php">
                    <?php
                    $a = 10;
                    $b = 2;
                    $c = 5;
                    echo $a + $b + $c;
                    ?>
                </div>
            </div>
            <div class="">
                <p>
                    Создайте переменные <b>$a=17</b> и <b>$b=10</b>.<br>
                    Отнимите от <b>$a</b> переменную <b>$b</b> и результат присвойте переменной <b>$c</b>.<br>
                    Затем создайте переменную <b>$d</b>, присвойте ей значение <b>7</b>.<br>
                    Сложите переменные <b>$c</b> и <b>$d</b>, а результат запишите в переменную <b>$result</b>.<br>
                    Выведите на экран значение переменной <b>$result</b>.
                </p>
                <div class="code_php">
                    <?php
                    $a = 17;
                    $b = 10;
                    $c = $a - $b;
                    $d = 7;
                    $result = $c + $d;
                    echo $result;
                    ?>
                </div>
            </div>
        </div>
        <div class="tasks">
            <h4>
                Работа со строками
            </h4>
            <div class="">
                <p>
                    Создайте переменную <b>$text</b> и присвойте ей значение 'Привет, Мир!'.<br> Выведите значение этой переменной на экран.
                </p>
                <div class="code_php">
                    <?php
                    $text = 'Привет Мир!';
                    echo "<p>" . $text . "</p>";
                    ?>
                </div>
            </div>
            <div class="">
                <p>
                    Создайте переменные <b>$text1='Привет, '</b> и <b>$text2='Мир!'</b>.<br>
                    С помощью этих переменных и операции конкотенации, а именно поставив <b>точку</b> между переменными, выведите на экран фразу <b>'Привет, Мир!'</b>.
                </p>
                <div class="code_php">
                    <?php
                    $text = 'Привет, ';
                    $text2 = 'Мир!';
                    echo  $text . $text2;
                    ?>
                </div>
            </div>
            <div class="">
                <p>
                    Создайте переменную <b>$name</b> и присвойте ей ваше имя.<br>
                    Выведите на экран фразу <b>'Привет, %Имя%!'</b>.<br>
                    Вместо <b>%Имя%</b> должно стоять ваше имя.
                </p>
                <div class="code_php">
                    <?php
                    $name = 'Александр';
                    $offer = 'Привет, ';
                    echo "<h5 class='subtitle_php'>" . $offer . $name . "</h5>";
                    ?>
                </div>
            </div>
            <div class="">
                <p>
                    Создайте переменную <b>$age</b> и присвойте ей ваш возраст.<br>
                    Выведите на экран <b>'Мне %Возраст% лет!'</b>.
                </p>
                <div class="code_php">
                    <?php
                    $age = 51;
                    $text1 = 'Мне ';
                    $text2 = ' лет!';
                    // $text=''
                    echo "<p>" . 'Мне ' . $age . ' лет!' . "</p>";
                    echo "<p>" . 'или второй вариант с тремя переменными $age = 51;
                    $text1 = Мне ; $text2 =  лет!;' . "<br>" . "<br>" . $text1 . $age . $text2 . "</p>";
                    ?>
                </div>
            </div>
        </div>
        <div class="tasks">
            <h4>
                Обращение к символам строки
            </h4>
            <div class="">
                <p>
                    Создайте переменную <b>$text</b> и присвойте ей значение <b>'abcde'</b>.<br>
                    Обращаясь к отдельным символам этой строки выведите на экран символ <b>'a'</b>, символ <b>'c'</b>, символ <b>'e'</b>.
                </p>
                <div class="code_php">
                    <?php
                    $text = 'abcde';
                    echo "<p>" . $text[0] . "<br>" . $text[2] . "<br>" . $text[4] . "</p>";
                    ?>
                </div>
            </div>
            <div class="">
                <p>
                    Дана произвольная строка, например, <b>'abcde'</b>.<br>
                    Поменяйте первую букву (то есть букву <b>'a'</b>) этой строки на <b>'!'</b>.
                </p>
                <div class="code_php">
                    <?php
                    $letters = 'abcde';
                    echo "<p>" . $letters . "<br>" . "</p>";
                    $letters[0] = '!';
                    echo "<p>" . $letters . "<br>" . "</p>";
                    ?>
                </div>
            </div>
            <div class="">
                <p>
                    Создайте переменную <b>$num</b> и присвойте ей значение <b>'12345'</b>.<br>
                    Найдите сумму цифр этого числа.
                </p>
                <div class="code_php">
                    <?php
                    $num = '12345';
                    echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4];

                    ?>
                </div>
            </div>
        </div>
        <div class="tasks">
            <h4>
                Практика
            </h4>
            <div class="">
                <p>
                    Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.
                </p>
                <div class="code_php">
                    <?php
                    echo (60 * 60) . "<br>";
                    echo (60 * 60 * 24) . "<br>";
                    echo (60 * 60 * 24 * 30);
                    ?>
                </div>
            </div>
            <div class="">
                <p>
                    Создайте три переменные - <b>час, минута, секунда</b>.<br>
                    С их помощью выведите текущее время в формате <b>'час:минута:секунда'</b>.
                </p>
                <div class="code_php">
                    <?php
                    $hour = 'час';
                    $min = 'минута';
                    $sec = 'секунда';

                    echo "<p>" . $hour . " : " . $min . " : " . $sec . "</p>";
                    ?>
                </div>
            </div>
            <div class="">
                <p>
                    Создайте переменную, присвойте ей число.<br>
                    Возведите это число в квадрат (это значит нужно умножить его само на себя).<br>
                    Выведите его на экран.
                </p>
                <div class="code_php">
                    <?php
                    $num = 50;
                    echo $num ** 2;
                    ?>
                </div>
            </div>
        </div>
        <div class="tasks">
            <h4>
                Работа с присваиванием и декрементами
            </h4>
            <div class="">
                <p>
                    Переделайте этот код так, чтобы в нем использовались операции <b>+=, -=, *=, /=</b>.<br>
                    Количество строк кода при этом не должно измениться.
                </p>
                <p>
                    $var = 47;<br>
                    $var = $var + 7;<br>
                    $var = $var - 18;<br>
                    $var = $var * 10;<br>
                    $var = $var / 20;<br>
                    echo $var;
                </p>
                <div class="code_php">
                    <?php
                    $var = 47;
                    $var += 7;
                    $var -= 18;
                    $var *= 10;
                    $var /= 20;
                    echo $var;
                    ?>
                </div>
            </div>
            <div class="">
                <p>
                    Переделайте этот код так, чтобы в нем использовалась операция <b>.=</b>.<br>
                    Количество строк кода при этом не должно измениться.
                </p>
                <p>
                    $text = 'Я';<br>
                    $text = $text.' хочу';<br>
                    $text = $text.' знать';<br>
                    $text = $text.' PHP!';<br>
                    echo $text;
                </p>
                <div class="code_php">
                    <?php
                    $text = 'Я';
                    $text .= ' хочу';
                    $text .= ' знать';
                    $text .= ' PHP!';
                    echo $text;
                    ?>
                </div>
            </div>
            <div class="">
                <p>
                    Переделайте этот код так, чтобы в нем использовались операции <b>++</b> и <b>--</b>.<br>
                    Количество строк кода при этом не должно измениться.
                </p>
                <p>
                    $var = 10;<br>
                    $var = $var + 1;<br>
                    $var = $var + 1;<br>
                    $var = $var - 1;<br>
                    echo $var;
                </p>
                <div class="code_php">
                    <?php
                    $var = 10;
                    $var++;
                    $var++;
                    $var--;
                    echo $var;
                    ?>
                </div>
            </div>
            <div class="">
                <p>
                    Переделайте этот код так, чтобы в нем использовались операции <b>++</b>, <b>--</b>, <b>+=</b>, <b>-=</b>, <b>*=</b>, <b>/=</b>.<br>
                    Количество строк кода при этом не должно измениться.
                </p>
                <p>
                    $var = 10;<br>
                    $var = $var + 7;<br>
                    $var = $var + 1;<br>
                    $var = $var - 1;<br>
                    $var = $var + 12;<br>
                    $var = $var * 7;<br>
                    $var = $var - 15;<br>
                    echo $var;
                </p>
                <div class="code_php">
                    <?php
                    $var = 10;
                    $var += 7;
                    $var++;
                    $var--;
                    $var += 12;
                    $var *= 7;
                    $var -= 15;
                    echo $var;
                    ?>
                </div>
            </div>
        </div>
        <div class="tasks">
            <h4></h4>
            <div class="">
                <p></p>
                <div class="code_php"></div>
            </div>
        </div>
    </section>
    <section class=""></section>
    <section class=""></section>
    <footer></footer>
</body>

</html>