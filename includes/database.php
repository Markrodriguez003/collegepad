<?php


// Database information 
$connect = mysqli_connect('localhost', "CollegePad", 'Secret22!!!', 'CollegePad');

// Checks to see if connections to MySql database is in an error state
if (mysqli_connect_errno()) {
    exit('Failed to connect to MYSQL database' . mysqli_connect_error());
}
 