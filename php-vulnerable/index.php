<?php
$name = $_GET['name'];
if (!$name) {
    header('Location: /?name=hacker');
    die();
}
?>

<div class="row">
    <div class="col-lg-12">
        <h1>C1</h1>
        <h1>
            Hello <?php echo $name; ?>!!!
        </h1>
        <p>The objective of this exercise is improve your code. </p>
    </div>
</div>

Toe%20Tet%22;%20echo%20phpinfo();//