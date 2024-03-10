<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題４：PHPマニュアルを参照してソート関数を実装してみよう</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく

        // 配列を作成
        $nums = [15, 4, 18, 23, 10 ];

        // 昇順にソート
        // 関数を呼び出す
        sort_2way($nums, true);

        echo '<br>';

        // 降順にソート
        // 関数を呼び出す
        sort_2way($nums, false);

        // 独自のソート関数
        function sort_2way($array, $order){
            if($order){
                echo "昇順にソートします。<br>";
                sort($array);
                foreach($array as $array){
                    echo $array . '<br>';
                }        
            }else{
                echo "降順にソートします。<br>";
                rsort($array);
                foreach($array as $array){
                    echo $array . '<br>';
                }        
            }
        }
        ?>
    </p>
</body>

</html>
