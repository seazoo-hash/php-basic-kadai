<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく

        // 昇順にソート
        $nums = [15, 4, 18, 23, 10 ];
        echo "昇順にソートします。<br>";
        // 関数を呼び出す
        sort_2way($nums, true);

        echo '<br>';

        // 降順にソート
        $nums = [15, 4, 18, 23, 10 ];
        echo "降順にソートします。<br>";
        // 関数を呼び出す
        sort_2way($nums, false);

        // 独自のソート関数
        function sort_2way($array, $order){
            if($order){
                sort($array);
                foreach($array as $array){
                    echo $array . '<br>';
                }        
            }else{
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
