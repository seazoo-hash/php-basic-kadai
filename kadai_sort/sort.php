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
        sort($nums);
        foreach($nums as $nums){
            echo $nums . '<br>';
        }

        echo '<br>';

        // 降順にソート
        $nums = [15, 4, 18, 23, 10 ];
        echo "降順にソートします。<br>";
        rsort($nums);
        foreach($nums as $nums){
            echo $nums . '<br>';
        }
        ?>
    </p>
</body>

</html>
