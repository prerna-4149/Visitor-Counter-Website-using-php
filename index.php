<?php
// Path to the counter file
$counterFile = "counter.txt";

// Check if the counter file exists
if (!file_exists($counterFile)) {
    // If not, create it and set initial count to 0
    file_put_contents($counterFile, "0");
}

// Read the current count
$counter = (int) file_get_contents($counterFile);

// Increase the count
$counter++;

// Save the new count back to the file
file_put_contents($counterFile, $counter);

// Display the count
echo "<h2>Visitor Count: $counter</h2>";
?>
