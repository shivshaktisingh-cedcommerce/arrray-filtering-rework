<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         
          $flower = array('key1' => 'lotus', 'key2' => 'lily', 'key3' => 'rose');
          $value = 'lily';
        print_r($flower);
        echo "<br>";
        $filter_array = array_filter($flower, function ($element) use ($value) { return ($element != $value);}); 

        echo "<br>";
        print_r($filter_array);
        
    ?>
</body>
</html>