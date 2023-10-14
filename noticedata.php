<?php

require_once "database.php";

// Get all events from the database
$sql = 'SELECT * FROM notice';
$stmt = $db->prepare($sql);
$stmt->execute();
$events = $stmt->fetchAll();

echo '<div class="container row row-cols-1 d-flex justify-content-center my-3  p-4 rounded">';
// Render the events data
foreach ($events as $event) {
   
    echo '<div class="col col-md-6  border border-3 border-dark rounded m-2 p-3  shadow">';
    //echo '<img src="admin/images/' . $event['image'] . '" alt="' . $event['title'] . '" class="w-100" />';
    echo '<h2 class="title text-white fw-bold  p-2 rounded text-center m-1">' . $event['title'] . '</h2>';
    echo '<p class="text-justify p-2 bg-light rounded m-1">' . $event['description'] . '</p>';
    echo '<a href="' . $event['link'] . '" class="btn btn-primary m-1" target="_blank">Download PDF File </a><br><hr>';
    
    echo '<span class="p-2 bg-light  text-center rounded   m-1"> Date ' . $event['date'] . '</span>';
    echo '</div>';
    
}
echo '</div>';
// Close the database connection
$db = null;

?>
