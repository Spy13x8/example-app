<?php
$height = 5; // Change the height to adjust the size of the inverted triangle

for ($i = $height; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}
?>

