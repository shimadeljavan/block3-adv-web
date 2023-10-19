<style>
    .odd {
        color: red;
    }
</style>
<?php
$myArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

for ($i = 0 ; $i < count($myArray); $i++) {
    $class = ($i+1)%2 ? "odd" : "even";
    echo "<p class='$class'> index:$i contains $myArray[$i]</p>";
}

// $str = "madam";
// function palindrome($str) {
//     $len = strlen($str);
//     for ($i = 0; $i < $len/2; $i++) {
//         if ($str[$i] != $str[$len-$i-1]) {
//             return false;
//         }
//     }
//     return true;
// }

// if (palindrome($str)) {
//     echo "palindrome";
// } else {
//     echo "not palindrome";
// }

?>

<?php
function pali($word) {

    $word = str_replace(' ', '', $word);

    $length = 0;
    for ($i = 0; $word[$i]; $i++) {
        $length++;
    }

    $halfLength = $length / 2;
    for ($i = 0; $i < $halfLength; $i++) {
        if ($word[$i] !== $word[$length - $i - 1]) {
            return "not palindrome";
        }
    }
        return "palindrome";
    
}

$word = "never odd or even";
$result = pali($word);
echo $result;
?>