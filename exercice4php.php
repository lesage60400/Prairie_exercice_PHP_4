<html>
  <head>
    <title>Fizz, Buzz et Fizzbuzz exercice 4 prairie du 09/05/2016</title>
  </head>
  <body>
    <?php
    $min = 1;
    $max = 100;
      for ($i = $min; $i <= $max; $i = $i + 1) {
        if ($i%3 == 0and $i%5 == 0){
          echo "fizzbuzz";
        }
        elseif ($i%3 ==0){
        echo "fizz";
      }
      elseif ($i%5 == 0){
        echo "buzz";
      }
      else{
        echo $i;
      }
      }
    ?>
  </body>
</html>
