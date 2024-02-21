<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編_kadai_007</title>
 </head>
 
 <body>
     <p>
         <?php
         // 連想配列に値を代入する
         $data = ['name' => 'onion', 'price' => 200, 'weight' => '160'];
 
         // 連想配列の値を出力する
         print_r($data);
 
         // 改行する
         echo '<br>';
         ?>
     </p>
 </body>
 
 </html>