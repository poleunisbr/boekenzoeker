<?php
// MySQL database Configuration
$DB_SERVER = "localhost";
$DB_USERNAME = "boekenzoeker";
$DB_PASSWORD = "boekenzoeker";
$DB_DATABASE = "boekenzoeker";

// MQTT Configuration
$MQTT_SERVER = "10.0.30.40";
$MQTT_PORT = 1883;



// Create connection
$conn = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
