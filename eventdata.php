<?php
error_reporting(0);
require_once "config.php";

//include "admin/database.php";

// Get all events from the database
$sql = 'SELECT title, description, image, date FROM event';
$stmt = $conn->prepare($sql);
$stmt->execute();
$events = $stmt->fetchAll();



echo '<div class="container row row-cols-1 d-flex justify-center items-center my-3  p-4 rounded mx-auto">';
if(!$events){
    echo "<p class='text-center fw-bold bg-light p-2 fs-1'>Stay tuned for upcoming events!</p>";
}
// Render the events data
foreach ($events as $event) {
   
    echo '<div class="col col-md-8 border border-3 border-dark rounded my-2 p-3 bg-event shadow">';
    echo '<img src="admin/images/' . $event['image'] . '" alt="' . $event['title'] . '" class="w-100" />';
    echo '<h2 class="title text-white fw-bold  p-2 rounded text-center m-1">' . $event['title'] . '</h2>';
    echo '<p class="text-justify p-2 bg-white m-1">' . $event['description'] . '</p>';
    
    echo '<p class="p-2 bg-danger text-white text-center rounded fw-bold fs-5 m-1"> Date : ' . $event['date'] . '</p>';
    echo '</div>';
    
}
echo '</div>';


// Close the database connection
$db = null;

?>
