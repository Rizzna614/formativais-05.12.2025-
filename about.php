<!-- your code goes here -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>About</h1>";

      $indexedArray = [
        "Lorem ipsum dolor sit amet.",
        "Lorem ipsum dolor sit amet, consectetur adipisicing.",
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iusto.",
      ];

          foreach ($indexedArray as $i)
            {
                  echo "<p>". $i. "</p>";
            };


    ?>

    <li><a href = "http://localhost:8000/">Home</a></li>
    <li><a href = "http://localhost:8000/contact.php">Form</a></li>

</body>
</html>