<?php

    $text = $_POST['text'];
    $n = $_POST['n'];
    $typeCrypt = $_POST['cipher'];

    $alphabet = range('A', 'Z');
    $textArr = array($text);

    function caesar($textArr, $alphabet, $typeCrypt, $n) {
        array_push($alphabet," "); //добавление пробела в алфавит

        $y = array();
        $x = array();

        for($i = 0; $i < count($textArr); $i++)	{
            for($j = 0; $j <= count($alphabet); $j++){
                // поиск совпадения в массиве alphabet
                if($textArr[$i] == $alphabet[$j]) {
                    $y = ($j + $k) % count($alphabet); // получение шифрованного элемента
                // вычисление подходящего элемента со сдвигом N
                    if($typeCrypt == 'encrypt') {
                        echo $alphabet[$y];} //вывод зашифрованного
                    else {
                        $x = ($y - $k + count($alphabet)) % count($alphabet);
                        echo $alphabet[abs($x)];}
                }
            }
        }
    }
?>
