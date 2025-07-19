<?php

function bubbleSort($lists)
{
    $length = count($lists);
    for ($parent = 0; $parent < $length; $parent++) {
        for ($child = 0; $child < $length - $parent - 1; $child++) {
            if ($lists[$child] > $lists[$child + 1]) {
                $temp = $lists[$child];
                $lists[$child] = $lists[$child + 1];
                $lists[$child + 1] = $temp;
            }
        }
    }
}

?>

<?php include '../../layouts/header.php'; ?>

<div class="center-div mb-5">
    <hr>
    <?php include '../../layouts/part2.php'; ?>
    <p><span class="fw-semibold">Exercise 6:</span> Fix the code function to output the correct result. <span class="fw-semibold">Explain your answer</span></p>
    <div class="d-flex justify-content-center">
        <img src="/cenard_jade_columna/assets/images/exercise_6.png" class="img-fluid" />
    </div>
    <br>
    <h6>Answer: </h6>
    <p>
        The mistake in this bubble sort function is the <code>$temp = $list[$child + 1];</code>.
        The code inside the <code>if</code> statement is used to exchange the position of left element and the right element.
        Supposedly the <code>$temp</code> variable should temporarily store the left element's value. But it has <code>+ 1</code> which makes it store the 
        right element's value instead. The next line of code <code>$lists[$child] = $lists[$child + 1]</code> , assigns the value of right element to the left element.
        Because of that we lost the original value of first element and makes the function incorrect. 
    </p>
    <p>
        The correct code should be <code>$temp = $list[$child];</code>.
    </p>
    <br>


</div>

<?php include '../../layouts/footer.php'; ?>