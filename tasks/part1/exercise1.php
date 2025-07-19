<?php include '../../layouts/header.php'; ?>

<div class="center-div">
    <hr>
    <?php include '../../layouts/part1.php'; ?>
    <p><span class="fw-semibold">Exercise 1:</span> Create the given pattern</p>
    <br>
    <h6>Output: </h6>
    <br>

    <div class="mb-5">
        <?php
        // NOTE: You can change the size but only use odd numbers for it to work correctly.
        // NOTE: Size is the width of the pattern.
        $size = 7;

        $mid = floor($size / 2);
        $left = $mid;
        $right = $mid;
        $reverse = false;

        $spacing = str_repeat("&nbsp;", 8);
        for ($i = 0; $i < ($size * 2) - 1; $i++) {
            if ($i != 0) {
                if ($left == 0 && !$reverse) {
                    $reverse = true;
                } else if ($left == $mid) {
                    $reverse = false;
                }

                if (!$reverse) {
                    $left--;
                    $right++;
                } else {
                    $left++;
                    $right--;
                }
            }
            echo '<p class="text-center m-1 fs-5 fw-bold">';

            for ($j = 0; $j < $size; $j++) {
                if ($j == $left || $j == $right) {
                    echo ($j == $size - 1) ? "*" : "*" . $spacing;
                } else {
                    echo ($j == $size - 1) ? "" : $spacing;
                }
            }

            echo "</p>";
        }
        ?>
    </div>
</div>

<?php include '../../layouts/footer.php'; ?>