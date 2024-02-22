<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編_kdai_016</title>
 </head>
 
 <body>
     <p>
        <?php
         // FOOD
         class Food {
             // プロパティを定義する                        
             private $name;
             private $price;

            public function show_price(){
              echo $this -> price.'<br>';
            }
            
            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
            }
         }
         // インスタンス化する
         $item = new Food('potato', 250);


         //ANIMAL
         class Animal {
          // プロパティを定義する                        
          private $name;
          private $height;
          private $weight;

         public function show_height(){
           echo $this -> height.'<br>';
         }
         
         // コンストラクタを定義する
         public function __construct(string $name, int $height, int $weight) {
         $this->name = $name;
         $this->height = $height;
         $this->weight = $weight;
         }
        }
        // インスタンス化する
        $pet = new Animal('dog', 60, 5000);

        
        print_r($item);
        echo '<br>';
        print_r($pet);
        echo '<br>';
        $item -> show_price();
        $pet -> show_height();

        ?>
     </p>


 </body>
 
 </html>