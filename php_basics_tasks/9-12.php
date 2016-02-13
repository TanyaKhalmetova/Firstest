<?php
$day="7";
switch ($day)
{
    case ($day >= 1 && <= 5):
echo "Это рабочий день";
break;
    case ($day >= 6 && <= 7):
echo "Это выходной день";
break;
    case ($day > 7):
        echo "Неизвестный день";
}
?>