<!DOCTYPE html>
 <html lang="ja">
 
    <head>
        <meta charset="UTF-8">
        <title>課題３：foreach文を使って連想配列の値とキーを出力しよう</title>
    </head>
    
    <body>
        <p>
            <?php
            // 連想配列を作成し、変数に代入
            $product_info = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
    
            // foreach文とecho文を使いブラウザに要素それぞれのキーと値を出力
            foreach($product_info as $key => $value){
                echo "{$key}：{$value}<br>";
            }
            ?>
        </p>
    </body>
 
 </html>