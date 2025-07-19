<?php
function generateNumber($usedNumbers)
{
    while (true) {
        $num = rand(1, 100);
        if (!in_array($num, $usedNumbers)) {
            break;
        }
    }

    return $num;
}

?>


<?php include '../../layouts/header.php'; ?>

<div class="center-div">
    <hr>
    <?php include '../../layouts/part2.php'; ?>
    <p><span class="fw-semibold">Exercise 2:</span> Manipulation of multidimensional array</p>
    <ul>
        <li>Create a 4 x 4 table</li>
        <li>Generate a random number from 1 - 100</li>
        <li>The number generated should always be unique</li>
        <li>Sum up the number per column and row</li>
    </ul>
    <br>
    <h6>Output: </h6>
    <br>

    <div class="d-flex justify-content-center mb-3">
        <?php
        $height = 4;
        $width = 4;

        $numArray = [];
        $usedNumbers = [];
        // Create values for 2d array
        for ($i = 0; $i < $height; $i++) {
            for ($j = 0; $j < $width; $j++) {
                $num = generateNumber($usedNumbers);
                $numArray[$i][$j] = $num;
            }
        }

        // Display table
        echo '<table class="text-center">';
        for ($i = 0; $i < $height + 1; $i++) {

            echo '<tr>';
            for ($j = 0; $j < $width + 1; $j++) {

                if ($i == $height || $j == $width) {
                    echo '<td class="p-2 px-3 fs-5 fw-bold ">';
                    if ($j == $width && $i != $height) {
                        echo array_sum($numArray[$i]);
                    } else if ($i == $height && $j != $width) {
                        echo array_sum(array_column($numArray, $j));
                    }
                } else {
                    echo '<td class="p-2 px-3 fs-5 border border-2 border-secondary">' . $numArray[$i][$j];
                }
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';

        ?>
    </div>
</div>

<?php include '../../layouts/footer.php'; ?>