<!DOCTYPE html>
 <html lang="ja">
 
    <head>
        <meta charset="UTF-8">
        <title>課題：テストの平均点を計算しよう</title>
    </head>
    
    <body>
        <p>
            <?php
            // 生徒10人分の点数を入れる変数score1〜score10を作成
            $score1 = 80;
            $score2 = 60;
            $score3 = 55;
            $score4 = 40;
            $score5 = 100;
            $score6 = 25;
            $score7 = 80;
            $score8 = 95;
            $score9 = 30;
            $score10 = 60;

            // 合計点
            $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
    
            // 平均点を出力
            echo $total / 10;
            ?>
        </p>
    </body>
 
 </html>