<!-- counter.php -->
<?php
$counterFile = "counter.txt"; // Create a text file to store the count

if (file_exists($counterFile)) {
    $count = (int) file_get_contents($counterFile);
    $count++;
} else {
    $count = 1;
}

file_put_contents($counterFile, $count);
echo "Number of visitors to this page so far: $count";
?>
