<?php include '../../layouts/header.php'; ?>

<div class="center-div">
    <hr>
    <?php include '../../layouts/part1.php'; ?>
    <p><span class="fw-semibold">Exercise 2:</span> Create the given pattern (x)</p>
    <br>
    <h6>Output: </h6>
    <br>

    <div class="mb-5">
        <?php
        // NOTE: You can change the size but only use odd numbers for it to work correctly.
        // NOTE: Size is the width of the pattern.
        $size = 11;

        $number = round($size / 2);
        $left = 0;
        $right = $size - 1;
        $reverse = false;

        $spacing = str_repeat("&nbsp;", 8);
        for ($i = 0; $i < $size; $i++) {

            echo '<p class="text-center m-1 fs-5 fw-bold">';

            for ($j = 0; $j < $size; $j++) {
                if ($j == $left || $j == $right) {
                    if ($j % 2 == 0) {
                        echo ($j == $size - 1) ? "*" : "*" . $spacing;
                    } else {
                        echo ($j == $size - 1) ? $number : $number . $spacing;
                    }
                } else {
                    echo ($j == $size - 1) ? "" : $spacing;
                }
            }

            echo "</p>";


            if ($number == 1) {
                $reverse = true;
            }

            if (!$reverse) {
                $number--;
            } else {
                $number++;
            }

            $left++;
            $right--;
        }
        ?>
    </div>
</div>

<?php include '../../layouts/footer.php'; ?>