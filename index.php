<?php

// Set the default timezone to UTC
date_default_timezone_set('UTC');

// Function to convert time zone
function convertTimeZone($datetime, $from_timezone, $to_timezone)
{
    // Create DateTime object from the given datetime string and set the timezone
    $dt = new DateTime($datetime, new DateTimeZone($from_timezone));
    
    // Convert the timezone
    $dt->setTimezone(new DateTimeZone($to_timezone));
    
    // Return the formatted datetime string
    return $dt->format('Y-m-d H:i:s');
}

// Usage example
$datetime = '2023-03-15 12:00:00';
$from_timezone = 'America/New_York';
$to_timezone = 'Asia/Tokyo';

echo convertTimeZone($datetime, $from_timezone, $to_timezone); // Output: 2023-03-16 02:00:00
