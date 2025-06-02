<!DOCTYPE html>
<html>
<head>
    <title>Area Calculator</title>
</head>
<body>
    <h1>Area of a Rectangle</h1>
    <?php
    function calculateArea($length, $width) {
        return $length * $width;
    }

    $length = 5;
    $width = 10;
    $area = calculateArea($length, $width);

    echo "<p>The area of a rectangle with length $length and width $width is $area.</p>";
    ?>
</body>
</html>