<!DOCTYPE html>
<html>
<head>
    <title>Lab7 - Exercise 1</title>
</head>
<body>
    <h1>1.1</h1>
    <?php
        function F1(float $x) {
            if (-2 < $x && $x < 5) {
                return 5 * $x ** 2 + 6;
            }
            else if ($x >= 5) {
                return $x ** 3 + 7;
            }
        }

        $x = 2;

        print F1($x);
    ?>

    <h1>1.2</h1>
    <?php
        function F2(float $x) {
            if (-3 < $x && $x < 0) {
                return 3 * $x ** 4 + 9;
            }
            else if ($x >= 0) {
                return 5 * $x;
            }
        }

        $x = 2;

        print F2($x);
    ?>

    <h1>1.3</h1>
    <?php
        function F3(float $x) {
            if (1.5 <= $x && $x < 2.5) {
                return $x ** 3 + $x;
            }
            else if ($x < 1.5) {
                return $x;
            }
            else {
                return 3 * $x ** 3 + 5;
            }
        }

        $x = 1;

        print F3($x);
    ?>

    <h1>1.4</h1>
    <?php
        function F4(float $x) {
            if ($x < 1.22) {
                return $x;
            }
            else {
                return 5 * $x ** 3 + 1.7;
            }
        }

        $x = 1;

        print F4($x);
    ?>

    <h1>1.5</h1>
    <?php
        // Function not work well
        function F5(float $x) {
            if (0 < $x && $x < 2) {
                return $x ** 3;
            }
            else if (2 <= $x) {
                return 3 * $x ** 4 + 7;
            }
            else if (5 < $x && $x <= 9) {
                return $x;
            }
        }

        $x = 1;

        print F5($x);
    ?>

    <h1>1.6</h1>
    <?php
        function F6(float $x) {
            if (1.5 <= $x && $x < 2.5) {
                return $x ** 3;
            }
            else if (2.5 <= $x) {
                return 3 * $x ** 3 + 5;
            }
            else {
                return $x;
            }
        }

        $x = 1;

        print F6($x);
    ?>
</body>
</html>