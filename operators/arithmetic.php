
<html>
    <head>
        <title>basic arithmetic</title>
    </head>
    <style>
        .code{
            background-color: rgb(19 36 86);
            color: white;
            padding: 3%;
        }
    </style>
</html>
<body>
    <div class="code"><?php
        $first = 18;
        $second = 7;

        echo "<h2>Calculationg...</h2><br>";
        echo "FIRST: $first " . "SECOND: $second <br>";
        echo "Sum: " . ($first + $second) . "<br>";
        echo "Difference: " . ($first - $second) . "<br>";
        echo "Product: " . ($first * $second) . "<br>";
        echo "Quotient: " . ($first / $second) . "<br>";
        echo "Modulus: " . ($first % $second) . "<br>";
        echo "Power: ". ($first ** $second) . "<br>";
    ?>
</div>

</body>
