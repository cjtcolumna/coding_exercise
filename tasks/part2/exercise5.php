<?php
function generateRandomConsonant()
{
    $consonants = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z'];
    return $consonants[array_rand($consonants)];
}

?>

<?php include '../../layouts/header.php'; ?>

<div class="center-div">
    <hr>
    <?php include '../../layouts/part2.php'; ?>
    <p><span class="fw-semibold">Exercise 5:</span> Using a PHP POST method, ask the user to input 2 numbers</p>
    <ul>
        <li>Create a grid using 2 inputs as the length and width</li>
        <li>Insert a random CONSONANT letters into the grid</li>
        <li>Display the grid in table</li>
    </ul>
    <br>
    <h6>Output: </h6>
    <br>

    <?php if (!empty($_POST)) { ?>
        <div class="d-flex justify-content-center mb-3">
            <table class="text-center">
                <?php
                $length = $_POST['length'];
                $width = $_POST['width'];

                for ($i = 0; $i < $length; $i++) {
                    echo '<tr>';

                    for ($j = 0; $j < $width; $j++) {
                        echo '<td class="p-2 px-3 fs-5 border border-2 border-secondary">';
                        echo generateRandomConsonant();
                        echo "</td>";
                    }

                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    <?php } ?>

    <div class="d-flex justify-content-center">
        <form method="POST">
            <div class="mb-3">
                <label for="length" class="form-label">Length</label>
                <input type="number" name="length" id="length" class="form-control" style="width: 450px" value="1" />
            </div>
            <div class="mb-3">
                <label for="width" class="form-label">Width</label>
                <input type="number" name="width" id="width" class="form-control" style="width: 450px" value="1" />
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" style="width: 200px">Submit</button>
            </div>

        </form>
    </div>
</div>

<?php include '../../layouts/footer.php'; ?>