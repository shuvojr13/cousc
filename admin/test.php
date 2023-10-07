<!DOCTYPE html>
<html>
<head>
    <title>Event Data</title>
</head>
<body>
    <h2>Event Data</h2>
    <button id="fetchDataButton">Fetch Data</button>
    <div id="eventData"></div>

    <script>
        // Function to fetch and display event data
        function fetchEventData() {
            // Send an AJAX request to the PHP script
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'fetchEventData.php', true);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Parse the JSON response and display the data
                    var eventData = JSON.parse(xhr.responseText);
                    var eventDataHtml = '';

                    eventData.forEach(function(event) {
                        eventDataHtml += '<h3>' + event.title + '</h3>';
                        eventDataHtml += '<p>Date: ' + event.date + '</p>';
                        eventDataHtml += '<p>' + event.description + '</p>';
                        eventDataHtml += '<img src="' + event.image + '" alt="Event Image">';
                    });

                    document.getElementById('eventData').innerHTML = eventDataHtml;
                }
            };

            xhr.send();
        }

        // Attach the fetchEventData function to the button click event
        document.getElementById('fetchDataButton').addEventListener('click', fetchEventData);
    </script>
</body>
</html>
<?php
// Replace with your database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'cousc';

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to retrieve event data from the database
function getEventData($conn) {
    $events = array();

    $query = "SELECT * FROM event";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $events[] = $row;
    }

    return $events;
}

// Close the database connection
mysqli_close($conn);
?>
