<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="index.php; charset=UTF-8">
<title>値を出力</title>

<html>
<head>
        <title>calculator</title>  
        <meta charset="UTF-8">
    </head>
    <body>
        
    <!-- サンプルコード -->
        <?php
        //引数（パラメータ）を指定した関数を定義
        function echo_greeting($greeting){
        echo $greeting."<br/>\n";
        }


        $num1 = $_POST['num1'];	
        $num2 = $_POST['num2'];	
        $type = $_POST['type'];

        function sub($num1, $num2,$type){
            if($type=='+'){
                $sum = $num1 + $num2;
                return $sum;

            } elseif($type=='-') {
                $subtraction = $num1 - $num2;
                return $subtraction;

            }elseif($type=='*') {
                $multiplication = $num1 * $num2;
                return $multiplication;

            }elseif($type=='/') {
                $division = $num1 / $num2;
                return $division;
            }
        }
        
        print '計算結果は'.sub($num1, $num2,$type).'です';

        ?>	
        <div>
        <p><a href="index.php" title="戻る">戻る</a></p>
        </div>
    </body>	
</html>