<?php
$name = '高橋';
$colorname = 'red';
$num = 20;
$num2 = 10;

if($num==20) { /*==は等しいかどうか比較*/
  print("一致");
}
print("処理終了");

if($num==10) { /*==は等しいかどうか比較*/
  print("numの値は[$num]です</br>");
} else {
	print("numの値は[$num]ではありません。");
}
print("終了</br>");

$sample = "orange";
if ( $sample == "apple" || $sample == "orange" ) {
    echo "果物です<br />";/*aまたは$bのどちらか、その両方がtrueのときture*/
} else {
    echo "それ以外です'<br />'";
}

$age = 20;
$gender = "女性";
if ( $age >= 20 && $gender == "女性" ){/*$aかつ$bがtrueのときtrue*/
    echo "20歳以上の女性";
} else {
    echo "それ以外です";
}

echo  8 + 3, '<br />';
echo "6 - 2 = ", 6 - 2, '<br />';
echo "4 * 7 = ", 4 * 7, '<br />';
echo "12 / 4 = ", 12 / 4, '<br />';
echo "5 % 3 = ", 5 % 3;