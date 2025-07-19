<?php include '../../layouts/header.php'; ?>

<div class="center-div">
    <hr>
    <?php include '../../layouts/part1.php'; ?>
    <p><span class="fw-semibold">Exercise 4:</span> Create the given pattern</p>
    <br>
    <h6>Output: </h6>
    <br>

    <div class="d-flex justify-content-center mb-5">
        <table>
            <?php
            // NOTE: You can change the height and width
            $height = 6;
            $width = 5;

            $multiplier = 2;

            // NOTE: You can also adjust the size of spacing
            $tabs = str_repeat("&nbsp;", 16);

            for ($i = 0; $i < $height; $i++) {
                echo "<tr>";
                $number = $i + 1;

                for ($j = 0; $j < $width; $j++) {
                    echo '<td class="pb-3 fs-5 fw-bold">';
                    if ($j != 0) {
                        $number *= $multiplier;
                    }
                    echo ($j == $width - 1) ? $number : $number . $tabs;
                    echo "</td>";
                }

                echo "</tr>";

                $multiplier++;
            }
            ?>
        </table>
    </div>
</div>

<?php include '../../layouts/footer.php'; ?>