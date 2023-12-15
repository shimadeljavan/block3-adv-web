<?php
if($dishs) {
    foreach($dishs as $dish) {
        echo $dish['dishID'] . ' ' . $dish['dishName']. ' ' . $dish['price'] .'<br>';
    }
} else {
    echo 'No dish found';
}
?>