<?php
$name = '高橋';
$colorname = 'red';
$num = 20;
$num2 = 10;


$sample = "orange";

switch( $sample ){/*$sampleが*/
    case "apple":
    case "orange":
    case "pineapple":
        echo "果物です";/*Appleとorangeとpineappleだったら果物*/
        break;/*ここで一回切る*/
    case "cabbage":
    case "carrot":
        echo "野菜です";/*cabbageとcarrotだったら果物*/
        break;/*ここで一回切る*/
    default:
        echo "それ以外です";
        break;
}

echo  8 + 3, '<br />';
echo "6 - 2 = ", 6 - 2, '<br />';
echo "4 * 7 = ", 4 * 7, '<br />';
echo "12 / 4 = ", 12 / 4, '<br />';
echo "5 % 3 = ", 5 % 3;