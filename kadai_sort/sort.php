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

         function sort_2way($order,$nums)	{
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

          $order = true;
          echo sort_2way($order,$nums);

          $order = false;
          echo sort_2way($order,$nums);

      ?>
    </p>
</body>

</html>