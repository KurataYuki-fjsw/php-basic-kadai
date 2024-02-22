<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編_kdai_sort</title>
</head>

<body>
    <p>
      <?php
         $nums = [15, 4, 18, 23, 10];

         function sort_2way($nums,$order)	{
          if( $order) {
            echo '昇順にソートします。<br>';
            sort($nums, SORT_NUMERIC);
            foreach($nums as $num){
              echo $num.'<br>';
            }
          } else {
            echo '降順にソートします。<br>';
            rsort($nums, SORT_NUMERIC);
            foreach($nums as $num){
              echo $num.'<br>';
            }
         }
        }

          echo sort_2way($nums,true);
          echo sort_2way($nums,false);

      ?>
    </p>
</body>

</html>