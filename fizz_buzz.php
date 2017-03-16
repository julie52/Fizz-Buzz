<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>fizz Buzz</title>
  </head>
  <body>
    <?php
      for ($nombres = 1; $nombres <= 100; $nombres ++) {

            if (($nombres % 3==0) || ($nombres % 5==0)) {
                    if ($nombres % 3==0) echo "Fizz";
                    if ($nombres % 5==0) echo "Buzz";
                    echo "<ol> \n </ol>";
            } else {
                    echo $nombres."<ol> \n </ol>";
            }

    }
    ?>
  </body>
</html>
