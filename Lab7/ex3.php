<!DOCTYPE html>
<html>
<head>
    <title>Lab7 - Exercise 3</title>
</head>
<body>
    <h1>3.1</h1>
    <?php

        function SumAndPositiveCount(array $arr) {
            $sum = 0;
            $positive_count = 0;
    
            foreach ($arr as $value) {
                $sum += $value;
    
                if ($value > 0) {
                    $positive_count++;
                }
            }
    
            print "Sum: " . $sum . "\n";
            print "Number of positive: " . $positive_count;
        }

        SumAndPositiveCount(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10));
    ?>

    <h1>3.2</h1>
    <?php
    
        function MinAndMaxIndices(array $arr) {
            $min = $arr[0];
            $min_index = 0;
            $max = $arr[0];
            $max_index = 0;
    
            foreach ($arr as $index => $value) {
                if ($value > $max) {
                    $max = $value;
                    $max_index = $index;
                }

                if ($value < $min) {
                    $min = $value;
                    $min_index = $index;
                }
            }
    
            print "Min value: " . $min . " (index: " . $min_index . ")\n";
            print "Max value: " . $max . " (index: " . $max_index . ")\n";
        }

        MinAndMaxIndices(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 2, 12 , 2, -1 , 2, 1, 44, 1, -2, 1));
    ?>

    <h1>3.3</h1>
    <?php
    
        function MinOnOddIndex(array $arr) {
            $min = $arr[1];
    
            for ($i = 1; $i < sizeof($arr); $i += 2) {
                if ($arr[$i] < $min) {
                    $min = $arr[$i];
                }
            }
    
            return $min;
        }

        print MinOnOddIndex(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12 , 2, -1 , -3, -1));
    ?>

    <h1>3.4</h1>
    <?php
    
        function SumAndPositiveCountBetweenMinAndMaxIndices(array $arr) {
            $min = $arr[0];
            $min_index = 0;
            $max = $arr[0];
            $max_index = 0;
    
            foreach ($arr as $index => $value) {
                if ($value > $max) {
                    $max = $value;
                    $max_index = $index;
                }

                if ($value < $min) {
                    $min = $value;
                    $min_index = $index;
                }
            }

            $sum = 0;
            $positive_count = 0;

            $less = $min_index <= $max_index ? $min_index : $max_index;
            $greater = $min_index >= $max_index ? $min_index : $max_index;
    
            for ($i = $less; $i <= $greater; $i++) {
                $sum += $arr[$i];
    
                if ($arr[$i] > 0) {
                    $positive_count++;
                }
            }

            print "Min value: " . $min . " (index: " . $min_index . ")\n";
            print "Max value: " . $max . " (index: " . $max_index . ")\n";
            print "Sum: " . $sum . "\n";
            print "Number of positive: " . $positive_count;
        }

        SumAndPositiveCountBetweenMinAndMaxIndices(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12 , 2, -1 , -3, -1, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12 , 2, -1 , -3, -1));
    ?>

    <h1>3.5</h1>
    <?php
    
        function ConditionalSumOfPositives(array $arr) {
            $found = false;
            $sum = 0;
            
            foreach ($arr as $value) {
                if ($value == 5) {
                    $found = true;
                }

                if ($value > 0) {
                    $sum += $value;
                }
            }

            if ($found) {
                return $sum;
            }
        }

        print ConditionalSumOfPositives(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12 , 2, -1 , -3, -1));
    ?>

    <h1>3.6</h1>
    <?php
    
        function SumOfNegatives(array $arr) {
            $sum = 0;
            
            foreach ($arr as $value) {
                if ($value < 0) {
                    $sum += $value;
                }
            }

            return $sum;
        }

        print SumOfNegatives(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12 , -2));
    ?>

    <h1>3.7</h1>
    <?php
    
        function MaxValueAndIndex(array $arr) {
            $max = $arr[0];
            $max_index = 0;
    
            foreach ($arr as $index => $value) {
                if ($value > $max) {
                    $max = $value;
                    $max_index = $index;
                }
            }
    
            print "Max value: " . $max . " (index: " . $max_index . ")\n";
        }

        MaxValueAndIndex(array(1, 2, 3, 4, 5, 6, 7, 88, 9, 10, 2, 12 , 2, -1 , 2, 1, 22, 1, -2, 1));
    ?>

    <h1>3.8</h1>
    <?php
    
        function MinOnOddIndex2(array $arr) {
            $min = $arr[1];
    
            for ($i = 1; $i < sizeof($arr); $i += 2) {
                if ($arr[$i] < $min) {
                    $min = $arr[$i];
                }
            }
    
            return $min;
        }

        print MinOnOddIndex2(array(1, 2, 3, 4, 5, 6, 9, 10, 12 , 2, -1 , -3, -1));
    ?>

    <h1>3.9</h1>
    <?php
        function SumAndPositiveCountBetweenMinAndMaxIndices2(array $arr) {
            $min = $arr[0];
            $min_index = 0;
            $max = $arr[0];
            $max_index = 0;
    
            foreach ($arr as $index => $value) {
                if ($value > $max) {
                    $max = $value;
                    $max_index = $index;
                }

                if ($value < $min) {
                    $min = $value;
                    $min_index = $index;
                }
            }

            $sum = 0;
            $positive_count = 0;

            $less = $min_index <= $max_index ? $min_index : $max_index;
            $greater = $min_index >= $max_index ? $min_index : $max_index;
    
            for ($i = $less; $i <= $greater; $i++) {
                $sum += $arr[$i];
    
                if ($arr[$i] > 0) {
                    $positive_count++;
                }
            }

            print "Min value: " . $min . " (index: " . $min_index . ")\n";
            print "Max value: " . $max . " (index: " . $max_index . ")\n";
            print "Sum: " . $sum . "\n";
            print "Number of positive: " . $positive_count;
        }

        SumAndPositiveCountBetweenMinAndMaxIndices2(array(1, 2, 3, 4, 5, 6, 7));
    ?>

    <h1>3.10</h1>
    <?php
    
        function ConditionalSumOfPositives2(array $arr) {
            $found = false;
            $sum = 0;
            
            foreach ($arr as $value) {
                if ($value == 7) {
                    $found = true;
                }

                if ($value > 0) {
                    $sum += $value;
                }
            }

            if ($found) {
                return $sum;
            }
        }

        print ConditionalSumOfPositives2(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12 , 2, 24, -1));
    ?>

    <h1>3.11</h1>
    <?php
    
        function MinAndMaxIndices2(array $arr) {
            $min = $arr[0];
            $min_index = 0;
            $max = $arr[0];
            $max_index = 0;
    
            foreach ($arr as $index => $value) {
                if ($value > $max) {
                    $max = $value;
                    $max_index = $index;
                }

                if ($value < $min) {
                    $min = $value;
                    $min_index = $index;
                }
            }
    
            print "Min value: " . $min . " (index: " . $min_index . ")\n";
            print "Max value: " . $max . " (index: " . $max_index . ")\n";
        }

        MinAndMaxIndices2(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 2, 12 , 2, -1 , 2, 1, 44, 1, -2, 1));
    ?>

    <h1>3.12</h1>
    <?php
    
        function MaxOnOddIndex(array $arr) {
            $max = $arr[1];
    
            for ($i = 1; $i < sizeof($arr); $i += 2) {
                if ($arr[$i] > $max) {
                    $max = $arr[$i];
                }
            }
    
            return $max;
        }

        print MaxOnOddIndex(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12 , 2, -1 , -3, -1));
    ?>
</body>
</html>