<?php include '../../layouts/header.php'; ?>

<div class="center-div">
    <hr>
    <?php include '../../layouts/part1.php'; ?>
    <p><span class="fw-semibold">Exercise 3:</span> Create the given pattern</p>
    <br>
    <h6>Output: </h6>
    <br>

    <div class="d-flex justify-content-center mb-5">
        <div>
            <?php
            // NOTE: You can change the size but only use odd numbers for it to work correctly.
            // NOTE: Size is the hieght of the pattern.
            $size = 9;
            
            $mid = round($size / 2);
            $number = 1;
            $reverse = false;

            // NOTE: You can also adjust the size of spacing
            $tabs = str_repeat("&nbsp;", 8);

            for ($i = 0; $i < $size; $i++) {
                echo '<p class="fs-5 fw-bold">';

                for ($j = 0; $j < $number; $j++) {
                    echo ($j == $number - 1) ? $number * ($j + 1) : $number * ($j + 1) . $tabs;
                }

                echo "</p>";

                if ($number >= $mid) {
                    $reverse = true;
                }

                if (!$reverse) {
                    $number++;
                } else {
                    $number--;
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include '../../layouts/footer.php'; ?>