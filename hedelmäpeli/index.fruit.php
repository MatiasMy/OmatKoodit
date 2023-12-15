<head>
    <link rel="stylesheet" href="fruit.style.css">
    <title>fruitygame</title>
</head>

<?php
$fruits = array("apple", "lemon", "orange", "cherry", "strawberry", "banana", "grape", "jack pot");

?>
<div class="fruits">
<?php
function fruits($fruits){
    $i = 1;
    $rand = rand(0, 7);
    while ($i < 15){
        echo"div class='fruit'>" . $fruits[$rand] . "</div>";
    }
}
?></div><?php
if (isset($_GET["bet"])){
    $bet = $_GET["bet"];
}


fruits($fruits);
?>
<div class="bet">
<form action="" method="get">
    <input type="number" placeholder="bet" id="bet" maxlength="20">
    <input type="button" value="play">
</form>
</div>