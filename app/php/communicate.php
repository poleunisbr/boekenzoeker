<?php
// Check if the script is called by a post request
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // If not, send a 405 error
    http_response_code(405);
    exit;
}

// Require the autoload file
require_once '../../vendor/autoload.php';
// Require the db.php file
require_once 'config.php';

//Create a new instance of the MqttClient
$server = "10.0.30.40";
$port     = 1883;
$clientId = 'webserver';
$mqtt = new \PhpMqtt\Client\MqttClient($server, $port, $clientId);

// Get the lightID from the post value
$lightID = $_POST["lightID"];

// This function converts a HEX color to RGB
function hexToRgb($hexColor) {
    // Remove the '#' symbol from the beginning of the hex color string
    $hexColor = ltrim($hexColor, '#');
    
    // Convert the hex color to RGB values
    $red = hexdec(substr($hexColor, 0, 2));
    $green = hexdec(substr($hexColor, 2, 2));
    $blue = hexdec(substr($hexColor, 4, 2));
    
    // Return the RGB values as an array
    return array($red, $green, $blue);
}





// We know the lightid from the post value now get the mqtt address from the database
$sql ="
SELECT z.zone, l.mqttadress, z.kleur
FROM Zone z
         JOIN ZoneLamp zl ON z.zoneid = zl.zoneid
         JOIN Lamp l ON zl.lampid = l.lampid
WHERE z.zoneid = ".$lightID.";
";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
        $address = $row["mqttadress"] . "/api";
        $kleur = $row["kleur"];
        // The kleur value is a HEX value, we need to convert it to RGB with the 3 values in an array
        $kleur = hexToRgb($kleur);
        $zone = $row["zone"];
        $mqttCommand = '{"on":true,"bri":255,"transition":7,"mainseg":0,"seg":[{"id":0,"start":0,"stop":144,"grp":1,"spc":0,"of":0,"on":true,"frz":false,"bri":255,"cct":127,"col":[['.$kleur[0].','.$kleur[1].','.$kleur[2].'],[0,0,0],[0,0,0]],"fx":100,"sx":100,"ix":255,"pal":0,"sel":true,"rev":false,"mi":false},{"stop":0},{"stop":0},{"stop":0},{"stop":0},{"stop":0},{"stop":0},{"stop":0},{"stop":0},{"stop":0},{"stop":0},{"stop":0},{"stop":0},{"stop":0},{"stop":0},{"stop":0}]}';
        $mqtt->connect();
        $mqtt->publish($address, $mqttCommand, 0);
        $mqtt->disconnect();
        $script_path = '/opt/boekenzoeker/turn_off.sh';
        // Address can be injected with scripts so we need to escape it
        $address = escapeshellarg($address);
        $cmd = "nohup $script_path $address 10 > /dev/null 2>&1 &";
        shell_exec($cmd);

        echo $cmd;

    }
}







