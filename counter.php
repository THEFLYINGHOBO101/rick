<!-- counter.php -->
<?php
$counterFile = 'counter.txt'; // Path to your counter.txt file

// Read the existing visitor count from the file
$visitorCount = (int) file_get_contents($counterFile);

// Increment the count (for demonstration purposes)
$visitorCount++;

// Save the updated count back to the file
file_put_contents($counterFile, $visitorCount);

echo "Number of visitors to this page so far: $visitorCount";
?>

