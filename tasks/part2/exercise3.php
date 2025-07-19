<?php
session_start();

if (empty($_SESSION['stack'])) {
    $_SESSION['stack'] = [];
}

if (!empty($_POST)) {
    // Form submitted
    if (!empty($_POST['push']) && is_numeric($_POST['number'])) {
        $_SESSION['stack'] = manual_push($_SESSION['stack'], $_POST['number']);
    } else if (!empty($_POST['pop'])) {
        $_SESSION['stack'] = manual_pop($_SESSION['stack']);
    }
}
?>

<?php

function manual_count($array)
{
    $counter = -1;
    foreach ($array as $key => $value) {
        $counter++;
    }

    return $counter;
}

function manual_push($stack, $number)
{
    $lastIndex = manual_count($stack);
    $stack[$lastIndex + 1] = $number;

    return $stack;
}

function manual_pop($stack)
{
    $lastIndex = manual_count($stack);

    if ($lastIndex != -1) {
        unset($stack[$lastIndex]);
    }

    return $stack;
}

?>

<?php include '../../layouts/header.php'; ?>

<div class="center-div">
    <hr>
    <?php include '../../layouts/part2.php'; ?>
    <p><span class="fw-semibold">Exercise 3:</span> Create a stack of integers using arrays (First in last out)</p>
    <ul>
        <li>Create input fields and push a button to insert a new value</li>
        <li>Create a pop button to remove the top value</li>
        <li>Always display the existing stack content</li>
        <li>Do not use pre-defined PHP array functions like <span class="fw-semibold">array_pop</span></li>
    </ul>
    <br>
    <h6>Output: </h6>
    <br>


    <div class="d-flex justify-content-center mb-4 fs-5 fw-semibold">
        <span>[</span>
        <?php echo !empty($_SESSION['stack']) ? implode(', ', $_SESSION['stack']) : ""; ?>
        <span>]</span>
    </div>
    <div class="d-flex justify-content-center">
        <form method="POST">
            <div class="mb-3">
                <label for="number" class="form-label">Input a number</label>
                <input type="number" name="number" id="number" class="form-control" style="width: 450px" placeholder="0" />
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" name="push" value="1" class="btn btn-primary" style="width: 200px">Push</button>
                <button type="submit" name="pop" value="1" class="btn btn-danger" style="width: 200px">Pop</button>
            </div>

        </form>
    </div>
</div>

<?php include '../../layouts/footer.php'; ?>

<script>

</script>