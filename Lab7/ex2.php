<!DOCTYPE html>
<html>
<head>
    <title>Lab7 - Exercise 2</title>
</head>
<body>
    <h1>2.1</h1>
    <?php
        function Sum(float $x, int $n) {
            $sum = 0;
            
            for ($i = 1; $i <= $n; ++$i) {
                $sum += $x ** $i / 2;
            }

            return $sum;
        }

        print Sum(3, 25);
    ?>

    <h1>2.2</h1>
    <?php
        function Product(float $x, int $n) {
            $product = 1;
            $i = 1;

            do {
                $product *= 1 + $i++ * $x / 3;
            } while ($i <= $n);

            return $product;
        }

        print Product(2, 25);
    ?>
</body>
</html>