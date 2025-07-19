<?php include '../../layouts/header.php'; ?>

<div class="center-div">
    <hr>
    <?php include '../../layouts/part2.php'; ?>
    <p><span class="fw-semibold">Exercise 1:</span> Generate a random character from a-k</p>
    <ul>
        <li>Create a 4 x 5 table</li>
        <li>Display all the random characters inside the table</li>
        <li>Highlight all the character that belongs to the even column</li>
    </ul>
    <br>
    <h6>Output: </h6>
    <br>

    <div class="d-flex justify-content-center mb-3">
        <?php
        $height = 4;
        $width = 5;

        echo '<table class="text-center">';
        for ($i = 0; $i < $height; $i++) {

            echo '<tr>';

            for ($j = 0; $j < $width; $j++) {
                // ASCII for letters a - k is 97 - 107 
                $ascii = rand(97, 107);
                $randomLetter = chr($ascii);

                // Highlights char that belongs to even column
                echo ($ascii % 2 == 1) ?
                    '<td class="p-2 px-3 fs-5 bg-success border border-2 border-secondary" style="--bs-bg-opacity: .3;">' . strtoupper($randomLetter) :
                    '<td class="p-2 px-3 fs-5 border border-2 border-secondary">' . $randomLetter;

                echo "</td>";
            }

            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</div>

<?php include '../../layouts/footer.php'; ?>