<?php
session_start();
$_SESSION = [];
?>

<?php include 'layouts/header.php'; ?>

<div class="center-div">
    <hr>
    <p class="text-center fs-4 fw-semibold mb-3">Table of Contents</p>
    <ul class="list-group mx-auto mb-5" style="width: 500px;">
        <!-- Part 1 -->
        <li class="list-group-item list-group-item-dark">Part 1</li>
        <?php for ($i = 1; $i <= 4; $i++) { ?>
            <a class="text-dark" href="tasks/part1/exercise<?php echo $i ?>.php">
                <li class="list-group-item">Exercise <?php echo $i ?></li>
            </a>
        <?php } ?>

    </ul>

    <ul class="list-group mx-auto" style="width: 500px;">
        <!-- Part 2 -->
        <li class="list-group-item list-group-item-dark">Part 2</li>
        <?php for ($i = 1; $i <= 6; $i++) { ?>
            <a class="text-dark" href="tasks/part2/exercise<?php echo $i ?>.php">
                <li class="list-group-item">Exercise <?php echo $i ?></li>
            </a>
        <?php } ?>
    </ul>


</div>

<?php include 'layouts/footer.php'; ?>